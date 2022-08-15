@extends('template')

@section('title','Avatar')

@section('content')
    <div class="container pt-4 d-flex justify-content-end">
        <div class="my-coins px-3 py-2">
            <h5 class="mb-0 me-2">@lang('avatar.my-coins')</h5>
            <h5 class="mb-0 coins-amount">{{ $coin }}</h5>
            <h5 class="mb-0 ms-1" style="color: yellow"><i class="bi bi-coin"></i></h5>
        </div>
    </div>

    <h2 class="container ps-3 pb-2" style="color: var(--second)">@lang('avatar.my-avatar')</h2>
    <div class="container my-avatar d-flex justify-content-center mb-5 ps-0">
        <div class="scroll-horizontal d-flex">
            <?php $sign1 = false ?>
            @foreach ($myAvatar as $item)
                {{-- @dump($item->avatars) --}}
                @if ($item->userId == Auth::user()->id)
                <?php $sign1 = true ?>
                    <div class="card mb-2 mx-1" style="min-width: 12rem;">
                        <img src="{{ $item->avatars->image }}" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                        <div class="card-body">
                            <div class="card-title d-flex justify-content-between mb-0">
                                <h5>{{ $item->avatars->name }}</h5>
                            </div>
                            <div class="d-flex">
                                <p class="card-label me-2">@lang('avatar.price'):</p>
                                <p class="card-text">{{ $item->avatars->price }} <i class="bi bi-coin"></i></p>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <?php if ($sign1==false) { ?>
                <h3 class="container text-center my-5 py-5" style="color: var(--second)">@lang('home.not-found')</h3>
            <?php } ?>
        </div>
    </div>

    {{-- @foreach ($avatar as $item)
        @dump($item)
    @endforeach --}}
    {{-- AVATAR STORE --}}
    <h2 class="container ps-3 pb-2" style="color: var(--second)">@lang('avatar.avatar-store')</h2>
    <div class="container d-flex flex-wrap px-5 mb-5">
        @foreach ($avatar as $item)
            <?php $sign2 = false ?>
            @foreach ($myAvatar as $val)
                @if ($item->id == $val->avatarId)
                    <?php $sign2 = true?>
                @endif
            @endforeach
            <?php if ($sign2==false) { ?>
            <div class="card mb-4 mx-1" style="width: 12rem;">
                <img src="{{ $item->image }}" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>{{ $item->name }}</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">@lang('avatar.price'):</p>
                        <p class="card-text">{{ $item->price }} <i class="bi bi-coin"></i></p>
                    </div>
                    <form class="d-flex justify-content-center" method="post" action="/buyAvatar">
                        @csrf
                        <input type="hidden" name="avatarId" value="{{ $item->id }}">
                        <button type="submit" class="primary-button text-center">BUY</button>
                    </form>
                </div>
            </div>
            <?php } ?>
        @endforeach
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="">
        <p class="title-footer mb-0 ms-3">Beeverse Project</p>
        <p class="mb-0 me-3">Robert Muliawan Jaya</p>
    </div>
@endsection
