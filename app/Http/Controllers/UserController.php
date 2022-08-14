<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }

    public function login()
    {
        $this->setLang();
        return view('account.login');
    }

    public function register()
    {
        $this->setLang();
        return view('account.register');
    }

    public function profile()
    {
        $this->setLang();
        return view('account.profile');
    }

    public function registerProcess(Request $request)
    {
        $this->setLang();
        $validateData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'confirm-password' => 'required|same:password',
            'terms' => 'accepted',
        ]);

        $validateData["password"] = bcrypt($validateData["password"]);
        // $user = User::create($validateData);
        $data = ['name' => $request->name, 'email' => $request->email, 'password' => $request->password, 'price' => rand(100000, 125000)];
        session(['data' => $data]);

        return redirect('register/profile');
        // return redirect('register/profile')->with(["data" => $data]);
    }

    public function profileProcess(Request $request)
    {
        $this->setLang();
        $request->validate([
            'gender' => 'in:Male,Female',
            'age' => 'required|integer',
            'hobby1' => 'required',
            'hobby2' => 'required',
            'hobby3' => 'required',
            'instagram' => 'required|url|starts_with:https://www.instagram.com/',
            'mobile_number' => 'required|numeric',
            'language' => 'in:Indonesia,English',
            'location' => 'required',
            // 'profile_picture' => 'required|image',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->gender = $request->gender;
        $user->age = $request->age;
        $user->coin = 100;
        $user->hobby1 = $request->hobby1;
        $user->hobby2 = $request->hobby2;
        $user->hobby3 = $request->hobby3;
        $user->instagram = $request->instagram;
        $user->mobile_number = $request->mobile_number;
        $user->language = $request->language;
        $user->location = $request->location;
        $user->profile_picture = $request->profile_picture;
        $user->register_price = rand(100000, 125000);
        $user->isVisible = true;
        $user->save();

        return redirect()->route('login_page')->withSucess('Registed Successfully');
    }

    public function loginProcess(Request $request)
    {
        $this->setLang();
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ],[
            'required' => trans('validation.required'),
            'dns' => trans('validation.email'),
            'min' => trans('validation.min.string'),
        ]);

        if(Auth::attempt($credentials)){
            return redirect()->route('home');
        }
        else {
            return redirect()->back()->withInput()->withErrors(['error' => trans('validation.custom.attribute-name.check_data')]);
        }
    }

    public function logout(Request $request)
    {
        auth()->logout();
        return redirect()->route('boarding')->withSuccess('Logged Out Successfully');
    }
}
