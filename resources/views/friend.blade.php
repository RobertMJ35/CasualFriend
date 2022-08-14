@extends('template')

@section('title','Friends')

@section('content')
    <h2 class="container ps-3 pt-4 pb-2" style="color: var(--second)">Friend List</h2>
    <div class="container friend-list d-flex justify-content-center px-5 mb-5">
        <div class="scroll-friend d-flex">
            @foreach ($friend as $item)
                <div class="card mb-2 me-2" style="min-width: 18rem;">
                    <img src="/storage/user/profile1.jpg" class="card-img-top" alt="" style="height: 18rem; width: auto; object-fit:cover">
                    <div class="card-body">
                        <div class="card-title d-flex justify-content-between">
                            <h5>Jeremy Tyson</h5>
                            <div class="thumb-border">
                                <a href="#"><i class="bi bi-chat-dots-fill"></i></a>
                            </div>
                        </div>
                        <div class="d-flex">
                            <p class="card-label me-2">@lang('home.gender'), @lang('home.age'):</p>
                            <p class="card-text">Male, 22</p>
                        </div>
                        <label class="card-label mb-2">@lang('home.hobby'):</label>
                        <div class="d-flex">
                            <p class="card-category1">Sports</p>
                            <p class="card-category2 mx-3">Culinary</p>
                            <p class="card-category3">Reading</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Friend Request --}}
    <h2 class="container ps-3 pb-3" style="color: var(--second)">@lang('friend.friend-req')</h2>
    <div class="container mb-5 pb-2">
        <div class="container d-flex mb-3 friend-req" style="width: 1200px">
            <div class="col d-flex justify-content-between">
                <div class="col d-flex align-items-center">
                    <img src="/storage/user/profile1.jpg" class="card-img-top" alt="" style="height: 150px; width: 150px; object-fit:cover">
                    <div class="row ms-3">
                        <h5 class="mb-2">Jeremy Tyson (Male, 22)</h5>
                        <label class="card-label mb-2">@lang('friend.hobby'):</label>
                        <div class="d-flex align-items-center pb-0" style="">
                            <p class="card-category1">Sports</p>
                            <p class="card-category2 mx-3">Culinary</p>
                            <p class="card-category3">Reading</p>
                        </div>
                    </div>
                </div>
                <div class="accept-reject-button d-flex align-items-center me-5">
                    <a href="/" class="reject-button me-3">@lang('friend.reject')</a>
                    <a href="/" class="accept-button">@lang('friend.accept')</a>
                </div>
            </div>
        </div>
        <div class="container d-flex mb-3 friend-req" style="width: 1200px">
            <div class="col d-flex justify-content-between">
                <div class="col d-flex align-items-center">
                    <img src="/storage/user/blank-profile.png" class="card-img-top" alt="" style="height: 150px; width: 150px; object-fit:cover">
                    <div class="row ms-3">
                        <h5 class="mb-2">Alice Tyson (Female, 22)</h5>
                        <label class="card-label mb-2">@lang('friend.hobby'):</label>
                        <div class="d-flex align-items-center pb-0" style="">
                            <p class="card-category1">Sports</p>
                            <p class="card-category2 mx-3">Culinary</p>
                            <p class="card-category3">Reading</p>
                        </div>
                    </div>
                </div>
                <div class="accept-reject-button d-flex align-items-center me-5">
                    <a href="/" class="reject-button me-3">@lang('friend.reject')</a>
                    <a href="/" class="accept-button">@lang('friend.accept')</a>
                </div>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="">
        <p class="title-footer mb-0 ms-3">Beeverse Project</p>
        <p class="mb-0 me-3">Robert Muliawan Jaya</p>
    </div>
@endsection
