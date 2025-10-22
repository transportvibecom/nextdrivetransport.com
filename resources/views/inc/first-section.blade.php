{{--<div id="first-section" style="background-image: url('{{ asset('assets/front/img/first-section.jpg') }}');">--}}
<div id="first-section"
     style="background-image: url('@yield('section-bg')');">

    <div class="container-xl">
        <div class="first-section">
            <div class="row">
                <div class="col-md-6">
                    <div class="content">
{{--                        <h1>@yield('title')</h1>--}}
{{--                        <p>@yield('description')</p>--}}

{{--                        @if(request()->route()->named('home') || request()->route()->named('about-us'))--}}
{{--                            <h1>@yield('title')</h1>--}}
{{--                            <p>@yield('description')</p>--}}
{{--                        @elseif(request()->route()->named('destination.show'))--}}
{{--                            <h1>{{ $destination->title }}</h1>--}}
{{--                            <p>{!! $destination->shortDesc !!}</p>--}}
{{--                        @elseif(isset($service))--}}
{{--                            <h1>{{ $service->title }}</h1>--}}
{{--                            <p>{!! $service->shortDesc !!}</p>--}}
{{--                        @endif--}}

                        @if(isset($service))
                            <h1>{{ $service->title }}</h1>
                            <p>{!! $service->shortDesc !!}</p>
                        @elseif(isset($destination))
                            <h1>{{ $destination->meta_h1 }}</h1>
                            <p>{!! $destination->shortDesc !!}</p>
                        @else
                            <h1>@yield('title')</h1>
                            <p>@yield('shortDesc')</p>
                        @endif
                        <div class="buttons">
                            <a href="{{ route('quote') }}" class="site-btn site-color-btn">Get a Quote</a>
                            <a href="#services" class="site-btn transparent-btn">All Services</a>
                        </div>
                        <div class="absolute-text">
                            Broadway Auto Transport is a top rated car transport management company, located in New York.
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-side">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.90979 25C-0.391989 25 -2.76204 25 4.88071 25C4.89041 25 4.9001 25 4.90979 25C23.0211 24.9979 25 23.0093 25 4.88068C25 -13.2576 25 25 25 25C25 25 12.1905 25 4.90979 25Z" fill="white" />
                            <path d="M4.88071 25C-2.76204 25 -0.391989 25 4.90979 25C4.9001 25 4.89041 25 4.88071 25Z" fill="white" />
                        </svg>
                        @include('inc.callback-form')
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3.60008e-06 4.90978C3.83183e-06 -0.39199 2.02808e-06 -2.76204 1.69401e-06 4.88071C1.69358e-06 4.89041 3.60051e-06 4.9001 3.60008e-06 4.90978C0.00211806 23.0211 1.99074 25 20.1193 25C38.2576 25 -1.09278e-06 25 -1.09278e-06 25C-1.09278e-06 25 3.28183e-06 12.1905 3.60008e-06 4.90978Z" fill="white" />
                            <path d="M1.69401e-06 4.88071C2.02808e-06 -2.76204 3.83183e-06 -0.39199 3.60008e-06 4.90978C3.60051e-06 4.9001 1.69358e-06 4.89041 1.69401e-06 4.88071Z" fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
