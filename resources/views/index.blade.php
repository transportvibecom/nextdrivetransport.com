@extends('layouts.layout')

@section('title') {{$metadata->meta_title}} @endsection

@section('description')
{{$metadata->meta_description}}
@endsection

@section('section-bg', asset('assets/front/img/first-section.jpg'))

@section('content')
    @include('inc.first-section')

    @include('inc.reasons')

    @include('inc.services')

    @include('inc.steps')

    <div id="customers">
        <div class="container-xl">
            <div class="customers">
                <div class="section-title">
                    <h3>Learn about our services from <span class="site-color">real customers</span></h3>
                    <p>At Broadway Auto Transport, our vision is to be a driving force in our industry, setting new standards for excellence, innovation, and customer satisfaction. We aspire to become a trusted partner for our clients, delivering solutions that consistently exceed expectations while maintaining a commitment to environmental and social responsibility.</p>
                </div>
                <div class="raitings">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 raiting-wrap">
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
                                        <img src="{{ asset('assets/front/img/raiting-logo-1.png') }}" data-src="{{ asset('assets/front/img/raiting-logo-1.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 raiting-wrap">
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
                                        <img src="{{ asset('assets/front/img/raiting-logo-2.png') }}" data-src="{{ asset('assets/front/img/raiting-logo-2.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 raiting-wrap">
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
                                        <img src="{{ asset('assets/front/img/raiting-logo-3.png') }}" data-src="{{ asset('assets/front/img/raiting-logo-3.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 raiting-wrap">
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
                                        <img src="{{ asset('assets/front/img/raiting-logo-4.png') }}" data-src="{{ asset('assets/front/img/raiting-logo-4.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blog">
        <div class="container-xl">
            <div class="blog">
                <div class="section-title">
                    <h3>Read our latest <span class="site-color">blog posts</span></h3>
                    <p>Here you can read interesting information about the auto transport industry and benefit from it or learn something new</p>
                </div>
                @if(count($blogs))
                <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-md-4 col-sm-6 blog-item-wrap">
                        <div class="blog-item">
                            <div class="thumb">
                                <a href="{{ route('front.blog.show', ['slug' => $blog->slug]) }}">
                                    <img loading="lazy" src="{{ $blog->getImage() }}" alt="{{ $blog->title }}">
                                </a>
                            </div>
                            <div class="content">
                                <div class="title">
                                    <a href="{{ route('front.blog.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a>
                                </div>
                                <div class="desc">
                                    {{ strip_tags($blog->shortDesc) }}
                                </div>
                            </div>
                            <div class="actions">
                                <div class="button">
                                    <a href="{{ route('front.blog.show', ['slug' => $blog->slug]) }}">Full Article</a>
                                </div>
                                <div class="date">{{ $blog->created_at->format('d.m.Y') }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </div>

    <div id="callback-section">
        <div class="container-xl">
            <div class="callback-section">
                <div class="row callback-section-wrap">
                    <div class="col-md-5">
                        <div class="content">
                            <div class="section-title">
                                <h3>We will answer all your questions</h3>
                                <p>Our team is here to assist you every step of the way, ensuring your vehicle arrives in pristine condition and on time. Contact us today to discuss your specific transportation needs, get a quote, or schedule your shipment.<br><br>
                                    <b>Your vehicle's journey begins with Broadway Auto Transport!</b></p>
                            </div>
                            @include('inc.contact-form')
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div id="map">
                            <div class="map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8804.952773982423!2d-74.01488902371055!3d40.70922630528631!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a19d3bcf1a7%3A0x88e275526a373890!2zMSBNYWlkZW4gTG4sIE5ldyBZb3JrLCBOWSAxMDAzOCwg0KHQqNCQ!5e0!3m2!1sru!2s!4v1711499499768!5m2!1sru!2s" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('inc.destinations')

    @include('inc.faqs')
@endsection
