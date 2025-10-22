<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5W9PCN5R');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('assets/front/img/favicon.png') }}" type="image/x-icon">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keyword" content="@yield('title')">
    <meta name="robots" content="Index, follow" />
    <meta name="author" content="Broadway Auto Transport">
    <meta name="publisher" content="Broadway Auto Transport">
    <link rel="canonical" href="{{ Request::url() }}" />
    <meta name="yandex-verification" content="b156c93446399c7e" />

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet"  >
    @livewireStyles
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <script src="//code.jivosite.com/widget/xgWhGfwFnM" async></script>
</head>
<body>
<div class="wrapper">

    <header class="header">
        <div class="container-xl">
            <div class="header__body">
                <a href="/" class="header__logo">
                    <img class="lazy" width="130" height="30" src="{{ asset('assets/front/img/logo.svg') }}" data-src="{{ asset('assets/front/img/logo.svg') }}" alt="logo">
                </a>
                <div class="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu">
                    <ul class="header__list">
                        <li><a href="/" class="header__link">Home</a></li>
                        <li>
                            <a href="" class="header__link has__submenu">
                                Services
                                <div class="arrow">
                                    <i class="fa-solid fa-chevron-down"></i>
                                </div>
                            </a>
                            @if(count($services))
                            <ul class="submenu">
                                @foreach($services as $service)
                                <li><a href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a></li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        <li><a href="{{ route('about-us') }}" class="header__link">About us</a></li>
                        <li><a href="{{ route('contacts') }}" class="header__link">Contact us</a></li>
                    </ul>
                    <div class="mobile-social-links">
                        <a href="https://twitter.com/Broadwaytransp" target="_blank">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="https://www.facebook.com/broadwayautotransport" target="_blank">
                            <i class="fa-brands fa-facebook"></i>
                        </a>
                        <a href="https://www.instagram.com/broadwayautotransport/" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </nav>
                <div class="buttons">
                    <a href="tel:19175945566" class="site-btn transparent-btn">+1 917 594 55 66</a>
                    <a href="{{ route('quote') }}" class="site-btn site-color-btn">Get a Quote</a>
                </div>

            </div>
        </div>
    </header>

    @yield('content')

    <div id="footer">
        <div id="top-footer">
            <div class="container-xl">
                <div class="top-footer">
                    <div class="content">
                        <h2>Ready to Ship Your Vehicle?</h2>
                    </div>
                    <div class="buttons">
                        <a href="tel:19175945566" class="site-btn transparent-btn">+1 917 594 55 66</a>
                        <a href="{{ route('quote') }}" class="site-btn site-color-btn">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div id="middle-footer">
            <div class="container-xl">
                <div class="middle-footer">
                    <div class="row middle-footer-wrap">
                        <div class="col-md-3 col-6 footer-block-wrap">
                            <ul class="footer-main-links">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about-us') }}">About us</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
{{--                                <li><a href="top-destinations.html">Top Destinations</a></li>--}}
                                <li><a href="{{ route('contacts') }}">Contact us</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-6 footer-block-wrap">
                            <div class="footer-block">
                                <div class="title">Services</div>
                                <ul>
                                    @foreach($services as $service)
                                        <li><a href="{{ route('service.show', ['slug' => $service->slug]) }}">{{ $service->title }}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 footer-block-wrap">
                            <div class="footer-block" itemprop="address" itemscope itemtype="https://schema.org/PostalAddress">
                                <div class="title">Office Location</div>
                                <div class="content">
                                    <span itemprop="streetAddress">1 MAIDEN LANE, 5TH FLOOR</span> <span itemprop="addressRegion">NEW YORK</span> <span itemprop="postalCode">10038</span> <span itemprop="addressLocality">NY</span> United States <meta itemprop="addressCountry" content="US" />
                                </div>
                            </div>
                            <div class="footer-block">
                                <div class="title">Working hours</div>
                                <div class="content">
                                    Mon – Sat: 09am-7pm
                                </div>
                            </div>
                            <div class="footer-block">
                                <div class="title">Phone</div>
                                <div class="content"><a itemprop="telephone" href="tel:+19175945566">+1 917 594 55 66</a></div>
                            </div>
                            <div class="footer-block">
                                <div class="title">Email</div>
                                <div class="content"><a itemprop="email" href="mailto:sales@broadwayautotransport.com">sales@broadwayautotransport.com</a></div>
                            </div>
                            <div class="footer-block">
                                <div class="content"><b>USDOT:</b> 3990000</div>
                                <div class="content"><b>MC:</b> 1496533</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-6 footer-block-wrap">
                            <div class="footer-block">
                                <div class="title">Press</div>
                                <ul>
                                    <li><a href="https://www.trustpilot.com/review/broadwayautotransport.com" target="_blank">Trust Pilot</a></li>
                                    <li><a href="https://verifiedmovers.com/long-distance-moving-companies/company/broadway-auto-transport/" target="_blank">Verified Movers</a></li>
                                    <li><a href="https://www.mymovingreviews.com/movers/broadway-auto-transport-llc-34316#about-company" target="_blank">My Moving</a></li>
                                    <li><a href="https://www.transportreviews.com/Company/Broadway-Auto-Transport/" target="_blank">Transport Review</a></li>
                                    <li><a href="https://www.bbb.org/us/ny/new-york/profile/auto-transportation/broadway-auto-transport-llc-0121-87168873" target="_blank">BBB</a></li>
                                </ul>
                            </div>
                            <div class="social-links">
                                <a href="https://twitter.com/Broadwaytransp" target="_blank">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                                <a href="https://www.facebook.com/broadwayautotransport" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/broadwayautotransport/" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-contacts">
                        <p><a itemprop="telephone" href="tel:+19175945566">+1 917 594 55 66</a></p>
                        <p><a itemprop="email" href="mailto:sales@broadwayautotransport.com">sales@broadwayautotransport.com</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div id="bottom-footer">
            <div class="container-xl">
                <div class="bottom-footer">
                    <div class="row bottom-footer-wrap">
                        <div class="col-md-3">
                            <div class="footer-logo">
                                <img src="{{ asset('assets/front/img/footer-logo.svg') }}" alt="">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li><a href="{{ route('privacy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('terms') }}">Term and Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="content">
                                © 2016-2024 – Broadway Auto Transport Inc. All Rights Reserved
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="modal fade" id="finishModal" tabindex="-1" aria-labelledby="finishModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="28" viewBox="0 0 36 28" fill="none">
                        <path d="M3 15.7821L11.8583 25L33 3" stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
                <p id="result_form"></p>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('assets/front/js/jquery-3.2.1.min.js') }}"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
