<div id="services">
    <div class="container-xl">
        <div class="services">
            <div class="section-title">
                <h3>Explore Our State to State <span class="site-color">Transportation Services</span></h3>
                <p>To stay ahead of the competition, we deliver any kind of transports for your needs. Get instant car shipping quote and ship your vehicle with our car transport service.</p>
            </div>
            @if(count($services))
                <div class="services-list">
                    <div class="row">
                        @if(isset($service))
                            @foreach($services->where('id', '!=', $service->id) as $service)
                                <div class="col-md-6 service-wrap">
                                    <div class="service" style="background-image: url('{{ $service->getImage() }}');">
                                        <div class="content">
                                            <div class="title">
                                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                            </div>
                                            <div class="tags">
                                                @if(isset($service->factOne))
                                                    <div class="tag">{{ $service->factOne }}</div>
                                                @endif
                                                @if(isset($service->factTwo))
                                                    <div class="tag">{{ $service->factTwo }}</div>
                                                @endif
                                                @if(isset($service->factThree))
                                                    <div class="tag">{{ $service->factThree }}</div>
                                                @endif
                                                @if(isset($service->factFour))
                                                    <div class="tag">{{ $service->factFour }}</div>
                                                @endif
                                            </div>
                                            <div class="desc">{{ strip_tags($service->shortDesc) }}</div>
                                        </div>
                                        <div class="button">
                                            <a href="quote.html">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            @foreach($services as $service)
                                <div class="col-md-6 service-wrap">
                                    <div class="service" style="background-image: url('{{ $service->getImage() }}');">
                                        <div class="content">
                                            <div class="title">
                                                <a href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a>
                                            </div>
                                            <div class="tags">
                                                @if(isset($service->factOne))
                                                    <div class="tag">{{ $service->factOne }}</div>
                                                @endif
                                                @if(isset($service->factTwo))
                                                    <div class="tag">{{ $service->factTwo }}</div>
                                                @endif
                                                @if(isset($service->factThree))
                                                    <div class="tag">{{ $service->factThree }}</div>
                                                @endif
                                                @if(isset($service->factFour))
                                                    <div class="tag">{{ $service->factFour }}</div>
                                                @endif
                                            </div>
                                            <div class="desc">{{ strip_tags($service->shortDesc) }}</div>
                                        </div>
                                        <div class="button">
                                            <a href="{{ route('quote') }}">Get a Quote</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
