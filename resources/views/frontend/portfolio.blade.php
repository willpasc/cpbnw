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
                background-size: cover;">
            <div class="container">
                <div class="row txt-banner-spacing">
                    <div class="col-md-6 text-white h-100 d-flex justify-content-center flex-column">
                        <p class="custom-font-acaslon-regular mb-3 txt-header-contact">
                            Our Portfolios
                        </p>
                        <p class="custom-font-avenir-light d-none d-md-block">Something brief to describe our (recent)
                            works in<br />
                            Ben & Wyatt. We strive to deliver the best<br />
                            exceptional outcomes.</p>
                    </div>
                    <div class="col-md-6"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="p-b-50 px-md-0 px-3" style="background-color: rgb(26,30,40);">
    <div class="container text-white">
        @foreach($portofolios as $portofolio)
        <div class="row pt-3 pb-2">
            <div class="col-md-6 col-12 mb-3">
                @php( $mainImage = \App\Models\PortofolioImage::where('portofolio_id',
                $portofolio->id)->where('is_main_image', 1)->first() )
                <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}" class="img-portfolio">
            </div>
            <div class="col-md-6 col-12 padding-portfolio">
                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">
                    {{ $portofolio->name }}
                </p>
                <p class="custom-font-avenir-medium text-left txt-proud">
                    {{ $portofolio->introduction }}
                </p>
                <p class="py-4 custom-font-avenir-medium">Details&nbsp<a
                        href="{{ route('frontend.portfolio.show', ['id' => $portofolio->id]) }}">
                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}" alt="IMG"
                            style="width:25px;" class="img-fluid">
                    </a>
                </p>
            </div>
        </div>
        @endforeach

        {{--        <div class="row pt-5 pb-3">--}}
        {{--            <div class="col-md-6 col-12 mb-3">--}}
        {{--                <img src="{{ asset('images/bnw/portfolio/1-bnw-web-portfolio-triniti-thumb.jpg') }}"--}}
        {{--                    class="img-portfolio">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 col-12 padding-portfolio">--}}
        {{--                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">--}}
        {{--                    Triniti Land--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-none d-md-block">One of the leading property enterprise in--}}
        {{--                    Indonesia. We helped--}}
        {{--                    creating<br />--}}
        {{--                    the visual identity — logo, company profile, website, and more.</p>--}}
        {{--                <p class="custom-font-avenir-medium d-block d-md-none text-center">One of the leading property--}}
        {{--                    enterprise in Indonesia. We helped--}}
        {{--                    creating--}}
        {{--                    the visual identity — logo, company profile, website, and more.</p>--}}
        {{--                <p class="py-4 custom-font-avenir-medium">Details&nbsp<a--}}
        {{--                        href="{{ route('frontend.portfolio.portfolio-details-1') }}">--}}
        {{--                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}"
        alt="IMG"--}}
        {{--                            style="width:25px;" class="img-fluid">--}}
        {{--                    </a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row pb-3">--}}
        {{--            <div class="col-md-6">--}}
        {{--                <img src="{{ asset('images/bnw/portfolio/2-bnw-web-portfolio-31ss-thumb.jpg') }}"
        class="img-portfolio">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 padding-portfolio">--}}
        {{--                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">--}}
        {{--                    Thirty One Sudirman Suites--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-none d-md-block">Visual identity for a new prestegious apartment--}}
        {{--                    in Makassar, which<br />--}}
        {{--                    includes: logo, catalogue, website, collaterals, and more.--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-block d-md-none text-center">Visual identity for a new prestegious--}}
        {{--                    apartment in Makassar,--}}
        {{--                    which--}}
        {{--                    includes: logo, catalogue, website, collaterals, and more.--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium py-4">Details&nbsp<a href="#">--}}
        {{--                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}"
        alt="IMG"--}}
        {{--                            style="width:25px; top:" class="img-fluid">--}}
        {{--                    </a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row pb-3">--}}
        {{--            <div class="col-md-6 col-12">--}}
        {{--                <img src="{{ asset('images/bnw/portfolio/3-bnw-web-portfolio-10lbtriniti-thumb.jpg') }}"--}}
        {{--                    class="img-portfolio">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 padding-portfolio">--}}
        {{--                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">--}}
        {{--                    10 Langkah Besar – Triniti Land--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-none d-md-block">Triniti Land is having it’s 10th anniversary--}}
        {{--                    themed “10 Langkah--}}
        {{--                    Besar.”<br />--}}
        {{--                    Hence creating a whole campaign: logo, website, and other collaterals.--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-block d-md-none text-center">Triniti Land is having it’s 10th--}}
        {{--                    anniversary themed “10--}}
        {{--                    Langkah Besar.”--}}
        {{--                    Hence creating a whole campaign: logo, website, and other collaterals.--}}
        {{--                </p>--}}
        {{--                <p class="py-4 custom-font-avenir-medium">Details&nbsp<a href="#">--}}
        {{--                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}"
        alt="IMG"--}}
        {{--                            style="width:25px; top:" class="img-fluid">--}}
        {{--                    </a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row pb-3">--}}
        {{--            <div class="col-md-6 col-12">--}}
        {{--                <img src="{{ asset('images/bnw/portfolio/4-bnw-web-portfolio-sq1-thumb.jpg') }}"
        class="img-portfolio">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 padding-portfolio">--}}
        {{--                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">--}}
        {{--                    Square One--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-none d-md-block">The function hall within the South Quarter Dome.--}}
        {{--                    The ideal venue for<br />--}}
        {{--                    business meetings, workshops, conferences, and even weddings.--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-block d-md-none text-center">The function hall within the South--}}
        {{--                    Quarter Dome. The ideal--}}
        {{--                    venue for--}}
        {{--                    business meetings, workshops, conferences, and even weddings.--}}
        {{--                </p>--}}
        {{--                <p class="py-4 custom-font-avenir-medium">Details&nbsp<a href="#">--}}
        {{--                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}"
        alt="IMG"--}}
        {{--                            style="width:25px; top:" class="img-fluid">--}}
        {{--                    </a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row pb-3">--}}
        {{--            <div class="col-md-6 col-12">--}}
        {{--                <img src="{{ asset('images/bnw/portfolio/5-bnw-web-portfolio-marcsblvd-thumb.jpg') }}"--}}
        {{--                    class="img-portfolio">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 padding-portfolio">--}}
        {{--                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">--}}
        {{--                    Marc’s Boulevard--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-none d-md-block">Mirco-city development project in Batam —--}}
        {{--                    neighbor of Singapore,<br />--}}
        {{--                    only 20 km away.--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-block d-md-none text-center">Mirco-city development project in--}}
        {{--                    Batam — neighbor of--}}
        {{--                    Singapore,--}}
        {{--                    only 20 km away.--}}
        {{--                </p>--}}
        {{--                <p class="py-4 custom-font-avenir-medium">Details&nbsp<a href="#">--}}
        {{--                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}"
        alt="IMG"--}}
        {{--                            style="width:25px; top:" class="img-fluid">--}}
        {{--                    </a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--        <div class="row">--}}
        {{--            <div class="col-md-6 col-12">--}}
        {{--                <img src="{{ asset('images/bnw/portfolio/6-bnw-web-portfolio-lavaya-thumb.jpg') }}"--}}
        {{--                    class="img-portfolio">--}}
        {{--            </div>--}}
        {{--            <div class="col-md-6 padding-portfolio">--}}
        {{--                <p class="custom-font-acaslon-regular mb-3 txt-header-contact">--}}
        {{--                    Lavaya--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-none d-md-block">Lorem ipsum dolor, sit amet consectetur--}}
        {{--                    adipisicing elit. Ut--}}
        {{--                    asperiores<br />--}}
        {{--                    laboriosam natus sit eum accusamus.--}}
        {{--                </p>--}}
        {{--                <p class="custom-font-avenir-medium d-block d-md-none text-center">Lorem ipsum dolor, sit amet--}}
        {{--                    consectetur adipisicing elit. Ut--}}
        {{--                    asperiores--}}
        {{--                    laboriosam natus sit eum accusamus.--}}
        {{--                </p>--}}
        {{--                <p class="py-4 custom-font-avenir-medium">Details&nbsp<a href="#">--}}
        {{--                        <img src="{{ asset('images/bnw/portfolio/bnw-web-portfolio-detail-icon.png') }}"
        alt="IMG"--}}
        {{--                            style="width:25px; top:" class="img-fluid">--}}
        {{--                    </a>--}}
        {{--                </p>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        <div class="row">
            <div class="col-12 text-center">
                <div style="display: inline-block;">
                    {{ $portofolios->links() }}
                </div>
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
        font-size: 26px;
        text-align: left;
        margin-bottom: 50px;
    }

    .txt-banner-spacing {
        padding-top: 15%;
    }

    .img-portfolio {
        /* width: 600px; */
        width: 100%;
    }

    /* PAGINATION LINK OVERRIDE */
    .page-item.active .page-link {
        border: 2px solid #fff !important;
        background-color: rgb(26, 30, 40) !important;
        border-radius: 20px;
        margin-right: 2px;
        margin-left: 2px;
    }

    .page-link {
        font-size: 18px;
        color: #fff;
        border: none !important;
        background-color: rgb(26, 30, 40) !important;
        margin-right: 2px;
        margin-left: 2px;
        padding: 0.25rem 0.75rem;
        line-height: 1.5;
    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {
        .img-about {
            max-width: 550px;
        }

        .img-bnw {
            width: 100px;
        }

        .txt-banner-spacing {
            padding-top: 10%;
        }

        .img-portfolio {
            /* width: 600px; */
            width: 100%;
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