@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW Contact Us">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Ben and Wyatt, Interior, Office, Residential, Apartment, Commercial, Spaces">

<title>BNW - SERVICES</title>
@endsection

@section('content')

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