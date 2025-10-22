@extends('layouts.layout')

@section('title')FAQ`s @endsection

@section('description')Discover Frequently Asked Questions from Our Support. We have been providing car shipping services across the United States for 10 years, and our experts are ready to help you get your vehicle moved right now @endsection

@section('content')
    <div id="page">
        <div id="baner">
            <div class="container">
                <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/faq-bg.jpg'), 1300, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/faq-bg.jpg'), 1300, 0, 80, 0) }}" alt="Discover Frequently Asked Questions from Our Support">
            </div>
        </div>
        <div id="faq">
            <div class="content-wrap">
                <div class="container">
                    <div class="content">
						<div class="breadcrumbs" class="col-md-12">
							<div itemscope itemtype="https://schema.org/BreadcrumbList">
								<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="{{ route('home') }}"><span itemprop="name">Home</span></a>—
									<meta itemprop="position" content="1" />
								</div>
								<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="{{ Request::url() }}#content"><span itemprop="name">Discover Frequently Asked Questions from Our Support</span></a>
									<meta itemprop="position" content="2" />
								</div>
							</div>
						</div>
                        <div class="left-side">
                            <h1><span class="blue-text fwb">Discover Frequently Asked Questions from Our Support</span></h1>
                            <p>We have been providing car shipping services across the United States for 10 years, and our experts are ready to help you get your vehicle moved right now</p>
                            <div class="blur-object yellow">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="questions">
                <div class="container">
                    <div class="questions">
                        @if(count($questions))
                            <div class="accordion">
                                @foreach($questions as $question)
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            {{ $question->question }}
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                {!! $question->answer !!}
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
