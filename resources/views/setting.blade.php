@extends('template')

@section('title','Settings')

@section('content')
    <div class="container-fluid ps-5 pt-3 pb-2" style="background-color: var(--second)">
        <div class="container d-flex justify-content-between pt-4">
            <div class="coins-top-up px-3 py-2 w-50 me-5 d-flex justify-content-between">
                <div class="owned-coins">
                    <h6 class="mb-1">@lang('setting.my-coins'):</h6>
                    <h5 class="mb-0 ps-3">1000 <i class="bi bi-coin"></i></h5>
                </div>
                <a href="/setting" class="add-coins-button p-2"><i class="bi bi-plus-circle-fill"></i> 100 <i class="bi bi-coin"></i></a>
            </div>

            <div class="hide-me px-3 py-2 w-50 ms-5 d-flex justify-content-between">
                <div class="owned-coins">
                    <h6 class="mb-1">@lang('setting.my-status'):</h6>
                    <h5 class="mb-0 ps-3">Visible</h5>
                    {{-- <h5 class="mb-0 ps-3">Invisible</h5> --}}
                </div>
                <a href="/setting" class="hide-button p-2">Hide Me</a>
                {{-- <a href="/setting" class="hide-button p-2">Unhide Me</a> --}}
            </div>
        </div>

        <h2 class="container ps-3 pt-4 pb-2" style="color: var(--white)">@lang('setting.my-profile')</h2>
        <div class="container setting-container mb-5">
            <div class="row px-5">
                <div class="col-12 d-flex justify-content-center mt-4">
                    <img src="/storage/user/profile1.jpg" alt="" class="profile-picture">
                </div>
                <form action="/setting">
                    <div class="col-12 d-flex justify-content-center mt-3 mb-4">
                        <input class="form-control w-25" type="file" id="formFile">
                    </div>
                    <div class="col-12 mb-4">
                        <div class="row">
                            <p class="col-3 profile-label">@lang('setting.name')</p>
                            <p class="col profile-label">: Jeremy Tyson</p>
                        </div>
                        <div class="row">
                            <p class="col-3 profile-label">@lang('setting.gender')</p>
                            <p class="col profile-label">: Male</p>
                        </div>
                        <div class="row">
                            <p class="col-3 profile-label">@lang('setting.age')</p>
                            <p class="col profile-label">: 22</p>
                        </div>
                        <div class="row">
                            <p class="col-3 profile-label">@lang('setting.instagram')</p>
                            <input type="text" class="col form-control ms-3" id="" value="http://www.instagram.com/username">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <button type="submit" class="primary-button">@lang('setting.save-button')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer mt-auto d-flex align-items-center" style="background-color: var(--sLight)">
        <p class="title-footer mb-0 ms-3" style="color: var(--second)">Beeverse Project</p>
        <p class="mb-0 me-3" style="color: var(--white)">Robert Muliawan Jaya</p>
    </div>
@endsection
