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
        <div class="container d-flex justify-content-center">
            <h2 class="fw-bolder pb-4" style="color: var(--sLight)">@lang('account.register-title')</h2>
        </div>
        <div class="container" style="width: 800px; background-color: var(--white); padding:0% 5% 0% 5%; border-radius: 40px;">
            <form style="color: var(--black);" action="{{ route('register') }}" method="post">
                @csrf
                <h1 class="h1 text-center pt-5 pb-3">@lang('account.register')</h1>

                {{-- name --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-register-1">@lang('account.name')</label>
                    <input type="text" name="name" id="form-register-1" class="form-control" placeholder="@lang('account.name-placeholder')" value={{ old('name') }}>
                </div>

                {{-- email --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-register-2">@lang('account.email')</label>
                    <input type="email" name="email" id="form-register-2" class="form-control" placeholder="@lang('account.email-placeholder')" value={{ old('email') }}>
                </div>

                {{-- password --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-register-3">@lang('account.password')</label>
                    <input type="password" name="password" id="form-register-3" class="form-control"  placeholder="@lang('account.password-placeholder')">
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form-register-4">@lang('account.confirm-password')</label>
                    <input type="password" name="confirm-password" id="form-register-4" class="form-control"  placeholder="@lang('account.confirm-password-placeholder')">
                </div>

                <div class="form-outline">
                    <div class="d-flex justify-content-between">
                        {{-- checkbox --}}
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="true" name="terms" id="form-register-5">
                            <label class="form-check-label" for="form-register-5"> @lang('account.checkbox') </label>
                        </div>
                        <div class="text-center">
                            <p>@lang('account.login-link') <a style="color: var(--primary)" href="/login">@lang('account.login')</a></p>
                        </div>
                    </div>
                </div>

                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif

                {{-- submit button --}}
                <div class="text-center py-4">
                    <button type="submit" class="secondary-button" href="/register/profile">NEXT</button>
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
