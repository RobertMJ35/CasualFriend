@extends('template')

@section('title','Login')

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
            <h2 class="fw-bolder pb-4" style="color: var(--sLight)">@lang('account.login-title')</h2>
        </div>
        <div class="container" style="width: 800px; background-color: var(--white); padding:0% 5% 0% 5%; border-radius: 40px;">
            <form style="color: var(--black);" action="{{ route('login') }}" method="post">
                @csrf
                <h1 class="text-center pt-5 pb-3">@lang('account.login')</h1>

                {{-- email --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-login-1">@lang('account.email')</label>
                    <input type="email" name="email" id="form-login-1" class="form-control" placeholder="@lang('account.email-placeholder')" value={{ old('email') }}>
                </div>

                {{-- password --}}
                <div class="form-outline mb-4">
                    <label class="form-label" for="form-login-2">@lang('account.password')</label>
                    <input type="password" name="password" id="form-login-2" class="form-control" placeholder="@lang('account.password-placeholder')">
                </div>

                {{-- alert --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif

                <div class="text-center d-flex justify-content-between">
                    <p>@lang('account.register-link') <a style="color:var(--primary)" href="/register">@lang('account.register')</a></p>
                </div>

                {{-- submit button --}}
                <div class="text-center py-5">
                    <button type="submit" class="primary-button">@lang('account.login')</button>
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
