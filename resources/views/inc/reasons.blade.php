<div id="reasons">
    <div class="container-xl">
        <div class="reasons">
            <div class="row reasons-wrap">
                <div class="col-md-5">
                    @if(count($statistics))
                    <div class="counter-blocks">
                        <div class="row">
                            @foreach($statistics as $statistic)
                            <div class="col-md-12 col-6 counter-block-wrap">
                                <div class="counter-block">
                                    <div class="numeric-wrap">
                                        <div class="numeric">{{ $statistic->quantity }}</div>+
                                    </div>
                                    <div class="title">{{ $statistic->title }}</div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif
                </div>
                <div class="col-md-7">
                    <div class="content">
                        <div class="section-title">
                            <h3>A Few Reasons <span class="site-color">Why You Choose Us</span> to Ship Your Car</h3>
                            <p>At Broadway Auto Transport, our vision is to be a driving force in our industry, setting new standards for excellence, innovation, and customer satisfaction. We aspire to become a trusted partner for our clients, delivering solutions that exceed expectations while maintaining a commitment to environmental and social responsibility.</p>
                        </div>
                        <div class="reasons-blocks">
                            <div class="row">
                                <div class="col-md-6 reason-block-wrap">
                                    <div class="reason-block">
                                        <div class="heading">
                                            <div class="ico">
                                                <img src="{{ asset('assets/front/img/reason-1.svg') }}" data-sre="{{ asset('assets/front/img/reason-1.svg') }}" alt="">
                                            </div>
                                            <div class="title">Experienced Team</div>
                                        </div>
                                        <div class="content">
                                            Our professional car shipping coordinators are providing top services to our customers. All our agents have deep eagerness to help you with your car shipping needs.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 reason-block-wrap">
                                    <div class="reason-block">
                                        <div class="heading">
                                            <div class="ico">
                                                <img src="{{ asset('assets/front/img/reason-2.svg') }}" data-sre="{{ asset('assets/front/img/reason-2.svg') }}" alt="">
                                            </div>
                                            <div class="title">Integrated Innovations</div>
                                        </div>
                                        <div class="content">
                                            We have an experienced customer service team that is available to you 24 hours a day, 365 days a year to make sure our services are the best option for you!
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 reason-block-wrap">
                                    <div class="reason-block">
                                        <div class="heading">
                                            <div class="ico">
                                                <img src="{{ asset('assets/front/img/reason-3.svg') }}" data-sre="{{ asset('assets/front/img/reason-3.svg') }}" alt="">
                                            </div>
                                            <div class="title">Safe & Secure Transport</div>
                                        </div>
                                        <div class="content">
                                            We prioritize the safety and security of your vehicle during transport. Our team of experienced shippers carefully loads and secures your vehicle to ensure it arrives in the same condition it was picked up in.
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 reason-block-wrap">
                                    <div class="reason-block">
                                        <div class="heading">
                                            <div class="ico">
                                                <img src="{{ asset('assets/front/img/reason-4.svg') }}" data-sre="{{ asset('assets/front/img/reason-4.svg') }}" alt="">
                                            </div>
                                            <div class="title">Competitive Pricing</div>
                                        </div>
                                        <div class="content">
                                            We offer competitive pricing for our auto transport services. Our pricing is transparent, and we will work with you to find the best solution for your needs and budget.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
