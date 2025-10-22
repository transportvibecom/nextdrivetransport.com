@extends('layouts.layout')

@section('title')Get free car shipping quote from Broadway Auto Transport @endsection

@section('description') @endsection

<div id="page" class="quote-page">
    <div class="get-a-quote">
        <div class="row get-a-quote-wrap">
            <div class="col-md-6 left-side-wrap">
                <div class="left-side">
                    <div class="quote-step" style="background-image: url('{{ asset('assets/front/img/quote-step-1.jpg') }}');">
                        <div class="content">
                            <div class="top">
                                Step one
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Your best shipping experience starts here
                                </div>
                                <div class="desc">Broadway Auto Transport is a top rated car transport management company, located in New York. As we have 10-year experience in the field of vehicle shipping sphere.</div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-step">
                        <div class="comments">
                            <div class="comment">
                                <div class="thumb">
                                    <img src="{{ asset('assets/front/img/quote-step-2-1.jpg') }}" alt="">
                                    <div class="content">
                                        <div class="desc">“I had a fantastic experience with Broadway Car Shipping! Anthony Stone, the agent, went above and beyond to ensure everything went smoothly. ”</div>
                                        <div class="name">Adriano Alvarez</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="thumb">
                                    <img src="{{ asset('assets/front/img/quote-step-2-2.jpg') }}" alt="">
                                    <div class="content">
                                        <div class="desc">“Perfect for your vehicle to be transported. Luis found me a truck and driver within day of scheduling my transport from Atlanta to Chicago even after another company let me down.”</div>
                                        <div class="name">Jennifer Drunkie</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="thumb">
                                    <img src="{{ asset('assets/front/img/quote-step-2-3.jpg') }}" alt="">
                                    <div class="content">
                                        <div class="desc">“Great job by Mr Luis. Everything worked out great"</div>
                                        <div class="name">Lusine Faustine</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="thumb">
                                    <img src="{{ asset('assets/front/img/quote-step-2-4.jpg') }}" alt="">
                                    <div class="content">
                                        <div class="desc">“James was awesome to work with and helped me in a time crunch get my car to Colorado from California. In less time than anticipated at that!"</div>
                                        <div class="name">Max Wine</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="thumb">
                                    <img src="{{ asset('assets/front/img/quote-step-2-5.jpg') }}" alt="">
                                    <div class="content">
                                        <div class="desc">“My new Jeep has just been delivered today. We're so excited to drive it with my wife, it was actually a gift to her. Hats off to Luis. - my guy made it. Thanks again to you all!”</div>
                                        <div class="name">Donnie Pedro</div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment">
                                <div class="thumb">
                                    <img src="{{ asset('assets/front/img/quote-step-2-6.jpg') }}" alt="">
                                    <div class="content">
                                        <div class="desc">“Trust worthty Transport Company. Will definitely recommended to my family and friend when it comes to moving to another state”</div>
                                        <div class="name">Adriana Sanctuary</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="quote-step" style="background-image: url('{{ asset('assets/front/img/quote-step-3.jpg') }}');">
                        <div class="content">
                            <div class="top">
                                Final step
                            </div>
                            <div class="bottom">
                                <div class="title">
                                    Empower Enhance Enable
                                </div>
                                <div class="desc">We achieve this by fostering a culture of innovation, continuous improvement, and unwavering dedication to quality. Through ethical practices and a focus on sustainability, we aim to make a positive impact on our communities and the world at large.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 quote-form-wrap">
                @include('inc.callback-form')
            </div>
        </div>
    </div>
</div>
@section('content')

@endsection

