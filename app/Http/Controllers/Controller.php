<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private function setLang(){
        if(request()->session()->get('locale') != null){
            App::setLocale(request()->session()->get('locale'));
        }
    }

    public function onboarding(){
        $this->setLang();
        $user = User::all();
        if(auth()->check()){
            return redirect()->route('home');
        }

        if(request()->gender != null){
            $user = $user->where('gender', request()->gender);
        }

        return view('boarding', ['user' => $user]);
    }

    public function homePage(){
        $this->setLang();
        $user = User::all();

        if(request()->gender != null){
            $user = $user->where('gender', request()->gender);
        }

        return view('home', ['user'=>$user]);
    }

    public function search(Request $req){
        $this->setLang();
        $data = User::getSearchData($req->searchData);
        return view('search', ['data'=>$data]);
    }

    public function searchHome(Request $req){
        $this->setLang();
        $data = User::getSearchData($req->searchData);
        return view('search-home', ['data'=>$data]);
    }
}

