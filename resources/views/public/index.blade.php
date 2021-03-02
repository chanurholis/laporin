@extends('layouts.public.main')

@section('title')

@section('content')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Memperbaiki Tatanan Kehidupan Manusia</h1>
                            <p>
                                Layanan Aspirasi dan Pengaduan Online Rakyat (LAPORIN) adalah sarana interaktif masyarakat dan pemerintah berbasis media sosial pertama untuk pengawasan dan pengendalian pembangunan.
                            </p>
                            <a href="{{ route('login') }}" class="btn_2 banner_btn_1">Masuk</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="banner_img d-none d-lg-block">
                        <img src="{{ asset('sasu/img/banner_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 ">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <img src="{{ asset('sasu/img/icon/feature_icon_1.png') }}" alt="">
                                    <h4>A Volunteer</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single_feature">
                                <div class="single_feature_part">
                                    <img src="{{ asset('sasu/img/icon/feature_icon_2.png') }}" alt="">
                                    <h4>A Volunteer</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                                </div>
                            </div>
                            <div class="single_feature">
                                <div class="single_feature_part single_feature_part_2">
                                    <img src="{{ asset('sasu/img/icon/feature_icon_3.png') }}" alt="">
                                    <h4>A Volunteer</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="feature_part_text">
                        <h2>featured</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse
                            ultrices gravida Risus com odo viverra maecenas accumsan lacus vel facilisis
                            accumsan.
                        </p>
                        <div class="row">
                            <div class="col-sm-6 col-md-4 col-lg-5">
                                <div class="feature_part_text_iner">
                                    <h4>50k</h4>
                                    <p>Total Report</p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-5">
                                <div class="feature_part_text_iner">
                                    <h4>100k</h4>
                                    <p>Successed</p>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn_4">learn more <img src="{{ asset('sasu/img/icon/right-arrow.svg') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        
        <img src="{{ asset('sasu/img/animate_icon/shape-1.png') }}" alt="" class="feature_icon_1">
        <img src="{{ asset('sasu/img/animate_icon/Shape-14.png') }}" alt="" class="feature_icon_2">
        <img src="{{ asset('sasu/img/animate_icon/shape.png') }}" alt="" class="feature_icon_3">
        <img src="{{ asset('sasu/img/animate_icon/shape-3.png') }}" alt="" class="feature_icon_4">
    </section>
    <!-- upcoming_event part start-->

    <!-- about_us part start-->
    <section class="about_us section_padding">
        <div class="container"> 
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>
                            Right people at the
                            Right time.
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Ut enim ad minim
                        </p>
                        <a href="#" class="btn_1">Sign In</a>
                        <a href="#" class="btn_2">Sign Up</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="{{ asset('sasu/img/about_img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('sasu/img/left_sharp.png') }}" alt="" class="left_shape_1">
        <img src="{{ asset('sasu/img/about_shape.png') }}" alt="" class="about_shape_1">
        <img src="{{ asset('sasu/img/animate_icon/Shape-16.png') }}" alt="" class="feature_icon_1">
        <img src="{{ asset('sasu/img/animate_icon/shape-1.png') }}" alt="" class="feature_icon_4">
    </section>
    <!-- about_us part end-->

    <!-- use sasu part end-->
    <section class="use_sasu">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Who can use {{ config('app.name') }}?</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Quis ipsum suspendisse ultrices.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="{{ asset('sasu/img/icon/feature_icon_1.png') }}" alt="">
                            <h4>A Volunteer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="{{ asset('sasu/img/icon/feature_icon_2.png') }}" alt="">
                            <h4>A Volunteer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <img src="{{ asset('sasu/img/icon/feature_icon_3.png') }}" alt="">
                            <h4>A Volunteer</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('sasu/img/animate_icon/Shape-14.png') }}" alt="" class="feature_icon_1">
        <img src="{{ asset('sasu/img/animate_icon/shape-10.png') }}" alt="" class="feature_icon_2">
        <img src="{{ asset('sasu/img/animate_icon/shape.png') }}" alt="" class="feature_icon_3">
        <img src="{{ asset('sasu/img/animate_icon/Shape-13.png') }}" alt="" class="feature_icon_4">
    </section>
    <!-- use sasu part end-->

    <!-- about_us part start-->
    <section class="about_us right_time section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="learning_img">
                        <img src="{{ asset('sasu/img/about_img_1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Easy to Use Mobile Application</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                            sed do eiusmod tempor incididunt ut labore et dolore magna 
                            aliqua. Ut enim ad minim
                        </p>
                        <a href="#" class="btn_1">Sign In</a>
                        <a href="#" class="btn_2">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('sasu/img/about_shape.png') }}" alt="" class="about_shape_1">
        <img src="{{ asset('sasu/img/animate_icon/shape-1.png') }}" alt="" class="feature_icon_1">
        <img src="{{ asset('sasu/img/animate_icon/shape.png') }}" alt="" class="feature_icon_4">
    </section>
    <!-- about_us part end-->

    <!-- pricing part start-->
    <section class="pricing_part mb_130 home_page_pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_tittle text-center">
                        <h2>Simple Pricing</h2>
                        <p>
                            Life firmament under them evening make after called dont
                            saying likeness isn't wherein also forth she'd air two without
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{ asset('sasu/img/icon/feature_icon_1.png') }}" alt="">
                        <p>business</p>
                        <h3>$50.00 <span>/ mo</span></h3>
                        <ul>
                            <li>2GB Bandwidth</li>
                            <li>Two Account</li>
                            <li>15GB Storage</li>
                            <li>Sale After Service</li>
                            <li>3 Host Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn_1">Choose Plane</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{ asset('sasu/img/icon/feature_icon_2.png') }}" alt="">
                        <p>business</p>
                        <h3>$60.00 <span>/ mo</span></h3>
                        <ul>
                            <li>2GB Bandwidth</li>
                            <li>Two Account</li>
                            <li>15GB Storage</li>
                            <li>Sale After Service</li>
                            <li>3 Host Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn_1">Choose Plane</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_pricing_part">
                        <img src="{{ asset('sasu/img/icon/feature_icon_3.png') }}" alt="">
                        <p>business</p>
                        <h3>$80.00 <span>/ mo</span></h3>
                        <ul>
                            <li>2GB Bandwidth</li>
                            <li>Two Account</li>
                            <li>15GB Storage</li>
                            <li>Sale After Service</li>
                            <li>3 Host Domain</li>
                            <li>24/7 Support</li>
                        </ul>
                        <a href="#" class="btn_1">Choose Plane</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('sasu/img/left_sharp.png') }}" alt="" class="left_shape_1">
        <img src="{{ asset('sasu/img/animate_icon/shape-1.png') }}" alt="" class="feature_icon_1">
        <img src="{{ asset('sasu/img/animate_icon/shape.png') }}" alt="" class="feature_icon_4">
    </section>
    <!-- pricing part end-->

    <!-- cta part start-->
    <section class="cta_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <div class="cta_text text-center">
                        <h2>Very useful Friendly</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo</p>
                        <a href="#" class="btn_2 banner_btn_1">Get Started </a>
                        <a href="#" class="btn_2 banner_btn_2">Sign up for free </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta part end-->
@endsection