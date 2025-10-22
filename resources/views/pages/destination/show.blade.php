@extends('layouts.layout')

@section('title'){{ isset($destination->meta_title) ? $destination->meta_title : $destination->title }} @endsection

@section('shortDesc'){!! isset($destination->shortDesc) ? $destination->shortDesc : $destination->meta_description !!} @endsection

@section('description'){{ (isset($destination->meta_description) && !empty($destination->meta_description)) ? strip_tags($destination->meta_description) : strip_tags($destination->shortDesc) }} @endsection

@section('section-bg', isset($destination->thumbnail) ? asset($destination->getImage(1903,700,80,1,'full')) : asset('assets/front/img/first-section.jpg'))

@section('content')
    @include('inc.first-section')

    <div id="page">
        <div id="destination-page">
            <div id="about-us-page">
                <div id="reasons">
                    <div class="container-xl">
                        <div class="reasons">
                            <div class="row reasons-page-wrap">
                                <div class="col-md-5">
                                    <div class="raitings-wrap">
                                        <div class="raitings">
                                            <div class="row">
                                                <div class="col-md-12 raiting-wrap">
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
                                                                <img src="img/raiting-logo-1.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 raiting-wrap">
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
                                                                <img src="img/raiting-logo-2.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 raiting-wrap">
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
                                                                <img src="img/raiting-logo-3.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 raiting-wrap">
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
                                                                <img src="img/raiting-logo-4.png" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="reasons-wrap">
                                        <div class="reasons-blocks">
                                            <div id="page-content">
                                                {!! $destination->desc !!}
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

            @include('inc.destinations')

            @include('inc.faqs')
        </div>
    </div>

@endsection
