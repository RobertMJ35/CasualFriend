@extends('template')

@section('title', "Boarding")

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

    <div class="container-fluid d-flex justify-content-center align-content-center p-0">
        <img src="/image/banner.png" alt="" style="width: 100%; height:auto; object-fit: fit">
    </div>
    <div class="container d-flex justify-content-center align-content-center">
        <form action="/search" class="d-flex mt-4" method="get">
            <div class="input-group mb-3" style="width: 1225px">
                <input type="text" name="searchData" class="form-control" placeholder="@lang('home.search-placeholder')" aria-label="" aria-describedby="search-button">
                <button class="search-button" type="submit" id="search-button">@lang('home.search')</button>
            </div>
        </form>
    </div>
    <div class="container d-flex justify-content-start px-5 py-3">
        <div>
            <a href="/board/" class="tag-gender me-3 {{ Request::is("/")? "active-tag" : "" }}">@lang('home.gender-all')</a>
            <a href="/board/Male" class="tag-gender me-3 {{ Request::is("board/Male")? "active-tag" : "" }}">@lang('home.gender-1')</a>
            <a href="/board/Female" class="tag-gender me-3 {{ Request::is("board/Female")? "active-tag" : "" }}">@lang('home.gender-2')</a>
        </div>
        {{-- <div>
            <a href="/home/" class="tag-category me-3">Sports</a>
            <a href="/home/" class="tag-category me-3">Gaming</a>
            <a href="/home/" class="tag-category me-3">Culinary</a>
            <a href="/home/" class="tag-category me-3">Other</a>
        </div> --}}
    </div>
    <div class="container d-flex flex-wrap px-5 mb-5">
        @foreach ($user as $item)
            <div class="card mb-4 me-3" style="width: 18rem;">
                <a href="/login">
                    <img src="{{ $item->profile_picture }}" class="card-img-top" alt="" style="height: 18rem; width: auto; object-fit:cover">
                </a>
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between">
                        <h5>{{ $item->name }}</h5>
                        <div class="thumb-border">
                            <a href="/login"><i class="bi bi-hand-thumbs-up-fill"></i></a>
                        </div>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">@lang('home.gender'), @lang('home.age'):</p>
                        <p class="card-text">{{ $item->gender }}, {{ $item->age }}</p>
                    </div>
                    <label class="card-label mb-2">@lang('home.hobby'):</label>
                    <div class="d-flex">
                        <p class="card-category1">{{ $item->hobby1 }}</p>
                        <p class="card-category2 mx-3">{{ $item->hobby2 }}</p>
                        <p class="card-category3">{{ $item->hobby3 }}</p>
                    </div>
                    {{-- <a href="#"><img src="/image/thumb.png" class="thumb-button" alt="" style="height: 50px; width: auto"></a> --}}
                </div>
            </div>
        @endforeach
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="">
        <p class="title-footer mb-0 ms-3">Beeverse Project</p>
        <p class="mb-0 me-3">Robert Muliawan Jaya</p>
    </div>

    {{-- OLD BOARDING --}}
    {{-- <div class="container d-flex justify-content-center">
        <img class="px-5 py-5" src="/image/Logo.png" alt="">
        <div class="row align-items-center pe-3">
            <div class="row">
                <p class="boarding-msg-1">@lang('boarding.message1')</p>
                <p class="boarding-msg-2">@lang('boarding.message2')</p>
            </div>
        </div>
    </div> --}}
@endsection
