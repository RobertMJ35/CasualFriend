@extends('template')

@section('title','Search')

@section('content')
    <div class="container d-flex justify-content-center align-content-center">
        <form action="" class="d-flex mt-4">
            <div class="input-group mb-3" style="width: 1225px">
                <input type="text" class="form-control" placeholder="@lang('home.search-placeholder')" aria-label="" aria-describedby="search-button">
                <button class="search-button" type="button" id="search-button">@lang('home.search')</button>
            </div>
        </form>
    </div>
    <h4 class="container ps-5 mb-4" style="color: var(--second)">Search Result For: {{ request()->searchData }}</h4>
    <div class="container d-flex flex-wrap px-5 mb-5">
        @if ($data->count()==0)
                <h3 class="container text-center" style="color: var(--second)">@lang('home.not-found')</h3>
        @endif
        @foreach ($data as $item)
            <div class="card mb-4 me-3" style="width: 18rem;">
                <img src="{{ $item->profile_picture }}" class="card-img-top" alt="" style="height: 18rem; width: auto; object-fit:cover">
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
        @endforeach
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="">
        <p class="title-footer mb-0 ms-3">Beeverse Project</p>
        <p class="mb-0 me-3">Robert Muliawan Jaya</p>
    </div>
@endsection
