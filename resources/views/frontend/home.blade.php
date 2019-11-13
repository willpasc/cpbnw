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
        <div class=" w-100 header-img" style="">
            <div class="container">
                <div class="row txt-banner-spacing">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class="custom-font-avenir-black mb-md-3 mb-2 txt-header-main">
                            HELLO THERE
                        </p>
                        <p class="custom-font-avenir-medium  d-block d-md-none"
                            style="font-size:13px;padding-left:20px;">
                            Lorem ipsum dolor sit, amet consectetur<br /> adipisicing
                            elit. A aspernatur est consectetur <br />labore
                            ad minus eum et! Asperiores?
                        </p>
                        <p class="custom-font-avenir-light custom-line-height d-none d-md-block">A bit of small talk,
                            something really
                            general to bridge<br />
                            an introduction to Ben & Wyatt. Needs just around<br />
                            this much of texts.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="spacing-home-1" style="background-color: rgb(26,30,40);">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12 text-white pt-4 pb-4 beproud">
                <p class="t1-b-1 custom-font-acaslon-regular mb-3 txt-header-contact">Be Proud.
                </p>
                <p class="pb-3 custom-font-avenir-medium custom-line-height txt-proud">
                    A brief description on how Ben & Wyatt
                    can help you and your business venture
                    grow. About BNW can help you become
                    a proud founder of your own business.
                </p>
                <p class="custom-font-avenir-medium custom-line-height txt-proud">
                    Something around to fill this area, needs
                    about 2 paragraphs like this. Here’s some
                    of our recent works.
                </p>
            </div>
            <div class="col-md-9 col-12">
                <div class="scrolling-wrapper-flexbox">
                    <div class="card-box">
                        <a href="../portfolio/detail/1">
                            <img src="{{ asset('images/bnw/home/thumbnail_portfolio_1.jpg') }}" />
                        </a>
                    </div>
                    <div class="card-box">
                        <a href="../portfolio/detail/2">
                            <img src="{{ asset('images/bnw/home/thumbnail_portfolio_2.jpg') }}" />
                        </a>
                    </div>
                    <div class="card-box">
                        <a href="../portfolio/detail/3">
                            <img src="{{ asset('images/bnw/home/thumbnail_portfolio_3.jpg') }}" />
                        </a>
                    </div>
                    <div class="card-box">
                        <a href="../portfolio/detail/4">
                            <img src="{{ asset('images/bnw/home/thumbnail_portfolio_4.jpg') }}" />
                        </a>
                    </div>
                    <div class="card-box">
                        <div style="height: 340px; width: 150px;">
                            <div class="text-white h-100 d-flex justify-content-center flex-column">
                                <div class="w-100 text-center">
                                    <a class="text-white txt-proud" href="{{ route('frontend.portfolio') }}"><span>View
                                            More</span>
                                        <br />
                                        <br>
                                        <img src="{{ asset('images/bnw/home/thumbnail_portfolio_viewmore.png') }}"
                                            style="width: 50px;"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="section_service" class="pt-5 ourservices" style="background-color: #121213">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 text-white text-left">
                <p class="t1-b-1 custom-font-acaslon-regular mb-2 txt-header-contact">Our Services
                </p>
                <p class="custom-font-avenir-medium txt-proud">As a creative house, we can help you as:</p>
            </div>
        </div>
        <div class="row text-white mb-3 text-left ">
            <div class="col-md-4 col-12 pb-5">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/bnw/services/bnw-web-services-design.jpg') }}"
                            class="img-services mb-3">
                        <p class="t1-m-4 custom-font-acaslon-regular mb-2 txt-header-contact">Designers</p>
                        <p class="custom-font-avenir-medium d-none d-md-block">We help our clients communicate their
                            ideas,<br />
                            project a great impression of their brand.<br />
                            Make them look good and recognizable.</p>
                        <p class="custom-font-avenir-medium d-block d-md-none txt-proud">
                            We help our clients communicate their ideas,
                            project a great impression of their brand.
                            Make them look good and recognizable.
                        </p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1 dropdown-services">
                        <img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}"
                            class="float-left dropdown-height-1" id="drop1">
                    </div>
                    <div class="col-md-11 col-11">
                        <div class="text-left" style="position: relative; z-index: 999999;">
                            <a href="#detailsdesigners" data-toggle="collapse" data-parent="accordion" id="designers">
                                <p class=" mb-2 mt-2 details-margs custom-font-avenir-medium text-white">Details
                                    &nbsp;
                                </p>
                            </a>
                            <div id="detailsdesigners" class="collapse"
                                style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="px-3 py-3">
                                        <ul class="text-dark">
                                            <li class="pb-3 custom-font-ubuntu-regular">
                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <p class="custom-line-height text-white custom-font-avenir-medium"
                                                            style="">
                                                            Company Logo<br />
                                                            Brand Guideline<br />
                                                            Corporate Stationery<br />
                                                            Marketing Collaterals<br />
                                                            Company Profile Design<br />
                                                            Online Marketing Tools<br />
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 pb-5">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/bnw/services/bnw-web-services-vstrategist.jpg') }}"
                            class="img-services mb-3">
                        <p class="t1-m-4 custom-font-acaslon-regular mb-2 txt-header-contact">Visual Strategist</p>
                        <p class="custom-font-avenir-medium">We help our clients discover unique way to project<br />
                            their strengths and ensuring relevance of all tools.<br />
                            Make them stand out and consistent.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1 dropdown-services">
                        <a href="#detailsvisual">
                            <img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}"
                                class="float-left dropdown-height-1" id="drop2">
                        </a>
                    </div>
                    <div class="col-md-11 col-11">
                        <div class="text-left" style="position: relative; z-index: 999999;">
                            <a href="#detailsvisual" data-toggle="collapse" data-parent="accordion">
                                <p class=" mb-2 mt-2 details-margs custom-font-avenir-medium text-white">Details
                                    &nbsp;
                                </p>
                            </a>
                            <div id="detailsvisual" class="collapse"
                                style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="px-3 py-3">
                                        <ul class="text-dark">
                                            <li class="pb-3 custom-font-ubuntu-regular">
                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <p class="custom-line-height text-white custom-font-avenir-medium"
                                                            style="">
                                                            Project Naming<br />
                                                            Video Storyline<br />
                                                            Brand Personality<br />
                                                            Website Development<br />
                                                            Social Media Management<br />
                                                            Paid Internet Advertising<br />
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 pb-5">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset('images/bnw/services/bnw-web-services-copywriters.jpg') }}"
                            class="img-services mb-3">
                        <p class="t1-m-4 custom-font-acaslon-regular mb-2 txt-header-contact">Copywriters</p>
                        <p class="custom-font-avenir-medium d-none d-md-block">We help our clients pass on their key
                            messages,<br />
                            summon
                            positive feelings. Make them sound professional and
                            promising.</p>
                        <p class="custom-font-avenir-medium d-block d-md-none txt-proud">We help our clients pass on
                            their key
                            messages,
                            summon
                            positive feelings. Make them sound professional and
                            promising.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-1 dropdown-services">
                        <img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}"
                            class="float-left dropdown-height-1" id="drop3">
                    </div>
                    <div class="col-md-11 col-11">
                        <div class="text-left" style="position: relative; z-index: 999999;">
                            <a href="#detailcopywriters" data-toggle="collapse" data-parent="accordion">
                                <p class=" mb-2 mt-2 details-margs custom-font-avenir-medium text-white">Details
                                    &nbsp;
                                </p>
                            </a>
                            <div id="detailcopywriters" class="collapse"
                                style="background-color: rgba(0,0,0,0);z-index:9999999 !important;">
                                <div class="panel-body" style="z-index:9999999 !important;">
                                    <div class="px-3 py-3">
                                        <ul class="text-dark">
                                            <li class="pb-3 custom-font-ubuntu-regular">
                                                <div class="row">
                                                    <div class="col-md-12 col-12">
                                                        <p class="custom-line-height text-white custom-font-avenir-medium"
                                                            style="">
                                                            Company & Product Story<br />
                                                            Vision & Mission Statement<br />
                                                            Core Values<br />
                                                            Product Description<br />
                                                            Company Profile<br />
                                                            Marketing Content<br />
                                                        </p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
{{-- <section class="py-5 d-block d-md-none" style="background-color: #121213">
    <div class="container">
        <div class="row pb-5">
            <div class="col-12 text-white text-center">
                <p class="t1-b-1 custom-font-playfair-displayregular mb-2 txt-header-contact">Our Services
                </p>
                <p>As a creative house, we can help you as:</p>
            </div>
        </div>
        <div class="row text-white mb-3">
            <div class="col-md-4 col-12 text-center">
                <img src="{{ asset('images/bnw/services/bnw-web-services-design.jpg') }}" class="img-services mb-3">
<p class="t1-m-4 custom-font-playfair-displayregular mb-2 txt-header-contact">Designers</p>
<p>We help our clients communicate their ideas,<br /></p>
<p>project a great impression of their brand.<br /></p>
<p>Make them look good and recognizable.</p>
</div>
<div class="col-md-4 col-12">
    <img src="{{ asset('images/bnw/services/bnw-web-services-vstrategist.jpg') }}" class="img-services mb-3">
    <p class="t1-m-4 custom-font-playfair-displayregular mb-2 txt-header-contact">Visual Strategist</p>
    <p>We help our clients discover unique way to project<br /></p>
    <p>their strengths and ensuring relevance of all tools.<br /></p>
    <p>Make them stand out and consistent.</p>
</div>
<div class="col-md-4 col-12">
    <img src="{{ asset('images/bnw/services/bnw-web-services-copywriters.jpg') }}" class="img-services mb-3">
    <p class="t1-m-4 custom-font-playfair-displayregular mb-2 txt-header-contact">Copywriters</p>
    <p>We help our clients pass on their key messages,<br /></p>
    <p>summon positive feelings. Make them sound<br /> </p>
    <p>professional and promising.</p>
</div>
</div>
<div class="row">
    <div class="col-md-1"><img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}"
            style="height:110%;"><br />
    </div>
    <div class="col-md-3 text-white m-l--45">
        <p class="mb-3 mt-2">Details</p>
        <p class="custom-line-height">Company Logo<br />
            Brand Guideline<br />
            Corporate Stationery<br />
            Marketing Collaterals<br />
            Company Profile Design<br />
            Online Marketing Tools<br />
        </p>
    </div>
    <div class="col-md-1"><img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}"
            style="height:110%;"><br />
    </div>
    <div class="col-md-3 text-white m-l--45">
        <p class="mb-3 mt-2">Details</p>
        <p class="custom-line-height">Company Logo<br />
            Brand Guideline<br />
            Corporate Stationery<br />
            Marketing Collaterals<br />
            Company Profile Design<br />
            Online Marketing Tools<br />
        </p>
    </div>
    <div class="col-md-1"><img src="{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}"
            style="height:110%;"><br />
    </div>
    <div class="col-md-3 text-white m-l--45">
        <p class="mb-3 mt-2">Details</p>
        <p class="custom-line-height">Company Logo<br />
            Brand Guideline<br />
            Corporate Stationery<br />
            Marketing Collaterals<br />
            Company Profile Design<br />
            Online Marketing Tools<br />
        </p>
    </div>
