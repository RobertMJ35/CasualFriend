<?php
    $data = Session::get('data');
?>

@extends('template')

@section('title','Register')

@section('content')
    <div class="modal fade" id="lang-popup" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="">@lang('boarding.default_language')</h5>
                </div>
                <div class="modal-body row d-flex justify-content-center align-items-center my-auto">
                    <div class="label-lang col-4">
                        <p>@lang('boarding.choose_language') :</p>
                    </div>
                    <select class="form-select col-4 w-50" name="lang" id="lang-select">
                        <?php
                            $lang = request()->session()->get('locale');
                        ?>
                        <option value="/lang/en"
                            {{ $lang != null && $lang == 'en' ? 'selected' : '' }}>English
                        </option>
                        <option value="/lang/id"
                            {{ $lang != null && $lang == 'id' ? 'selected' : '' }}>Indonesia
                        </option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" type="submit" class="primary-button" id="change-button">@lang('boarding.save_changes')</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5" style="background-color: var(--second);">
        <div class="container" style="width: 800px; background-color: var(--white); padding:0% 5% 0% 5%; border-radius: 40px;">
            <form style="color: var(--black);" action="{{ route('profile') }}" method="post">
                @csrf
                <h1 class="h1 text-center pt-5 pb-3">@lang('account.profile')</h1>

                {{-- hidden --}}
                <input type="hidden" name="name" value="{{ $data['name'] }}">
                <input type="hidden" name="email" value="{{ $data['email'] }}">
                <input type="hidden" name="password" value="{{ $data['password'] }}">

                {{-- profile picture --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="profilePicture">@lang('account.profile-picture')</label>
                    <div class="d-flex justify-content-center my-2">
                        <img class="profile-preview" id="profile-preview"/>
                    </div>
                    <input class="form-control" type="file" onchange="profilePreview(event)" id="profilePicture" name="profile_picture" accept="image/*">
                </div>

                {{-- gender --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data">@lang('account.gender')</label>
                    <div class="col d-flex">
                        <div class="form-check ms-3 me-5">
                            <input class="form-check-input" type="radio" name="gender" id="form-data-1" value="Male">
                            <label class="form-check-label" for="form-data-1">@lang('account.gender1')</label>
                        </div>
                        <div class="form-check ms-5">
                            <input class="form-check-input" type="radio" name="gender" id="form-data-2" value="Female">
                            <label class="form-check-label" for="form-data-2">@lang('account.gender2')</label>
                        </div>
                    </div>
                </div>

                {{-- age --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data-8">@lang('account.age')</label>
                    <input type="number" name="age" id="form-data-8" class="form-control"  placeholder="@lang('account.age-placeholder')" value={{ old('age') }}>
                </div>

                {{-- hobby --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data-3">@lang('account.hobby')</label>
                    <div class="row d-flex ms-0" style="width: 655px">
                        <input type="text" name="hobby1" id="form-data-3" class="col form-control me-2" placeholder="@lang('account.hobby1')" value={{ old('hobby1') }}>
                        <input type="text" name="hobby2" id="form-data-3" class="col form-control mx-2" placeholder="@lang('account.hobby2')" value={{ old('hobby2') }}>
                        <input type="text" name="hobby3" id="form-data-3" class="col form-control ms-2" placeholder="@lang('account.hobby3')" value={{ old('hobby3') }}>
                    </div>
                </div>

                {{-- instagram --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data-4">@lang('account.instagram')</label>
                    <input type="text" name="instagram" id="form-data-4" class="form-control"  placeholder="@lang('account.instagram-placeholder')" value={{ old('instagram') }}>
                </div>

                {{-- mobile number --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data-5">@lang('account.mobile-number')</label>
                    <input type="number" name="mobile_number" id="form-data-5" class="form-control"  placeholder="@lang('account.mobile-number-placeholder')" value={{ old('mobile-number') }}>
                </div>

                {{-- language--}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data-6">@lang('account.language')</label>
                    <select class="form-select" aria-label="Default select example" id="form-data-6" name="language">
                        <option selected>@lang('account.language-placeholder')</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="English">English</option>
                    </select>
                </div>

                {{-- location --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-data-7">@lang('account.location')</label>
                    <input type="text" name="location" id="form-data-7" class="form-control"  placeholder="@lang('account.location-placeholder')" value={{ old('location') }}>
                </div>

                <h2>Rp. {{ $data['price'] }}</h2>

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif

                {{-- Submit button --}}
                <div class="text-center py-5">
                    <button type="submit" class="primary-button">@lang('account.register')</button>
                </div>
            </form>
        </div>
    </div>
    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="background-color: var(--sLight)">
        <p class="title-footer mb-0 ms-3" style="color: var(--second)">Beeverse Project</p>
        <p class="mb-0 me-3" style="color: var(--white)">Robert Muliawan Jaya</p>
    </div>
@endsection
