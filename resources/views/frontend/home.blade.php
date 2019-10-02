@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW Home">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords"
    content="Ben and Wyatt, Branding House, Design House, Office, Residential, Apartment, Commercial, Spaces">
<title>BNW - HOME</title>
@endsection

@section('content')

<div class="row no-gutters">
    <div class="col-12">
        <div class=" w-100 header-img" style="background-image: url('{{ asset('images/bnw/home/bnw-web-home-header.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;">
            <div class="container">
                <div class="row" style="padding-top:10%;">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                            HELLO THERE
                        </p>
                        <p>A bit of small talk, something really general to bridge</p>
                        <p>an introduction to Ben & Wyatt. Needs just around</p>
                        <p>this much of texts.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="p-tb-100" style="background-color: rgb(26,30,40);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-white">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">Be Proud.
                </p>
                <p class="pb-3">
                    A brief description on how Ben & Wyatt
                    can help you and your business venture
                    grow. About BNW can help you become
                    a proud founder of your own business.
                </p>
                <p>
                    Something around to fill this area, needs
                    about 2 paragraphs like this. Here’s some
                    of our recent works.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pb-2 pt-5" style="background-color: #121213">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 text-white">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-2 txt-header-contact">Our Services
                </p>
                <p>As a creative house, we can help you as:</p>
            </div>
        </div>
        <div class="row text-white mb-5">
            <div class="col-md-4 col-12">
                <img src="{{ asset('images/bnw/services/bnw-web-services-design.jpg') }}" class="img-services mb-3">
                <p class="t1-m-4 custom-font-playfair-displayregular mb-2 txt-header-contact">Designers</p>
                <p>We help our clients communicate their ideas,<br /></p>
                <p>project a great impression of their brand.<br /></p>
                <p>Make them look good and recognizable.</p>
            </div>
            <div class="col-md-4 col-12">
                <img src="{{ asset('images/bnw/services/bnw-web-services-vstrategist.jpg') }}"
                    class="img-services mb-3">
                <p class="t1-m-4 custom-font-playfair-displayregular mb-2 txt-header-contact">Visual Strategist</p>
                <p>We help our clients discover unique way to project<br /></p>
                <p>their strengths and ensuring relevance of all tools.<br /></p>
                <p>Make them stand out and consistent.</p>
            </div>
            <div class="col-md-4 col-12">
                <img src="{{ asset('images/bnw/services/bnw-web-services-copywriters.jpg') }}"
                    class="img-services mb-3">
                <p class="t1-m-4 custom-font-playfair-displayregular mb-2 txt-header-contact">Copywriters</p>
                <p>We help our clients pass on their key messages,<br /></p>
                <p>summon positive feelings. Make them sound<br /> </p>
                <p>professional and promising.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"><img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}"
                    style="height:25px;"><br />
                <img src="{{ asset('images/bnw/services/bnw-web-services-dropdown.png') }}" class="border-services">
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
<style>
    .txt-subheader-contact {
        font-size: 18px;
    }

    .border-services {
        height: 200px;
        padding-left: 6px;
    }

    .btn-paulmarc-more .w-25 {
        width: 75% !important;
    }

    .txt-header-contact {
        font-size: 30px;
        text-align: center;
        margin-bottom: 50px;
    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .img-services {
            width: 390px;
        }

        .img-bnw {
            width: 100px;
            padding-bottom: 30px;
        }

        .header-img {
            min-height: 361px !important;
        }

        .btn-paulmarc-more .w-25 {
            width: 25% !important;
        }

        .txt-header-contact {
            font-size: 30px;
            text-align: left;
            margin-bottom: 50px;
        }

        .txt-header-about {
            font-size: 30px;
            margin-bottom: 10px;

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