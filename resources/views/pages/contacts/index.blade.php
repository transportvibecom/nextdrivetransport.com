@extends('layouts.layout')

@section('title')Contacts @endsection

@section('description')Contacts Broadway Auto Transport @endsection

@section('content')
    <div id="page">
        <div id="contacts-page">
            <div id="callback-section">
                <div class="container-xl">
                    <div class="callback-section">
                        <div class="mobile-section-title">
                            <div class="section-title">
                                <h3>Contact us</h3>
                            </div>
                        </div>
                        <div class="row callback-section-wrap">
                            <div class="col-md-5">
                                <div class="content">
                                    <div class="section-title">
                                        <h3>Contact us</h3>
                                        <div class="contact-blocks">
                                            <div class="contact-block">
                                                <div class="ico">
                                                    <img src="{{ asset('assets/front/img/phone-ico.svg') }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="title">Our Phone</div>
                                                    <a href="tel:+19175945566">+1 917 594 55 66</a>
                                                </div>
                                            </div>
                                            <div class="contact-block">
                                                <div class="ico">
                                                    <img src="{{ asset('assets/front/img/mail-ico.svg') }}" alt="">
                                                </div>
                                                <div class="content">
                                                    <div class="title">Email</div>
                                                    <a href="mailto:sales@broadwayautotransport.com">sales@broadwayautotransport.com</a>
                                                </div>
                                            </div>
                                        </div>
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

            @include('inc.faqs')
        </div>
    </div>
@endsection
