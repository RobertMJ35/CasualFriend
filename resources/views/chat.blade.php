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
                    @foreach ($chat as $item)
                        {{-- @dump($item); --}}
                        @if ($item->person1 == Auth::user()->id)
                            <a class="chat-list d-flex align-items-center p-2" href="/chats/{{ $item->id }}">
                                <img src="{{ $item->persons2->profile_picture }}" alt="" class="pp-chat ms-2 me-3">
                                <div class="col-7 align-items-center">
                                    <h5 class="pp-title">{{ $item->persons2->name }}</h5>
                                    <span class="last-chat">{{ $item->id }}</span>
                                </div>
                                <div class="col text-end ps-3">
                                    <p class="time-chat-list mb-2">
                                        19.28
                                    </p>
                                    @if ($item->id==1)
                                        <span class="not-readed">3</span>
                                    @endif
                                </div>
                            </a>
                        @elseif ($item->person2 == Auth::user()->id)
                            <a class="chat-list d-flex align-items-center p-2" href="/chats/{{ $item->id }}">
                                <img src="{{ $item->persons1->profile_picture }}" alt="" class="pp-chat ms-2 me-3">
                                <div class="col-7 align-items-center">
                                    <h5 class="pp-title">{{ $item->persons1->name }}</h5>
                                    <span class="last-chat">{{ $item->id }}</span>
                                </div>
                                <div class="col text-end ps-3">
                                    <p class="time-chat-list mb-2">
                                        19.28
                                    </p>
                                    @if ($item->id==1)
                                        <span class="not-readed">3</span>
                                    @endif
                                </div>
                            </a>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="col-9 right-side-container px-0">
                {{-- @dump($messages) --}}
                <div class="header-chat d-flex align-items-center p-2">
                    <img src="/user/1.jpg" alt="" class="pp-chat ms-3">
                    <h5 class="pp-title ms-3 mb-0">Username</h5>
                </div>
                {{-- @dump($chatDetail); --}}
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
                    <form action="/chats/send" method="POST" class="d-flex ">
                        <input type="hidden" class="form-control" name="id" value="1">
                        <input type="text" class="form-control" name="message" placeholder="@lang('chat.placeholder-type')">
                        <button class="send-button ms-2"><i class="bi bi-send-fill"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
