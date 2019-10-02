@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW Contact Us">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Ben and Wyatt, Interior, Office, Residential, Apartment, Commercial, Spaces">

<title>BNW - CONTACTS</title>
@endsection

@section('content')
<div class="row no-gutters">
    <div class="col-12">
        <div class=" w-100 header-img" style="background-image: url('{{ asset('images/bnw/contacts/bnw-web-contact-header.png') }}');
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;">
            <div class="container">
                <div class="row" style="padding-top:10%;">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class="t1-b-1 custom-font-playfair-displayregular mb-3 txt-header-contact">
                            Contacts
                        </p>
                        <p>Let's have a chat or even a visit.</p>
                        <p>Be a proud founder.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="py-5" style="background-color: #121213">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12 text-white">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-5 txt-header-contact">Let's Talk
                </p>
                <p>Let’s have a chat, if you’re interested in what we do and what we’ve done.</p>
                <p class="mb-5">For inquiries, info, requests et cetera, please contact us through:</p>

                <p><span class="font-weight-bold">P</span>&nbsp;&nbsp;&nbsp;+62 822 9982 3888</p>
                <p><span class="font-weight-bold">E</span>&nbsp;&nbsp;&nbsp;info@benandwyatt.com</p>
                <p class="mb-5"><span class="font-weight-bold">I</span>&nbsp;&nbsp;&nbsp;&nbsp;benandwyatt</p>
                <p>Brooklyn Alam Sutera</p>
                <p>Soho Tower A, 5th Floor</p>
                <p>A/05/C - A/05/D</p>
            </div>
            <div class="col-md-6 text-white">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-5 txt-header-contact">Find Us</p>
                <img src="{{ asset('images/bnw/contacts/bnw-web-contact-map.jpg') }}" class="img-contact">
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
        .img-contact {
            max-width: 550px;
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