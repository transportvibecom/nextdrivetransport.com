@extends('layouts.layout')

@section('title')Top rated car Shipping  company @endsection

@section('description')Broadway Auto Transport specialize on shipping vehicles, motorcycles, and heavy equipment from all States around USA.<br><br>

We are at Broadway Auto Transport talented group of people with a passion for logistics and work 24/7 for your needs. @endsection

@section('section-bg', asset('assets/front/img/first-section.jpg'))

@section('content')
    @include('inc.first-section')

    <div id="page">
        <div id="about-us-page">
            <div id="reasons">
                <div class="container-xl">
                    <div class="reasons">
                        <div class="row reasons-page-wrap">
                            <div class="col-lg-5">
                                <div class="raitings-wrap">
                                    <div class="raitings">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-6 raiting-wrap">
                                                <div class="raiting-block">
                                                    <div class="left">
                                                        <div class="heading">
                                                            <div class="grade">5.0</div>
                                                            <div class="ico"><i class="fa-solid fa-star"></i></div>
                                                        </div>
                                                        <div class="button">
                                                            113 Reviews
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <ul>
                                                            <li>
                                                                <div class="item-grade">
                                                                    5 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 100%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    4 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    3 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    2 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    1 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="raiting-logo">
                                                            <img src="{{ asset('assets/front/img/raiting-logo-1.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6 raiting-wrap">
                                                <div class="raiting-block">
                                                    <div class="left">
                                                        <div class="heading">
                                                            <div class="grade">4.9</div>
                                                            <div class="ico"><i class="fa-solid fa-star"></i></div>
                                                        </div>
                                                        <div class="button">
                                                            30 Reviews
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <ul>
                                                            <li>
                                                                <div class="item-grade">
                                                                    5 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 100%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    4 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 45%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    3 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 33%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    2 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 15%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    1 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="raiting-logo">
                                                            <img src="{{ asset('assets/front/img/raiting-logo-2.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6 raiting-wrap">
                                                <div class="raiting-block">
                                                    <div class="left">
                                                        <div class="heading">
                                                            <div class="grade">4.9</div>
                                                            <div class="ico"><i class="fa-solid fa-star"></i></div>
                                                        </div>
                                                        <div class="button">
                                                            68 Reviews
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <ul>
                                                            <li>
                                                                <div class="item-grade">
                                                                    5 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 100%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    4 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 25%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    3 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    2 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    1 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 15%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="raiting-logo">
                                                            <img src="{{ asset('assets/front/img/raiting-logo-3.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-6 raiting-wrap">
                                                <div class="raiting-block">
                                                    <div class="left">
                                                        <div class="heading">
                                                            <div class="grade">4.9</div>
                                                            <div class="ico"><i class="fa-solid fa-star"></i></div>
                                                        </div>
                                                        <div class="button">
                                                            91 Reviews
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <ul>
                                                            <li>
                                                                <div class="item-grade">
                                                                    5 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 100%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    4 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 25%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    3 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    2 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 10%"></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="item-grade">
                                                                    1 <i class="fa-solid fa-star"></i>
                                                                </div>
                                                                <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
                                                                    <div class="progress-bar" style="width: 15%"></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                        <div class="raiting-logo">
                                                            <img src="{{ asset('assets/front/img/raiting-logo-4.png') }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="reasons-wrap">
                                    <div class="section-title">
                                        <h3><span class="site-color">About </span>Broadway Auto Transport</h3>
                                        <p>Broadway Auto Transport is a top rated car transport management company, located in New York. As we have 10-year experience in the field of vehicle shipping sphere, we can provide a huge range of services like door to door car shipping, Open car transport, Enclosed auto transport, Motorcycle shipping across country, Express car shipping etc.</p>
                                    </div>
                                    <div class="reasons-blocks">
                                        <div class="row">
                                            <div class="col-md-6 reason-block-wrap">
                                                <div class="reason-block">
                                                    <div class="heading">
                                                        <div class="ico">
                                                            <img src="{{ asset('assets/front/img/reason-2.svg') }}" alt="">
                                                        </div>
                                                        <div class="title">Highly Skilled Team</div>
                                                    </div>
                                                    <div class="content">
                                                        Our team brings years of experience and a passion for excellence to every shipment of vehicles. Trust us to deliver exceptional results.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 reason-block-wrap">
                                                <div class="reason-block">
                                                    <div class="heading">
                                                        <div class="ico">
                                                            <img src="{{ asset('assets/front/img/reason-3.svg') }}" alt="">
                                                        </div>
                                                        <div class="title">Relentless Productivity Driver</div>
                                                    </div>
                                                    <div class="content">
                                                        We're dedicated to ensuring your vehicles reach their destination efficiently and safely, setting the industry standard for reliability and performance.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 reason-block-wrap">
                                                <div class="reason-block">
                                                    <div class="heading">
                                                        <div class="ico">
                                                            <img src="{{ asset('assets/front/img/reason-6.png') }}" alt="">
                                                        </div>
                                                        <div class="title">Delivering Excellence</div>
                                                    </div>
                                                    <div class="content">
                                                        We take immense pride in consistently delivering exceptional results that make a lasting impact.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="mini-info">
                <div class="container-xl">
                    <div class="mini-info">
                        <h2><i> At Broadway Auto Transport, <span class="site-color">our vision</span> is to be <b>a
                                    driving force in our industry,</b> setting new standards for <b>excellence, innovation,</b> and customer <b>satisfaction.</b> We aspire to become
                                a <b>trusted partner</b> for our clients, delivering solutions that
                                consistently exceed expectations while maintaining a
                                commitment to environmental and social responsibility.</i>
                        </h2>
                    </div>
                </div>
            </div>

            <div id="service-page">
                <div id="reasons">
                    <div class="container-xl">
                        <div class="reasons">
                            <div class="row reasons-page-wrap">
                                <div class="col-md-5">
                                    <div class="thumb">
                                        <img src="{{ asset('assets/front/img/about-us-bg.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="reasons-wrap">
                                        <div class="section-title">
                                            <h3><span class="site-color">Mission of</span> Broadway Auto Transport </h3>
                                            <p>Our mission at Broadway Auto Transport is to provide top-tier products and services that empower our customers, enhance their lives, and enable their success. We achieve this by fostering a culture of innovation, continuous improvement, and unwavering dedication to quality. Through ethical practices and a focus on sustainability, we aim to make a positive impact on our communities and the world at large.
                                            </p>
                                        </div>
                                        <div class="reasons-blocks">
                                            <div class="reason-block-wrap">
                                                <div class="reason-block">
                                                    <div class="content">
                                                        <ul>
                                                            <div class="row">
                                                                <div class="col-lg-6 col-md-12">
                                                                    <li>
                                                                        <div class="ico"><img src="{{ asset('assets/front/img/reason-1.svg') }}" alt=""></div>
                                                                        Top-Tier Services
                                                                    </li>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <li>
                                                                        <div class="ico"><img src="{{ asset('assets/front/img/reason-1.svg') }}" alt=""></div>
                                                                        dedication to quality
                                                                    </li>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <li>
                                                                        <div class="ico"><img src="{{ asset('assets/front/img/reason-1.svg') }}" alt=""></div>
                                                                        enable Your success
                                                                    </li>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <li>
                                                                        <div class="ico"><img src="{{ asset('assets/front/img/reason-1.svg') }}" alt=""></div>
                                                                        empower customers
                                                                    </li>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <li>
                                                                        <div class="ico"><img src="{{ asset('assets/front/img/reason-1.svg') }}" alt=""></div>
                                                                        continuous improvement
                                                                    </li>
                                                                </div>
                                                                <div class="col-lg-6 col-md-12">
                                                                    <li>
                                                                        <div class="ico"><img src="{{ asset('assets/front/img/reason-1.svg') }}" alt=""></div>
                                                                        innovation development
                                                                    </li>
                                                                </div>
                                                            </div>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('inc.services')

            @include('inc.steps')
        </div>
    </div>

@endsection