</div>
</div>
</section> --}}
@endsection
@section('styles')
<style>
    .txt-header-main {
        font-size: 26px;
        padding-left: 20px;
        padding-top: 465px;
    }

    .dropdown-services {
        padding-left: 80px;
    }

    .dropdown-height-1 {
        height: 25px;
        margin-left: 15px;
    }

    .dropdown-height {
        height: 260px;
    }

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

    .txt-banner-spacing {
        padding-top: 15%;
    }

    .scrolling-wrapper-flexbox {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 25px;
    }

    .card-box {
        display: flex;
        flex-wrap: nowrap;
        overflow-x: auto;
        flex: 0 0 auto;
        padding: 0 5px;
    }

    .card-box img {
        width: 230px;
        height: auto;
    }

    .img-services {
        width: 100%;
    }

    .scrolling-wrapper-flexbox::-webkit-scrollbar {
        -webkit-appearance: none;
    }

    .scrolling-wrapper-flexbox::-webkit-scrollbar:vertical {
        width: 5px;
    }

    .scrolling-wrapper-flexbox::-webkit-scrollbar:horizontal {
        height: 5px;
    }

    .scrolling-wrapper-flexbox::-webkit-scrollbar-thumb {
        border-radius: 4px;
        border: 1px solid white;
        /* should match background, can't be transparent */
        background-color: #fff;
    }

    @media (max-width: 576px) {
        .details-margs {
            margin-left: 15px;
            margin-left: 15px;
            position: relative;
            top: -8px;
        }

        .dropdown-services {
            padding-left: 0px;
        }

        .txt-header-contact {
            font-size: 26px;
            margin-bottom: 50px;
            text-align: left !important;
        }

        .header-img {
            min-height: 675px;
            background-image: url('{{ asset('images/bnw/home/bnw-mweb-landing-img_1.1.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .beproud {
            padding-left: 35px;
            padding-right: 35px;
            padding-top: 50px !important;
        }

        /* .ourservices {
            padding-left: 15px;
            padding-right: 15px;
        } */

        .txt-proud {
            font-size: 13px;
        }
    }

    @media (min-width: 768px) {

        .txt-header-main {
            font-size: 50px;
        }

        .details-margs {
            margin-left: 15px;
            margin-left: 15px;
            position: relative;
            top: -8px;
        }

        .dropdown-services {
            padding-left: 0px;
        }

        .img-services {
            width: 390px;
        }

        .img-bnw {
            width: 100px;
            padding-bottom: 30px;
        }

        .txt-banner-spacing {
            padding-top: 10%;
        }

        .spacing-home-1 {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .header-img {
            min-height: 361px;
            background-image: url('{{ asset('images/bnw/home/bnw-web-home-header.jpg') }}');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
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

<script>
    function dropdown(typeid){
        if(typeid === 1) {
        $('#drop1').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}");
        $('#drop1').css("height","265px");
        $('#drop1').css("margin-left","0px");
        $('#drop1').css("margin-top","-10px");
        }

        if(typeid === 2) {
        $('#drop2').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}");
        $('#drop2').css("height","265px");
        $('#drop2').css("margin-left","0px");
        $('#drop2').css("margin-top","-10px");
        }

        if(typeid === 3) {
        $('#drop3').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}");
        $('#drop3').css("height","265px");
        $('#drop3').css("margin-left","0px");
        $('#drop3').css("margin-top","-10px");
        }

}

$('#detailsdesigners').on('show.bs.collapse', function(event){
    $('#drop1').attr('src', "");
    $('#drop1').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}");
    $('#drop1').css("margin-left","0px");
    $('#drop1').css("margin-top","-10px");
    $('#drop1').css("height","265px");
});

$('#detailsdesigners').on('hide.bs.collapse', function(event){
    $('#drop1').attr('src', "");
    $('#drop1').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}");
    $('#drop1').css("margin-left","15px");
    $('#drop1').css("margin-top","0px");
    $('#drop1').css("height","25px");
});

$('#detailsvisual').on('show.bs.collapse', function(event){
    $('#drop2').attr('src', "");
    $('#drop2').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}");
    $('#drop2').css("margin-left","0px");
    $('#drop2').css("margin-top","-10px");
    $('#drop2').css("height","265px");
    
});

$('#detailsvisual').on('hide.bs.collapse', function(event){
    $('#drop2').attr('src', "");
    $('#drop2').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}");
    $('#drop2').css("margin-left","15px");
    $('#drop2').css("margin-top","0px");
    $('#drop2').css("height","25px");
});

$('#detailcopywriters').on('show.bs.collapse', function(event){
    $('#drop3').attr('src', "");
    $('#drop3').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-1.png') }}");
    $('#drop3').css("margin-left","0px");
    $('#drop3').css("margin-top","-10px");
    $('#drop3').css("height","265px");
});

$('#detailcopywriters').on('hide.bs.collapse', function(event){
    $('#drop3').attr('src', "");
    $('#drop3').attr('src', "{{ asset('images/bnw/services/bnw-web-services-dropdown-icon.png') }}");
    $('#drop3').css("margin-left","15px");
    $('#drop3').css("margin-top","0px");
    $('#drop3').css("height","25px");
});

</script>
@endsection