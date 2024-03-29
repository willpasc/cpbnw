@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW Contact Us">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords"
    content="Ben and Wyatt, Branding House, Design House, Office, Residential, Apartment, Commercial, Spaces">

<title>BNW - CONTACTS</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-12">
        <div class=" w-100 header-img" style="background-image: url('{{ asset('images/bnw/contacts/bnw-web-contact-header.png') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;">
            <div class="container">
                <div class="row pb-md-0 pb-3 px-md-0 px-3 padd-banner">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class=" custom-font-acaslon-regular mb-md-3 mb-2 txt-header-contact">
                            Contacts
                        </p>
                        <p class="custom-font-avenir-light custom-line-height-about txt-sub-about">Let's have a chat or
                            even a visit.<br />
                            Be a proud founder.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5 px-md-0 px-3" style="background-color: #121213">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 text-white pb-5">
                <p class="custom-font-acaslon-regular mb-5 txt-header-contact">Let's Talk
                </p>
                <p class="custom-font-avenir-medium txt-proud">Let’s have a chat, if you’re interested in what we do and
                    what
                    we’ve done.</p>
                <p class="mb-5 custom-font-avenir-medium txt-proud">For inquiries, info, requests et cetera, please
                    contact us
                    through:</p>

                <p class="custom-font-avenir-medium txt-proud"><span
                        class="font-weight-bold custom-font-avenir-medium">P</span>&nbsp;&nbsp;&nbsp;+62 822 9982 3888
                </p>
                <p class="custom-font-avenir-medium txt-proud"><span
                        class="font-weight-bold custom-font-avenir-medium">E</span>&nbsp;&nbsp;&nbsp;info@benandwyatt.com
                </p>
                <p class="mb-5 custom-font-avenir-medium"><span
                        class="font-weight-bold txt-proud">I</span>&nbsp;&nbsp;&nbsp;&nbsp;benandwyatt</p>
                <p class="custom-font-avenir-medium txt-proud">Brooklyn Alam Sutera</p>
                <p class="custom-font-avenir-medium txt-proud">Soho Tower A, 5th Floor</p>
                <p class="custom-font-avenir-medium txt-proud">A/05/C - A/05/D</p>
            </div>
            <div class="col-md-6 text-white">
                <p class="custom-font-acaslon-regular mb-md-5 mb-3 txt-header-contact">Find Us</p>
                <img src="{{ asset('images/bnw/contacts/bnw-web-contact-map.jpg') }}"
                    class="img-contact d-none d-md-block">
                <img src="{{ asset('images/bnw/contacts/bnw-mweb-contact-map_1.0.jpg') }}"
                    class="img-contact d-block d-md-none">
            </div>
        </div>
</section>
@endsection
@section('styles')
<style>
    .padd-banner {
        padding-top: 18%;
    }

    .txt-header-contact {
        font-size: 22px;
    }

    .txt-sub-about {
        font-size: 14px;
    }

    .img-contact {
        width: 100%;
    }

    .header-img {
        min-height: 200px !important;
    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .padd-banner {
            padding-top: 13%;
        }

        .img-contact {
            max-width: 550px;
        }

        .header-img {
            min-height: 361px !important;
        }

        .txt-header-contact {
            font-size: 30px;
            text-align: left;
            margin-bottom: 50px;
        }

        .txt-sub-about {
            font-size: initial;
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