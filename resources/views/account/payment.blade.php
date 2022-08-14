<?php
    $data = Session::get('data');
?>

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
            <h2 class="fw-bolder pb-4" style="color: var(--sLight)">@lang('account.register-title')</h2>
        </div>
        <div class="container" style="width: 800px; background-color: var(--white); padding:0% 5% 0% 5%; border-radius: 40px;">
            <form style="color: var(--black);" action="/payment/{{ request()->id }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ request()->id }}">
                <input type="hidden" name="bill" value="{{ $data['price'] }}">

                <h1 class="text-center pt-5 pb-3">@lang('account.pay')</h1>
                <div class="form-outline mb-4">
                    <h4 class="pb-2">Payment Amount: {{ $data['price'] }}</h4>
                    {{-- <label class="form-label" for="form-login-1">@lang('account.pay')</label> --}}
                    <input type="number" name="payment" id="form-login-1" class="form-control" placeholder="@lang('account.payment-placeholder')" value={{ old('payment') }}>
                </div>

                {{-- alert --}}
                @if($errors->any())
                    <div class="alert alert-danger">
                        {{$errors->first()}}
                    </div>
                @endif

                {{-- submit button --}}
                <div class="text-center py-5">
                    <button type="submit" class="primary-button">@lang('account.pay')</button>
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
