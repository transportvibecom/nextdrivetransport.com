@extends('layouts.layout')

@section('title'){!! $blog->title !!} @endsection

@section('description'){!! $blog->shortDesc !!} @endsection

@section('content')
    <div id="page" class="blog-item-page">
        <div id="blog-item">
            <div class="container-xl">
                <div class="blog-item">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-content">
                                <div class="thumb">
                                    <img src="{{ $blog->getImage() }}" class="blog-image" alt="{{ $blog->title }}">
                                    <div class="main-info">
                                        <div class="row main-info-wrap">
                                            <div class="col-lg-8">
                                                <div class="title">
                                                    <h1>{{ $blog->title }}</h1>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="actions">
                                                    <div class="date">{{ $blog->created_at->format('F j') }} - 10 min read</div>
{{--                                                    <div class="date">January 15 10 min read</div>--}}
                                                    <div class="share-links">
                                                        <div class="link">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/front/img/share-1.png') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="link">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/front/img/share-2.png') }}" alt="">
                                                            </a>
                                                        </div>
                                                        <div class="link">
                                                            <a href="#">
                                                                <img src="{{ asset('assets/front/img/share-3.png') }}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="description">
                                    {!! $blog->desc !!}
                                </div>
                                <div id="share-section">
                                    <div class="share-section">
                                        <div class="content">
                                            Like what you read? Share with your friends.
                                        </div>
                                        <div class="share-links">
                                            <div class="link">
                                                <a href="#">
                                                    <img src="{{ asset('assets/front/img/share-1.png') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="link">
                                                <a href="#">
                                                    <img src="{{ asset('assets/front/img/share-2.png') }}" alt="">
                                                </a>
                                            </div>
                                            <div class="link">
                                                <a href="#">
                                                    <img src="{{ asset('assets/front/img/share-3.png') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div id="subscribe-section">
                                <div class="follow-section">
                                    <div class="social-links">
                                        <div class="link">
                                            <a href="https://www.facebook.com/broadwayautotransport" target="_blank">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/front/img/follow-link-bg.png') }}" alt="">
                                                    <div class="ico">
                                                        <img src="{{ asset('assets/front/img/follow-fb.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="link">
                                            <a href="#">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/front/img/follow-link-bg.png') }}" alt="">
                                                    <div class="ico">
                                                        <img src="{{ asset('assets/front/img/follow-link.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="link">
                                            <a href="#">
                                                <div class="thumb">
                                                    <img src="{{ asset('assets/front/img/follow-link-bg.png') }}" alt="">
                                                    <div class="ico">
                                                        <img src="{{ asset('assets/front/img/follow-x.png') }}" alt="">
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="follow-desc">
                                        <div class="title">Follow us</div>
                                        <div class="desc">Follow us on social media so you don't miss discounts and updates on your favorite car shipping company</div>
                                    </div>
                                </div>
                                <div class="subscribe-block">
                                    <h3>Subscribe to our newsletter</h3>
                                    <form action="#" id="subscribeForm">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required>
                                        </div>
                                        <button type="submit">Subscribe</button>
                                    </form>
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
                        <h3>Related Articles</h3>
                    </div>
                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-md-4 blog-item-wrap">
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
                </div>
            </div>
        </div>
    </div>
@endsection
