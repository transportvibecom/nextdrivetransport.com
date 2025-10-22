@extends('layouts.layout')

@section('title')Top destination @endsection

@section('description')Top destination for car delivery by Broadway Auto Transport. We deliver throughout the US. @endsection

@section('content')
    <div id="page">
        <div id="destination">
            <div class="container-xxl">
                <div class="destination row">
						<div class="breadcrumbs" class="col-md-12">
							<div itemscope itemtype="https://schema.org/BreadcrumbList">
								<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="{{ route('home') }}"><span itemprop="name">Home</span></a>—
									<meta itemprop="position" content="1" />
								</div>
								<div itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
									<a itemprop="item" href="{{ Request::url() }}#content"><span itemprop="name">Top destination</span></a>
									<meta itemprop="position" content="2" />
								</div>
							</div>
						</div>
                    <div class="col-lg-4 col-md-12">
                        <div class="left">
                            <div class="section-title">
                                <h1>Top destination</h1>
                            </div>

                            <div class="content">
                                <div class="svg-wrapper">
                                    <svg id="svg-path" xmlns="http://www.w3.org/2000/svg" fill="none">
                                        <path id="selected-path" d="M775.181 124.282L774.945 124.124V124.36L775.181 124.282ZM772.82 122.156L773.371 121.92V121.605L772.82 122.156ZM782.576 116.016L782.498 114.914L782.34 114.284L782.576 116.016ZM748.194 107.908L747.643 108.144L743.158 109.482L741.585 110.033L739.775 110.584L739.146 110.82V111.056L739.382 115.15L739.618 118.928L739.854 122.392L740.247 122.628L741.663 122.235L748.036 120.345L748.194 120.739L759.524 116.409L759.602 116.567L760.625 116.173L764.244 114.756L767.706 118.928L768.178 118.535L768.414 117.354L768.336 119.243H769.122L769.358 120.188L770.067 121.526L773.764 117.039L776.833 118.063L777.541 116.488L782.576 113.812L780.452 109.639L781.003 112.316L778.406 114.284L775.495 114.52L769.673 108.301L767.077 104.365L769.673 101.61L766.998 101.452L765.897 98.8547L765.818 98.6973L761.333 103.578L751.42 106.884L748.194 107.908Z" stroke="white" stroke-width="0.627423" stroke-linejoin="round"/>

                                    </svg>
                                </div>
                                <div class="title" id="selected-region"><div class="text-center">Select on map</div></div>
                                <div class="desc" id="content-region"></div>
                                <div class="button">
                                    <a href="#" id="link-region">More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="right">
                            <svg id="full-svg-map" viewBox="0 0 811 478" fill="none" xmlns="http://www.w3.org/2000/svg">
                                @foreach($items as $item)
                                <path
                                    class="regione"
                                    data-name-regione="{{ $item->title }}"
                                    data-content-regione="{{ $item->desc }}"
                                    data-link-regione="{{ route('destination.show', ['slug' => $item->slug]) }}"
                                    d="{{ $item->path }}"
                                    stroke="white"
                                    stroke-width="0.627423"
                                    stroke-linejoin="round"
                                />
                                @endforeach
                            </svg>
                            <div class="tooltip"></div>
                        </div>
                    </div>
                </div>
                <div class="destination-list row">
                    @foreach($items as $item)
                    <div class="col-md-3 col-sm-6">
                        <a href="{{ route('destination.show', ['slug' => $item->slug]) }}">{{ $item->title }}</a>
                    </div>
                    @endforeach
                </div>
            </div>
			    <div id="industries">
        <div class="container-xxl">
            <div class="section-title">
                <span class="blue-text fwb">Our Industry-Explicit Competence</span> - Broadway Auto Transport is one of the leading car shipping company — we provide quick and instant car transport service all around the States and fit your needs.
            </div>
            <div class="industries row">
                <div class="col-md-4 left">
                    @if(isset($services))
                        @php $i = 1 @endphp
                        <div class="accordion">
                            @foreach($services as $service)
                                @if ($i % 2 != 0)
                                <div class="accordion-item">
                                    <div class="accordion-item-header">
                                        {{ $service->title }}
                                    </div>
                                    <div class="accordion-item-body">
                                        <div class="accordion-item-body-content">
                                            <div class="text-content">
                                                {{ strip_tags($service->shortDesc) }}
                                            </div>
                                            <div class="button">
                                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="d-none">{{ $i++ }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
                <div class="col-md-4 image">
                    <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/industry-bg.png'), 1300, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/industry-bg.png'), 1300, 0, 80, 0) }}" alt="Our Industry-Explicit Competence">
                </div>
                <div class="col-md-4 right">
                    @if(isset($services))
                        @php $i = 1 @endphp
                        <div class="accordion">
                            @foreach($services as $service)
                                @if ($i % 2 == 0)
                                    <div class="accordion-item">
                                        <div class="accordion-item-header">
                                            {{ $service->title }}
                                        </div>
                                        <div class="accordion-item-body">
                                            <div class="accordion-item-body-content">
                                                <div class="text-content">
                                                    {{ strip_tags($service->shortDesc) }}
                                                </div>
                                                <div class="button">
                                                    <a href="{{ route('service.show', ['slug' => $service->slug]) }}">Read more</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="d-none">{{ $i++ }}</div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
        </div>
    </div>
@endsection
