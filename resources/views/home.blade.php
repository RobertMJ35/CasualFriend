@extends('template')

@section('title','Home')

@section('content')
    <div class="container-fluid d-flex justify-content-center align-content-center p-0">
        <img src="/image/banner.png" alt="" style="width: 100%; height:auto; object-fit: fit">
    </div>
    <div class="container d-flex justify-content-center align-content-center">
        <form action="/home/search" class="d-flex mt-4" method="GET">
            <div class="input-group mb-3" style="width: 1225px">
                <input type="text" name="searchData" class="form-control" placeholder="@lang('home.search-placeholder')" aria-label="" aria-describedby="search-button">
                <button class="search-button" type="submit" id="search-button">@lang('home.search')</button>
            </div>
        </form>
    </div>
    <div class="container d-flex justify-content-start px-5 py-3">
        <div>
            <a href="/home/" class="tag-gender me-3 {{ Request::is("home")? "active-tag" : "" }}">@lang('home.gender-all')</a>
            <a href="/home/Male" class="tag-gender me-3 {{ Request::is("home/Male")? "active-tag" : "" }}">@lang('home.gender-1')</a>
            <a href="/home/Female" class="tag-gender me-3 {{ Request::is("home/Female")? "active-tag" : "" }}">@lang('home.gender-2')</a>
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
            @if(!(Auth::user()->id === $item->id))
                <div class="card mb-4 me-3" style="width: 18rem;">
                    <img src="/storage/user/{{ $item->profile_picture }}" class="card-img-top" alt="" style="height: 18rem; width: auto; object-fit:cover">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <h5>{{ $item->name }}</h5>
                            <div class="thumb-border">
                                <a href="/friend/{{ $item->id }}"><i class="bi bi-hand-thumbs-up-fill"></i></a>
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
            @endif
        @endforeach
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="">
        <p class="title-footer mb-0 ms-3">Beeverse Project</p>
        <p class="mb-0 me-3">Robert Muliawan Jaya</p>
    </div>
@endsection
