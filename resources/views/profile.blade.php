@extends('layouts.metronic')

@section('content')
<div class="kt-container  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch">
    <div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
        <div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

            <!-- begin:: Content Head -->
            <div class="kt-subheader   kt-grid__item" id="kt_subheader">
                <div class="kt-container ">
                    <div class="kt-subheader__main">
                        <button class="kt-subheader__mobile-toggle"
                            id="kt_subheader_mobile_toggle"><span></span></button>

                        <h3 class="kt-subheader__title">My Profile</h3>
                    </div>
                </div>
            </div>
            <!-- end:: Content Head -->
            <!-- begin:: Content -->
            <div class="kt-container  kt-grid__item kt-grid__item--fluid">

                <!--Begin::App-->
                <div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">
                    <!--Begin:: App Aside Mobile Toggle-->
                    <button class="kt-app__aside-close" id="kt_user_profile_aside_close">
                        <i class="la la-close"></i>
                    </button>
                    <!--End:: App Aside Mobile Toggle-->

                    <!--Begin:: App Aside-->
                    <div class="kt-grid__item kt-app__toggle kt-app__aside" id="kt_user_profile_aside">
                        <!--begin:: Widgets/Applications/User/Profile1-->
                        <div class="kt-portlet ">
                            <div class="kt-portlet__head  kt-portlet__head--noborder">
                                <div class="kt-portlet__head-label">
                                    <h3 class="kt-portlet__head-title">
                                    </h3>
                                </div>
                            </div>
                            <div class="kt-portlet__body kt-portlet__body--fit-y">
                                <!--begin::Widget -->
                                <div class="kt-widget kt-widget--user-profile-1">
                                    <div class="kt-widget__head">
                                        <div class="kt-widget__media">
                                            <img src="{{ $user->photo ?? '/img/default-profile.png' }}"
                                                alt="image">
                                        </div>
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__section">
                                                <a href="#" class="kt-widget__username">
                                                    {{$user->name}}
                                                    <i class="flaticon2-correct kt-font-success"></i>
                                                </a>
                                                @foreach($roles as $role)
                                                    <span class="kt-widget__subtitle">
                                                        {{$role->name}}
                                                    </span>
                                                    @break
                                                @endforeach
                                            </div>

                                            <div class="kt-widget__action">
                                                <button type="button" class="btn btn-info btn-sm">chat</button>&nbsp;
                                                <button type="button" class="btn btn-success btn-sm">follow</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-widget__body">
                                        <div class="kt-widget__content">
                                            <div class="kt-widget__info">
                                                <span class="kt-widget__label">Email:</span>
                                                <a href="#" class="kt-widget__data">{{$user->email}}</a>
                                            </div>
                                            <div class="kt-widget__info">
                                                <span class="kt-widget__label">Phone:</span>
                                                <a href="#" class="kt-widget__data">{{$user->phone ?? ''}}</a>
                                            </div>
                                            <div class="kt-widget__info">
                                                <span class="kt-widget__label">Location:</span>
                                                <span class="kt-widget__data">{{$user->location ?? ''}}</span>
                                            </div>
                                        </div>
                                        <div class="kt-widget__items">
                                            <a href="/metronic/preview/demo10/custom/apps/user/profile-1/personal-information.html"
                                                class="kt-widget__item kt-widget__item--active">
                                                <span class="kt-widget__section">
                                                    <span class="kt-widget__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1"
                                                            class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                                <path
                                                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3">
                                                                </path>
                                                                <path
                                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                    fill="#000000" fill-rule="nonzero"></path>
                                                            </g>
                                                        </svg> </span>
                                                    <span class="kt-widget__desc">
                                                        Personal Information
                                                    </span>
                                                </span>
                                            </a>
                                            <a href="/users/change-password"
                                                class="kt-widget__item ">
                                                <span class="kt-widget__section">
                                                    <span class="kt-widget__icon">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1"
                                                            class="kt-svg-icon">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                                <path
                                                                    d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                    fill="#000000" opacity="0.3"></path>
                                                                <path
                                                                    d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                                    fill="#000000" opacity="0.3"></path>
                                                                <path
                                                                    d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                    fill="#000000" opacity="0.3"></path>
                                                            </g>
                                                        </svg> </span>
                                                    <span class="kt-widget__desc">
                                                        Change Passwort
                                                    </span>
                                                </span>
                                                <span
                                                    class="kt-badge kt-badge--unified-danger kt-badge--sm kt-badge--rounded kt-badge--bolder">5</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Widget -->
                            </div>
                        </div>
                        <!--end:: Widgets/Applications/User/Profile1-->
                    </div>
                    <!--End:: App Aside-->

                    <!--Begin:: App Content-->
                    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">Personal Information <small>update your
                                                    personal informaiton</small></h3>
                                        </div>
                                    </div>

                                    <form class="kt-form kt-form--label-right" action="/users/{{ $user->id }}/update" method="POST" enctype='multipart/form-data'>
                                        @csrf
                                        <input id="user_id" type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="kt-portlet__body">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    @if ($errors->any())
                                                        @foreach ($errors->all() as $error)
                                                            <div class="alert alert-danger fade show" role="alert">
                                                                <div class="alert-icon"><i class="flaticon-questions-circular-button"></i></div>
                                                                    <div class="alert-text">{{ $error }}</div>
                                                                <div class="alert-close">
                                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                        <span aria-hidden="true"><i class="la la-close"></i></span>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Customer
                                                                Info:</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                                <div class="kt-avatar__holder" style="background-image: url({{ $user->photo ?? '/img/default-profile.png' }})"></div>
                                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen"></i>
                                                                    <input name="photo" type="file" accept=".png, .jpg, .jpeg">
                                                                </label>
                                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                    <i class="fa fa-times"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">First Name</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input name="name" class="form-control" type="text" value="{{ $user->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Last
                                                            Name</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input name="last_name" class="form-control" type="text" value="{{ $user->last_name }}">
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm">Contact
                                                                Info:</h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Contact
                                                            Phone</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text"><i
                                                                            class="la la-phone"></i></span></div>
                                                                <input name="phone" type="text" class="form-control"
                                                                    value="{{ $user->phone ?? '' }}" placeholder="Phone"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                            <span class="form-text text-muted">We'll never share your
                                                                email with anyone else.</span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                            Address</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text"><i
                                                                            class="la la-at"></i></span></div>
                                                                <input name="email" type="text" class="form-control"
                                                                    value="{{$user->email}}" placeholder="Email"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Location</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend"><span
                                                                        class="input-group-text"><i
                                                                            class="flaticon-map-location"></i></span></div>
                                                                <input name="location" type="text" class="form-control"
                                                                    value="{{$user->location}}" placeholder="Location"
                                                                    aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-3 col-xl-3">
                                                    </div>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <button id="profileSubmitBtn" type="button"
                                                            class="btn btn-success">Submit</button>&nbsp;
                                                        <button onclick="window.history.back();" type="reset" class="btn btn-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End:: App Content-->
                </div>
                <!--End::App-->
            </div>
            <!-- end:: Content -->
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="/assets/js/demo10/pages/dashboard.js"></script>
    <script src="/assets/js/demo10/pages/custom/user/profile.js"></script>
    <script src="/js/profile.js"></script>
    <script>
        KTUtil.ready(function(){
            new KTAvatar("kt_user_avatar")
        });
    </script>
@endsection
