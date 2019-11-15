@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW About">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords"
    content="Ben and Wyatt, Branding House, Design House, Office, Residential, Apartment, Commercial, Spaces">

<title>BNW - ABOUT US</title>
@endsection

@section('content')
<div class="row no-gutters ">
    <div class="col-12">
        <div class=" w-100 header-img" style="background-image: url('{{ asset('images/bnw/about/bnw-web-about-header.jpg') }}');
                background-repeat: no-repeat;
                background-position: center left;
                background-size: cover;">
            <div class="container">
                <div class="row txt-banner-spacing pb-md-0 pb-3 px-md-0 px-3">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class=" custom-font-acaslon-regular mb-md-3 txt-header-contact">
                            We serve as a<br />
                            creative company,
                        </p>
                        <p class="custom-font-avenir-light custom-line-height-about txt-sub-about">specializing in
                            shaping
                            client’s messages,<br />
                            brand and personality through innovative<br />
                            designs and stories.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="spacing-home-1 px-md-0 px-3" style="background-color: #121213">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 text-white">
                <p class="custom-font-acaslon-regular mb-4 txt-header-contact">About
                </p>
                <p class="custom-font-avenir-medium pb-3 text-left txt-proud ">We are designers, brand identity
                    specialists and creative
                    problem solvers.
                    We are the designer of the company’s credibility, reliability and professionalism
                    to all it’s audience, through well thought-out brand expressions and development.
                </p>
                <p class=" custom-font-avenir-medium mb-md-5 mb-2 text-left txt-proud">We specialize in providing
                    quality
                    custom branding, marketing
                    tools designs,
                    and professional scriptwriting. Whether you are building a brand new facility or
                    growing an existing development, we will help you grow and spread.
                </p>

                <div class="d-block d-md-none text-left">
                    <p class="pb-3 pt-5 txt-proud">Regards,</p>
                    <img src="{{ asset('images/bnw/about/bnw-web-logo-about.png') }}" class="img-bnw">
                </div>
                <p class=" custom-font-avenir-medium pb-3 d-none d-md-block">Regards,</p>
                <img src="{{ asset('images/bnw/about/bnw-web-logo-about.png') }}" class="img-bnw d-none d-md-block">
                <div class=" d-block d-md-none border-about pt-5"></div>
            </div>
            <div class="col-md-1 custom-border-left2 d-none d-md-block"></div>
            <div class="col-md-5 col-12 text-white pt-md-0 pt-5 d-none d-md-block">
                <p class="custom-font-acaslon-regular mb-4 txt-header-contact">Vision</p>
                <p class=" custom-font-avenir-medium pb-5 text-left">To be the first choice and a
                    trustworthy partner<br />
                    in showcasing brand’s values, strengths, and<br />
                    uniqueness through our services.
                </p>
                <p class="custom-font-acaslon-regular mb-4 txt-header-contact">Mission</p>
                <p class="custom-font-avenir-medium text-left">To build long term relationship with our
                    clients,<br />
                    providing personalized yet exclusive<br />
                    brand design and development services.<br />
                    Applying creativity, experience, integrity and<br />
                    dedication to deliver exceptional outcomes.
                </p>
            </div>
            <div class="col-md-5 col-12 text-white pt-md-0 pt-5 d-block d-md-none">
                <p class="custom-font-acaslon-regular mb-4 txt-header-contact">Vision</p>
                <p class=" custom-font-avenir-medium pb-5 text-left txt-proud">To be the first choice and a
                    trustworthy partner
                    in showcasing brand’s values, strengths, and
                    uniqueness through our services.
                </p>
                <p class="custom-font-acaslon-regular mb-4 txt-header-contact">Mission</p>
                <p class="custom-font-avenir-medium text-left txt-proud">To build long term relationship with our
                    clients,<br />
                    providing personalized yet exclusive
                    brand design and development services.
                    Applying creativity, experience, integrity and
                    dedication to deliver exceptional outcomes.
                </p>
            </div>
        </div>
</section>
<section class="spacing-home-2" style="background-color: rgb(26,30,40);">
    <div class="container">
        <div class="row pb-md-5 p-b-50 mb-3">
            <div class="col-12 text-center text-white ">
                <p class="t1-b-1 custom-font-playfair-displayregular txt-header-about">Our Core Values</p>
                <p class="custom-font-avenir-medium txt-proud d-none d-md-block">Just one senctence about the
                    foundations of our works in
                    Ben &
                    Wyatt.</p>
                <p class="custom-font-avenir-medium txt-proud d-block d-md-none">Just one senctence about the
                    foundations<br /> of our works in Ben & Wyatt.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-12 text-center text-white py-md-4 pb-5">
                <p class="mb-md-3 txt-proud">01</p>
                <p class="custom-font-acaslon-regular mb-md-3 mb-1 txt-header-about">Commited</p>
                <p class="custom-font-avenir-medium txt-proud">We are fueled by passion<br />
                    to take your brand to a new height.</p>
                <div class="border-about-1 d-block d-md-none"></div>
            </div>
            <div class="col-md-4 text-center text-white custom-border-left3  py-md-4 pb-4">
                <p class="mb-md-3 txt-proud">02</p>
                <p class="custom-font-acaslon-regular mb-md-3 mb-1 txt-header-about">Curious</p>
                <p class="custom-font-avenir-medium txt-proud">We are fascinated to explore<br />
                    and learn what is best.</p>
                <div class="border-about-1 d-block d-md-none"></div>
            </div>
            <div class="col-md-4 text-center text-white custom-border-left3 py-md-4">
                <p class="mb-md-3 txt-proud">03</p>
                <p class="custom-font-acaslon-regular mb-md-3 mb-1 txt-header-about">Creative</p>
                <p class="custom-font-avenir-medium txt-proud">We believe that a great brand<br />
                    has to be more than easy on the eyes.</p>
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
<style>
    .txt-header-about {
        font-size: 26px;
        margin-bottom: 30px;
    }

    .border-about {
        border-bottom: 1px solid #fff;
    }

    .border-about-1 {
        border-bottom: 1px solid grey;
        width: 35%;
        margin-left: 115px;
        margin-top: 35px;
    }

    .img-bnw {
        width: 65px;
    }

    .txt-subheader-contact {
        font-size: 18px;
    }

    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .txt-header-contact {
        font-size: 22px;
        text-align: left;
    }

    .txt-sub-about {
        font-size: 14px;
    }

    .txt-banner-spacing {
        padding-top: 10%;
    }

    .spacing-home-1 {
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .spacing-home-2 {
        padding-top: 50px;
    }

    .header-img {
        min-height: 200px !important;
    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .custom-line-height-about {
            line-height: 2em;
        }

        .img-about {
            max-width: 550px;
        }

        .img-bnw {
            width: 100px;
        }

        .header-img {
            min-height: 361px !important;
        }

        .txt-banner-spacing {
            padding-top: 10%;
        }

        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .txt-header-contact {
            font-size: 30px;
            text-align: left;
            margin-bottom: 50px;
        }

        .txt-sub-about {
            font-size: initial;
        }

        .txt-header-about {
            font-size: 30px;
            margin-bottom: 30px;
        }

        .spacing-home-1 {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .spacing-home-2 {
            padding-top: 100px;
            padding-bottom: 100px;
        }
    }

    @media (min-width: 992px) {}

    @media (min-width: 1200px) {
        .header-img {
            min-height: 500px;
        }
    }
</style>
@endsection

@section('scripts')
@endsection