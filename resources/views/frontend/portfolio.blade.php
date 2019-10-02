@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW Portfolio">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords"
    content="Ben and Wyatt, Branding House, Design House, Office, Residential, Apartment, Commercial, Spaces">

<title>BNW - PORTFOLIO</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-12">
        <div class=" w-100 header-img" style="background-image: url('{{ asset('images/bnw/portfolio/bnw-web-portfolio-header.jpg') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;">
            <div class="container">
                <div class="row" style="padding-top:10%;">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                            Our Portfolios
                        </p>
                        <p>Something brief to describe our (recent) works in</p>
                        <p>Ben & Wyatt. We strive to deliver the best</p>
                        <p>exceptional outcomes.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="p-b-100" style="background-color: rgb(26,30,40);">
    <div class="container text-white">
        <div class="row pt-5 pb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/bnw/portfolio/1-bnw-web-portfolio-triniti-thumb.jpg') }}"
                    class="img-portfolio">
            </div>
            <div class="col-md-6 padding-portfolio">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                    Triniti Land
                </p>
                <p>One of the leading property enterprise in Indonesia. We helped creating<br />
                    the visual identity — logo, company profile, website, and more.</p>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/bnw/portfolio/2-bnw-web-portfolio-31ss-thumb.jpg') }}" class="img-portfolio">
            </div>
            <div class="col-md-6 padding-portfolio">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                    Thirty One Sudirman Suites
                </p>
                <p>Visual identity for a new prestegious apartment in Makassar, which<br />
                    includes: logo, catalogue, website, collaterals, and more.
                </p>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/bnw/portfolio/3-bnw-web-portfolio-10lbtriniti-thumb.jpg') }}"
                    class="img-portfolio">
            </div>
            <div class="col-md-6 padding-portfolio">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                    10 Langkah Besar – Triniti Land
                </p>
                <p>Triniti Land is having it’s 10th anniversary themed “10 Langkah Besar.”<br />
                    Hence creating a whole campaign: logo, website, and other collaterals.
                </p>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/bnw/portfolio/4-bnw-web-portfolio-sq1-thumb.jpg') }}" class="img-portfolio">
            </div>
            <div class="col-md-6 padding-portfolio">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                    Square One
                </p>
                <p>The function hall within the South Quarter Dome. The ideal venue for<br />
                    business meetings, workshops, conferences, and even weddings.
                </p>
            </div>
        </div>
        <div class="row pb-3">
            <div class="col-md-6">
                <img src="{{ asset('images/bnw/portfolio/5-bnw-web-portfolio-marcsblvd-thumb.jpg') }}"
                    class="img-portfolio">
            </div>
            <div class="col-md-6 padding-portfolio">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                    Marc’s Boulevard
                </p>
                <p>Mirco-city development project in Batam — neighbor of Singapore,<br />
                    only 20 km away.
                </p>
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
        .img-about {
            max-width: 550px;
        }

        .img-bnw {
            width: 100px;
        }

        .img-portfolio {
            width: 600px;
        }

        .padding-portfolio {
            padding-top: 4%;
            padding-left: 50px;
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