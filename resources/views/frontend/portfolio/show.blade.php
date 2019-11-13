@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="BNW Portfolio">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords"
    content="Ben and Wyatt, Branding House, Design House, Office, Residential, Apartment, Commercial, Spaces">

<title>BNW - PORTFOLIO</title>
@endsection

@section('content')
<section class="pb-4" style="background-color: rgb(26,30,40);padding-top: 100px !important;">
    <div class="container text-white">
        <div class="row pb-5">
            <div class="col-md-6 col-12">
                <p class="t1-b-1 custom-font-acaslon-regular mb-4 txt-header-contact">{{ $portofolio->name }}
                </p>
                <p class="custom-font-avenir-medium text-left">
                    {!! $portofolio->description !!}
                </p>
            </div>
            <div class="col-md-2 col-6 text-left portfolio-detail">
                <p class="custom-font-acaslon-regular txt-portfolio-details pt-4">Client</p>
                <p class="custom-font-avenir-medium">{{ $portofolio->name }}</p>
            </div>
            <div class="col-md-4 col-6 text-left portfolio-detail">
                <p class="custom-font-acaslon-regular txt-portfolio-details pt-4">Brief</p>
                <p class="custom-font-avenir-medium">{{ $portofolio->brief }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                @php( $images = \App\Models\PortofolioImage::where('portofolio_id',
                $portofolio->id)->orderBy('is_main_image')->get() )
                @foreach($images as $image)
                <img src="{{ asset('storage/portofolios/'. $image->path) }}" class="img-portfolio pb-3">
                @endforeach

                {{--                <img src="{{ asset('images/bnw/portfolio/1-bnw-web-portfolio-triniti-thumb.jpg') }}"--}}
                {{--                    class="img-portfolio pb-3">--}}
                {{--                <img src="{{ asset('images/bnw/portfolio/1-bnw-web-portfolio-triniti-thumb.jpg') }}"--}}
                {{--                    class="img-portfolio">--}}
            </div>
        </div>
    </div>
</section>
@endsection
@section('styles')
<style>
    .img-portfolio {
        width: 100%;
    }

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

    .txt-portfolio-details {
        font-size: 20px;
        font-weight: bold;

    }

    @media (min-width: 576px) {}

    @media (min-width: 768px) {

        .portfolio-detail {
            padding-left: 70px;
        }

        .img-about {
            max-width: 550px;
        }

        .img-bnw {
            width: 100px;
        }

        .img-portfolio {
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