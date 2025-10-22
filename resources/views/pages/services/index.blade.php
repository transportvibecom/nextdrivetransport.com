@extends('layouts.layout')

@section('title')Services @endsection

@section('description')We offer: Open Car Transport, Enclosed Car Shipping, Door-to-Door Service, Expedited Shipping and more. Your trusted partner for reliable and secure vehicle transportation. At Broadway Auto Transport, our commitment to quality, safety, and customer satisfaction sets us apart. We're fully licensed, insured, and equipped with modern technology for efficient vehicle transport. @endsection

@section('content')
    <div id="page">
        <div id="baner">
            <div class="container-xxl">
                <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/services-bg.jpg'), 1300, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/services-bg.jpg'), 1300, 0, 80, 0) }}" alt="Auto Transport Services">
            </div>
        </div>
        <div id="services">
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
									<a itemprop="item" href="{{ Request::url() }}#content"><span itemprop="name">Auto Transport Services</span></a>
									<meta itemprop="position" content="2" />
								</div>
							</div>
						</div>
                        <div class="col-md-5 left-side">
                            <h1>Auto Transport Services</h1>
                        </div>
                        <div class="col-md-7 right-side">
                            <p>"Discover Our Auto Transport Services at Broadway Auto Transport:
                                We offer: Open Car Transport, Enclosed Car Shipping, Door-to-Door Service, Expedited Shipping and more. Your trusted partner for reliable and secure vehicle transportation.</p>
                            <p>At Broadway Auto Transport, our commitment to quality, safety, and customer satisfaction sets us apart. We're fully licensed, insured, and equipped with modern technology for efficient vehicle transport.</p>
                            <p>Contact us today to experience the Broadway difference in auto transportation!"</p>
                        </div>
                    </div>
                    <div class="mobile-baner">
                        <img class="lazy" src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/services-bg.jpg'), 1300, 0, 1, 0) }}" data-src="{{ App\Helpers\AppHelper::resizeImage( public_path('assets/front/img/services-bg.jpg'), 1300, 0, 80, 0) }}" alt="Auto Transport Services">
                    </div>
                </div>
            </div>
            <div class="services-wrap">
                <div class="container-xxl">
                    <div class="blur-object yellow">
                        <span></span>
                    </div>
                    @if(count($services))
                    <div class="row service">
                        @php $i = 1 @endphp
                        @foreach($services as $service)
                        <div class="col-md-4 col-sm-6 service-block-wrap">
                            <div class="service-block">
                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}" class="thumbnail">
                                    <img loading="lazy" src="{{ $service->getImage(450,529,80,1) }}" alt="{{ (isset($service->meta_h1) && !empty($service->meta_h1)) ? $service->meta_h1 : $service->title }}">
                                    <div class="counter">{{ $i++ }}</div>
                                </a>
                                <div class="content">
                                    <div class="text-content">
                                        <div class="title"><a href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ strip_tags($service->title) }}</a></div>
                                        <div class="desc">{{ strip_tags($service->shortDesc) }}</div>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('service.show', ['slug' => $service->slug]) }}">Read more <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @endif
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
<!--             <div class="section-description">
                <div class="container-xxl">
                    <div class="desc-blocks row">
                        <div class="col-md-3 col-sm-6">
                            <div class="desc-block">
                                <div class="top">
                                    <span>1</span>
                                    <div class="title">Door to Door Transport</div>
                                </div>
                                <div class="bottom">
                                    <div class="text-content">
                                        <div class="desc">There may be various reasons to ship a car across country. Whether you are relocating to another state</div>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('service.show', ['slug' => 'door-to-door-auto-transport-service']) }}">Read more <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="desc-block">
                                <div class="top">
                                    <span>2</span>
                                    <div class="title">Expedited Transport</div>
                                </div>
                                <div class="bottom">
                                    <div class="text-content">
                                        <div class="desc">Sometimes, you have to transport your vehicle as soon as possible. Expedited car shipping service is a specific auto transport service with tight pick-up and delivery dates</div>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('service.show', ['slug' => 'expedited-car-shipping']) }}">Read more <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="desc-block">
                                <div class="top">
                                    <span>3</span>
                                    <div class="title">Enclosed Transport</div>
                                </div>
                                <div class="bottom">
                                    <div class="text-content">
                                        <div class="desc">There are many options to choose, when it comes to ship your car across states. However, if you want to ship your car with the most safely option, we advise you to choose our enclosed auto transport service.</div>
                                    </div>
                                    <div class="button">
                                        <a href="{{ route('service.show', ['slug' => 'enclosed-car-shipping']) }}">Read more <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="desc-block">
                                <div class="top">
                                    <span>4</span>
                                    <div class="title">Golf Cart</div>
                                </div>
                                <div class="bottom">
                                    <div class="text-content">
                                        <div class="desc">Broadway Auto Transport is one of the leading car shipping company — we provide quick and instant car transport service all around the States and fit your needs.</div>
                                    </div>
                                    <div class="button">
                                        <a href="#">Read more <i class="fa-solid fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            @if(count($blogs))
            <div class="services-wrap section-solutions">
                <div class="container-xxl">
                    <div class="section-title">
                        <span class="blue-text fwb">Our Transport Solutions</span> - Broadway Auto Transport is one of the leading car shipping company — we provide quick and instant car transport service all around the States and fit your needs.
                    </div>
                    <div class="row service">
                        @foreach($blogs as $blog)
                            <div class="col-md-4 col-sm-6 service-block-wrap">
                                <div class="service-block">
                                    <a href="{{ route('front.blog.show', ['slug' => $blog->slug]) }}" class="thumbnail">
                                        <img loading="lazy" src="{{ $blog->getImage(450,529,80,1) }}" alt="{{ $blog->title }}">
                                    </a>
                                    <div class="content">
                                        <div class="text-content">
                                            <div class="title"><a href="{{ route('front.blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></div>
                                            <div class="desc">{{ strip_tags($service->shortDesc) }}</div>
                                        </div>
                                        <div class="button">
                                            <a href="{{ route('front.blog.show', ['slug' => $blog->slug]) }}">Read more <i class="fa-solid fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection
