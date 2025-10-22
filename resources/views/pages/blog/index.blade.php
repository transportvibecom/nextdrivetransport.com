@extends('layouts.layout')

@section('title')Read The Latest Blogs From Broadway Auto Transport  @endsection

@section('description')Blog of the Broadway Auto Transport Company: useful articles and materials from the world of delivery and transport. @endsection

@section('content')

    <div id="page" class="blogs-page">
        <div id="baner" style="background-image: url('{{ asset('assets/front/img/blogs-bg.jpg') }}');">
            <div class="container-xl">
                <div class="baner">
                    <div class="content">
                        <h1>Read The Latest Blogs From Broadway Auto Transport </h1>
                    </div>
                </div>
            </div>
        </div>

        @if(count($blogs))
        <div id="blog">
            <div class="container-xl">
                <div class="blog">
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
        @endif

    </div>

@endsection
