@extends('template')

@section('title','Chat')

@section('content')
    <div class="container-fluid d-flex justify-content-center py-3 px-5">
        <div class="row chat-container">
            <div class="col-3 left-side-container px-0">
                <div class="d-flex jusfity-content-center align-items-center">
                    <img src="/image/chat-icon.png" alt="" class="left-image ms-5 me-3">
                    <h2 class="mt-3 fw-bolder" style="color: var(--second)">@lang('chat.title')</h2>
                </div>
                <div class="scroll-chat-list ">
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/profile1.jpg" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Jeremy Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            <span class="not-readed">5</span>
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/blank-profile.png" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Alice Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            <span class="not-readed">3</span>
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/profile1.jpg" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Jeremy Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            {{-- <span class="not-readed">5</span> --}}
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/blank-profile.png" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Alice Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            {{-- <span class="not-readed">5</span> --}}
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/profile1.jpg" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Jeremy Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            {{-- <span class="not-readed">5</span> --}}
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/blank-profile.png" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Alice Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            {{-- <span class="not-readed">5</span> --}}
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/profile1.jpg" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Jeremy Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            {{-- <span class="not-readed">5</span> --}}
                        </div>
                    </a>
                    <a class="chat-list d-flex align-items-center p-2" href="/chat">
                        <img src="/storage/user/blank-profile.png" alt="" class="pp-chat ms-2 me-3">
                        <div class="col-7 align-items-center">
                            <h5 class="pp-title">Alice Tyson</h5>
                            <span class="last-chat">LOREM IPSUM</span>
                        </div>
                        <div class="col text-end ps-3">
                            <p class="time-chat-list mb-2">
                                19.28
                            </p>
                            {{-- <span class="not-readed">5</span> --}}
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-9 right-side-container px-0">
                <div class="header-chat d-flex align-items-center p-2">
                    <img src="/storage/user/profile1.jpg" alt="" class="pp-chat ms-3">
                    <h5 class="pp-title ms-3">Jeremy Tyson</h5>
                </div>
                <div class="scroll-chat ps-3 pe-3 pt-3">
                    <div class="chat d-flex justify-content-start">
                        <p class="left-bubble">
                            Hello, My Name is Robert
                        </p>
                        <span class="time-chat mx-2">
                            19.20
                        </span>
                    </div>
                    <div class="my-chat d-flex justify-content-end">
                        <span class="time-chat mx-2">
                            19.21
                        </span>
                        <p class="right-bubble">
                            Hello, Nice to meet you!
                        </p>
                    </div>
                    <div class="my-chat d-flex justify-content-end">
                        <span class="time-chat mx-2">
                            19.22
                        </span>
                        <p class="right-bubble">
                            My Name is RatRex
                        </p>
                    </div>
                    <div class="chat d-flex justify-content-start">
                        <p class="left-bubble">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur libero voluptate commodi, dolor facere unde atque reiciendis facilis et cupiditate. Labore unde temporibus, ab eveniet aspernatur itaque pariatur eius ex!
                        </p>
                        <span class="time-chat mx-2">
                            19.27
                        </span>
                    </div>
                    <div class="chat d-flex justify-content-start">
                        <p class="left-bubble">
                            LOREM IPSUM
                        </p>
                        <span class="time-chat mx-2">
                            19.28
                        </span>
                    </div>
                    <div class="chat d-flex justify-content-start">
                        <p class="left-bubble">
                            Hello, My Name is Robert
                        </p>
                        <span class="time-chat mx-2">
                            19.20
                        </span>
                    </div>
                    <div class="my-chat d-flex justify-content-end">
                        <span class="time-chat mx-2">
                            19.21
                        </span>
                        <p class="right-bubble">
                            Hello, Nice to meet you!
                        </p>
                    </div>
                    <div class="my-chat d-flex justify-content-end">
                        <span class="time-chat mx-2">
                            19.22
                        </span>
                        <p class="right-bubble">
                            My Name is RatRex
                        </p>
                    </div>
                    <div class="chat d-flex justify-content-start">
                        <p class="left-bubble">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur libero voluptate commodi, dolor facere unde atque reiciendis facilis et cupiditate. Labore unde temporibus, ab eveniet aspernatur itaque pariatur eius ex!
                        </p>
                        <span class="time-chat mx-2">
                            19.27
                        </span>
                    </div>
                    <div class="chat d-flex justify-content-start">
                        <p class="left-bubble">
                            LOREM IPSUM
                        </p>
                        <span class="time-chat mx-2">
                            19.28
                        </span>
                    </div>
                </div>
                <div class="chat-input mx-3">
                    <input type="text" class="form-control" id="" placeholder="@lang('chat.placeholder-type')">
                </div>
            </div>
        </div>
    </div>
@endsection
