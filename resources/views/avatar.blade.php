@extends('template')

@section('title','Avatar')

@section('content')
    <div class="container pt-4 d-flex justify-content-end">
        <div class="my-coins px-3 py-2">
            <h5 class="mb-0 me-2">@lang('avatar.my-coins')</h5>
            <h5 class="mb-0 coins-amount">1000</h5>
            <h5 class="mb-0 ms-1" style="color: yellow"><i class="bi bi-coin"></i></h5>
        </div>
    </div>

    <h2 class="container ps-3 pb-2" style="color: var(--second)">@lang('avatar.my-avatar')</h2>
    <div class="container my-avatar d-flex justify-content-center mb-5 ps-0">
        <div class="scroll-horizontal d-flex">
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/1.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 1</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">@lang('avatar.price'):</p>
                        <p class="card-text">75 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/2.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 2</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">95 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/3.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 3</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">100 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/4.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 4</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">100 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/5.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 5</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">90 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/6.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 6</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">150 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/5.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 7</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">90 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
            <div class="card mb-2 mx-1" style="min-width: 12rem;">
                <img src="/storage/avatar/6.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
                <div class="card-body">
                    <div class="card-title d-flex justify-content-between mb-0">
                        <h5>Avatar 8</h5>
                    </div>
                    <div class="d-flex">
                        <p class="card-label me-2">Price:</p>
                        <p class="card-text">150 <i class="bi bi-coin"></i></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- AVATAR STORE --}}
    <h2 class="container ps-3 pb-2" style="color: var(--second)">@lang('avatar.avatar-store')</h2>
    <div class="container d-flex flex-wrap px-5 mb-5">
        @foreach ($avatar as $item)
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
                    <div class="d-flex justify-content-center">
                        <a href="/avatar" class="primary-button text-center">BUY</a>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/8.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 2</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">@lang('avatar.price'):</p>
                    <p class="card-text">150 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/9.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 3</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">200 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/10.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 4</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">250 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/11.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 5</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">600 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/12.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 6</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/13.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 7</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/14.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 8</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/15.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 9</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/16.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 10</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/17.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 11</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
                </div>
            </div>
        </div>
        <div class="card mb-4 mx-1" style="width: 12rem;">
            <img src="/storage/avatar/18.png" class="card-img-top" alt="" style="height: 10rem; width: auto; object-fit:cover">
            <div class="card-body">
                <div class="card-title d-flex justify-content-between mb-0">
                    <h5>Space 12</h5>
                </div>
                <div class="d-flex">
                    <p class="card-label me-2">Price:</p>
                    <p class="card-text">500 Coins</p>
                </div>
                <div class="d-flex justify-content-center">
                    <a href="/avatar" class="primary-button text-center">BUY</a>
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
