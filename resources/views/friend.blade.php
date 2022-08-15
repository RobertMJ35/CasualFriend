@extends('template')

@section('title','Friends')

@section('content')
    <h2 class="container ps-3 pt-4 pb-2" style="color: var(--second)">Friend List</h2>
    <div class="container friend-list d-flex justify-content-center px-5 mb-5">
        <div class="scroll-friend d-flex">
            {{-- @if ($list->count()==0)
                <h3 class="container text-center" style="color: var(--second)">@lang('friend.empty')</h3>
            @endif --}}
            <?php $sign1 = false ?>
            @foreach ($list as $item)
            {{-- @dump($item->persons2) --}}
            {{-- @dump(Auth::user()->id) --}}
                @if ($item->person1 == Auth::user()->id && $item->isFriends == 1)
                    <?php $sign1 = true ?>
                    <div class="card mb-2 me-2" style="min-width: 18rem;">
                        <img src="{{ $item->persons2->profile_picture }}" class="card-img-top" alt="" style="height: 18rem; width: auto; object-fit:cover">
                        <div class="card-body">
                            <div class="card-title row ">
                                <h5 class="col">{{ $item->persons2->name }}</h5>
                                <div class="col-4 thumb-border mt-1 mx-2 d-flex">
                                    <a class="" href="https://tinyurl.com/PPTI9SEM5" target="_blank"><i class="bi bi-camera-video-fill"></i></a>
                                    <a class="ps-2" href="/friend/chat/{{ $item->person2 }}"><i class="bi bi-chat-dots-fill"></i></a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p class="card-label me-2">@lang('home.gender'), @lang('home.age'):</p>
                                <p class="card-text">{{ $item->persons2->gender }}, {{ $item->persons2->age }}</p>
                            </div>
                            <label class="card-label mb-2">@lang('home.hobby'):</label>
                            <div class="d-flex align-items-end">
                                <p class="card-category1">{{ $item->persons2->hobby1 }}</p>
                                <p class="card-category2 mx-3">{{ $item->persons2->hobby2 }}</p>
                                <p class="card-category3">{{ $item->persons2->hobby3 }}</p>
                            </div>
                        </div>
                    </div>
                @elseif ($item->person2 == Auth::user()->id && $item->isFriends == 1)
                    <?php $sign1 = true ?>
                    <div class="card mb-2 me-2" style="min-width: 18rem;">
                        <img src="{{ $item->persons1->profile_picture }}" class="card-img-top" alt="" style="height: 18rem; width: auto; object-fit:cover">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between">
                                <h5 style="text-size-adjust: auto">{{ $item->persons1->name }}</h5>
                                <div class="thumb-border ps-2">
                                    <a href="https://tinyurl.com/PPTI9SEM5"><i class="bi bi-camera-video-fill"></i></a>
                                    <a href="/friend/chat/{{ $item->person1 }}"><i class="bi bi-chat-dots-fill"></i></a>
                                </div>
                            </div>
                            <div class="d-flex">
                                <p class="card-label me-2">@lang('home.gender'), @lang('home.age'):</p>
                                <p class="card-text">{{ $item->persons1->gender }}, {{ $item->persons1->age }}</p>
                            </div>
                            <label class="card-label mb-2">@lang('home.hobby'):</label>
                            <div class="d-flex">
                                <p class="card-category1">{{ $item->persons1->hobby1 }}</p>
                                <p class="card-category2 mx-3">{{ $item->persons1->hobby2 }}</p>
                                <p class="card-category3">{{ $item->persons1->hobby3 }}</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <?php if ($sign1==false) { ?>
                <h3 class="container text-center my-5 py-5" style="color: var(--second)">@lang("friend.empty")</h3>
            <?php } ?>
        </div>
    </div>

    {{-- Friend Invitation --}}
    <h2 class="container ps-3 pb-3" style="color: var(--second)">@lang('friend.friend-inv')</h2>
    <div class="container mb-5 pb-2">
        <?php $sign2 = false ?>
        @foreach ($list as $item)
            @if ($item->person2 == Auth::user()->id && $item->isFriends == 0)
                <?php $sign2 = true ?>
                <div class="container d-flex mb-3 friend-req" style="width: 1200px">
                    <div class="col d-flex justify-content-between">
                        <div class="col d-flex align-items-center">
                            <img src="{{ $item->persons1->profile_picture }}" class="card-img-top" alt="" style="height: 150px; width: 150px; object-fit:cover">
                            <div class="row ms-3">
                                <h5 class="mb-2">{{ $item->persons1->name }} ({{ $item->persons1->gender }}, {{ $item->persons1->age }})</h5>
                                <label class="card-label mb-2">@lang('friend.hobby'):</label>
                                <div class="d-flex align-items-center pb-0" style="">
                                    <p class="card-category1">{{ $item->persons1->hobby1 }}</p>
                                    <p class="card-category2 mx-3">{{ $item->persons1->hobby2 }}</p>
                                    <p class="card-category3">{{ $item->persons1->hobby3 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accept-reject-button d-flex align-items-center me-5">
                            <a href="/friend/rej/{{ $item->id }}" class="reject-button me-3">@lang('friend.reject')</a>
                            <a href="/friend/acc/{{ $item->id }}" class="accept-button">@lang('friend.accept')</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <?php if ($sign2==false) { ?>
            <h3 class="container text-center my-5 py-2" style="color: var(--second)">@lang("friend.empty")</h3>
        <?php } ?>
    </div>

    {{-- Friend Request --}}
    <h2 class="container ps-3 pb-3" style="color: var(--second)">@lang('friend.friend-req')</h2>
    <div class="container mb-5 pb-2">
        <?php $sign2 = false ?>
        @foreach ($list as $item)
            @if ($item->person1 == Auth::user()->id && $item->isFriends == 0)
                <?php $sign2 = true ?>
                <div class="container d-flex mb-3 friend-req" style="width: 1200px">
                    <div class="col d-flex justify-content-between">
                        <div class="col d-flex align-items-center">
                            <img src="{{ $item->persons2->profile_picture }}" class="card-img-top" alt="" style="height: 150px; width: 150px; object-fit:cover">
                            <div class="row ms-3">
                                <h5 class="mb-2">{{ $item->persons2->name }} ({{ $item->persons2->gender }}, {{ $item->persons2->age }})</h5>
                                <label class="card-label mb-2">@lang('friend.hobby'):</label>
                                <div class="d-flex align-items-center pb-0" style="">
                                    <p class="card-category1">{{ $item->persons2->hobby1 }}</p>
                                    <p class="card-category2 mx-3">{{ $item->persons2->hobby2 }}</p>
                                    <p class="card-category3">{{ $item->persons2->hobby3 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accept-reject-button d-flex align-items-center me-5">
                            <a href="/friend/can/{{ $item->id }}" class="reject-button me-3">@lang('friend.cancel')</a>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
        <?php if ($sign2==false) { ?>
            <h3 class="container text-center my-5 py-2" style="color: var(--second)">@lang("friend.empty")</h3>
        <?php } ?>
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="">
        <p class="title-footer mb-0 ms-3">Beeverse Project</p>
        <p class="mb-0 me-3">Robert Muliawan Jaya</p>
    </div>
@endsection