<script defer type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', ()=>{

        //Select all images to be lazy-loaded
        const imgTargets = document.querySelectorAll('.lazy');
        let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let lazyImage = entry.target;
                    lazyImage.src = lazyImage.dataset.src;
                    lazyImage.classList.remove("lazy");
                    lazyImageObserver.unobserve(lazyImage);
                }
            });
        });
        /** Now observe all the non-loaded images using the observer we have setup above **/
        imgTargets.forEach(function(lazyImage) {
            lazyImageObserver.observe(lazyImage);
        });
    })
</script>

<script defer src="{{ asset('assets/front/js/script.js') }}"></script>

@livewireScripts

<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
        var step = document.getElementsByClassName("quote-step");
        x[n].style.display = "block";
        // новое
        if(step.length > 0){
            step[n].style.display = "block";
        }
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            // document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            // document.getElementById("nextBtn").prop("type", "submit");
        } else {
            document.getElementById("nextBtn").innerHTML = "Next step";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        var step = document.getElementsByClassName("quote-step");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";

        // новое
        if(step.length > 0){
            step[currentTab].style.display = "none";
        }
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            // document.getElementById("regForm").submit();
            document.getElementById("nextBtn").setAttribute("type", "submit");
            // document.getElementById("nextBtn").click();
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // y = x[currentTab].querySelectorAll("input:not([type=hidden])");
        radio = x[currentTab].querySelectorAll('input[name="inlineRadioOptions"]');
        typeCar = x[currentTab].querySelectorAll('select[name="typeCar"]');
        emailInput = x[currentTab].querySelector('input[name="email"]');

        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
            }
        }

        var radioSelected = false;
        for (i = 0; i < y.length; i++) {
            if (y[i].checked) {
                radioSelected = true;
                break;
            }
        }

        if (!radioSelected) {
            valid = false;
            $('.radio-error').css('display', 'block');
            // You can add a specific error message or styling here
        }

        if(typeCar.length > 0){
            var selectedOption = typeCar[0].value;
            console.log(selectedOption);
            if (selectedOption === 'Choose') {
                valid = false;
                $('.vehicle-type-error').css('display', 'block');
                // You can add a specific error message or styling here
            }else{
                valid = true;
            }
        }

        if(emailInput){
            var email = emailInput.value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (!emailPattern.test(email)) {
                valid = false;
                $('.email-error').css('display', 'block'); // Показать сообщение об ошибке
                // Можно добавить дополнительные действия, например, добавить класс для стилизации
            }else{
                valid = true;
            }
        }

        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
</script>

</body>
</html>
