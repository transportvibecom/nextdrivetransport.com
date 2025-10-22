@extends('layouts.layout')

@section('title')How it works @endsection

@section('description')Broadway Auto Transport is one of the leading car shipping company — we provide quick and instant car transport service all around the States and fit your needs. @endsection

@section('content')
    <div id="page">
        <div id="baner">
            <div class="container-xxl">
                <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/works-bg.jpg'), 1290, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/works-bg.jpg'), 1290, 0, 80, 0) }}" alt="Few Steps for Success">
            </div>
        </div>
        <div id="works">
            <div class="content-wrap">
                <div class="container-xxl">
                    <div class="row content">
						<div class="breadcrumbs" class="col-md-12">
							<div itemscope itemtype="https://schema.org/BreadcrumbList">
								<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="{{ route('home') }}"><span itemprop="name">Home</span></a>—
									<meta itemprop="position" content="1" />
								</div>
								<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="{{ Request::url() }}#content"><span itemprop="name">Few Steps for Success</span></a>
									<meta itemprop="position" content="2" />
								</div>
							</div>
						</div>
                        <div class="col-md-6 left-side">
                            <h1>Few Steps for <span class="blue-text">Success</span></h1>
{{--                            <div class="blur-object blue">--}}
{{--                                <span></span>--}}
{{--                            </div>--}}
                        </div>
                        <div class="col-md-6 right-side">
                            <p>Broadway Auto Transport is one of the leading car shipping company — we provide quick and instant car transport service all around the States and fit your needs.</p>
                        </div>
                    </div>
                    <div class="mobile-baner">
                        <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/works-bg.jpg'), 1290, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/works-bg.jpg'), 1290, 0, 80, 0) }}" alt="Few Steps for Success">
                    </div>
                </div>
            </div>

            <div id="steps">
                <div class="container-xxl">
                    <div class="steps row">
                        <div class="col-md-4 step-wrap">
                            <div class="step">
                            <span>
                                <div class="num-step">1-Step</div>
                                <div class="arrow">
                                    <div></div>
                                </div>
                            </span>
                                <div class="content">
                                    <div class="title">Get a free quote and book your order</div>
                                    <div class="desc">In order to get through the first step, you have to get a quote and book your order. By filling out our customized form with your vehicle shipping details, you get a quote in a few minutes from one our professional agents</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 step-wrap">
                            <div class="step">
                            <span>
                                <div class="num-step">2-Step</div>
                                <div class="arrow">
                                    <div></div>
                                </div>
                            </span>
                                <div class="content">
                                    <div class="title">We pick up your vehicle</div>
                                    <div class="desc">The appointed driver for your vehicle shipping will contact you a few hours before to pick up your car. He or She will confirm some details of pick up. The driver should be sure that the location is safe and legal for a large commercial vehicle</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 step-wrap">
                            <div class="step">
                            <span>
                                <div class="num-step">3-Step</div>
                                <div class="arrow">
                                    <div></div>
                                </div>
                            </span>
                                <div class="content">
                                    <div class="title">You receive your car</div>
                                    <div class="desc">The car transport carrier will get in touch a few hours before they make their delivery. They like to give you a few hours' notices so you can make sure you are available</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="progress-section">
                <div class="container-xxl">
                    <div class="progress-blocks row">
                        <div class="col-md-4 progress-wrap">
                            <div class="chart" data-percent="93" data-scale-color="#ffb400">93%</div>
                            <div class="title">Happy Clients</div>
                            <div class="desc">We do our best to suit customer needs on any services</div>
                        </div>
                        <div class="col-md-4 progress-wrap">
                            <div class="chart" data-percent="87" data-scale-color="#ffb400">87%</div>
                            <div class="title">Claims Completed</div>
                            <div class="desc">We are available 24/7 and will solve any claims quickly</div>
                        </div>
                        <div class="col-md-4 progress-wrap">
                            <div class="chart" data-percent="84" data-scale-color="#ffb400">84%</div>
                            <div class="title">Businnes Partners</div>
                            <div class="desc">We have been working with well know companies for a long time</div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="presentation">
                <div class="container-xxl">
                    <div class="presentation">
                        <div class="thumbnail">
                            <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/presentation-img.jpg'), 1100, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/presentation-img.jpg'), 1100, 0, 80, 0) }}" alt="Few Steps for Success">
                        </div>
                        <div class="content">
                            <span class="blue-text fwb">Choose one of options to transport with enclosed or open shipping.</span>
                            <p>Broadway Auto Transport is one of the leading car shipping company — we provide quick and instant car transport service all around the States and fit your needs. We have been providing car shipping services across the United States for 10 years, and our experts are ready to help you get your vehicle moved right now</p>
                        </div>
                        <div class="button">
                            <a href="{{ route('services') }}">More about our services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
