@extends('layouts.frontend')

@section('head_and_title')
<meta name="description" content="Escalier Portfolio">
<meta name="author" content="PT. Generasi Muda Gigih">
<meta name="keywords" content="Escalier, Property, Office, Residence, Apartment, House">

<title>ESCALIER - PORTFOLIO</title>
@endsection

@section('content')

<div class="row no-gutters">
    <div class="col-12">
        <div class="w-100 header-img" style="background-image: url('{{ asset('images/escalier/portfolio/header-portofolio.jpg') }}');
                            background-repeat: no-repeat;
                            background-position: center;
                            background-size: cover;">
        </div>
    </div>
</div>


<section class="bg-0 p-t-0 p-b-10 pt-5">
    <div class="container">
        <!-- Title section -->
        <div class="row">
            <div class="p-b-50 col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <!-- Tab02 -->
                <div class="p-t-20 text-center">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs mb-5" role="tablist">
                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link active text-dark custom-font-avenir-light" data-toggle="tab" href="#office" role="tab">Office
                                Spaces</a>
                        </li>

                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link text-dark custom-font-avenir-light" data-toggle="tab" href="#visualdisplay" role="tab"
                                id="tabFloor">Visual Display Units</a>
                        </li>

                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link text-dark custom-font-avenir-light" data-toggle="tab" href="#residential" role="tab"
                                id="tabUnit">Residential Spaces</a>
                        </li>

                        <li class="nav-item col-md-3 col-12 p-0 tab-nav">
                            <a class="nav-link text-dark custom-font-avenir-light" data-toggle="tab" href="#commercial" role="tab">Commercial
                                Spaces</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section>
        <div class="tab-content pb-5">
            <div class="tab-pane fade show active" id="office" role="tabpanel">
                <div class="container">
                    <div class="row pb-5">
                        @foreach($officePortofolios as $portofolio)
                            <div class="col-md-4 col-12">
                                @php
                                    $mainImage = $portofolio->portofolio_images->where('is_main_image', 1)->first()
                                @endphp
                                <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                   data-toggle="portofolio_{{ $portofolio->id }}" data-gallery="portofolio_gallery_{{ $portofolio->id }}">
                                    <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                         class="img-fluid rounded">
                                </a>
                                @if($portofolio->portofolio_images->count() > 1)
                                    @foreach($portofolio->portofolio_images as $image)
                                        @if($image->is_main_image === 0)
                                            <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                               data-toggle="lightbox1" data-gallery="gallery1">
                                                <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                                     class="img-fluid rounded">
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="text-left spaces-portfolio-responsive">
                                    <span class="custom-font-avenir-black">{{ $portofolio->name }}</span><br />
                                    <span class="custom-font-avenir-light">{{ $portofolio->location }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show pb-5" id="visualdisplay" role="tabpanel">
                <div class="container">
                    <div class="row pb-5">
                        @foreach($visualPortofolios as $portofolio)
                            <div class="col-md-4 col-12">
                                @php
                                    $mainImage = $portofolio->portofolio_images->where('is_main_image', 1)->first()
                                @endphp
                                <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                   data-toggle="portofolio_{{ $portofolio->id }}" data-gallery="portofolio_gallery_{{ $portofolio->id }}">
                                    <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                         class="img-fluid rounded">
                                </a>
                                @if($portofolio->portofolio_images->count() > 1)
                                    @foreach($portofolio->portofolio_images as $image)
                                        @if($image->is_main_image === 0)
                                            <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                               data-toggle="lightbox1" data-gallery="gallery1">
                                                <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                                     class="img-fluid rounded">
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="text-left spaces-portfolio-responsive">
                                    <span class="custom-font-avenir-black">{{ $portofolio->name }}</span><br />
                                    <span class="custom-font-avenir-light">{{ $portofolio->location }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="residential" role="tabpanel">
                <div class="container">
                    <div class="row pb-5">
                        @foreach($residentialPortofolios as $portofolio)
                            <div class="col-md-4 col-12">
                                @php
                                    $mainImage = $portofolio->portofolio_images->where('is_main_image', 1)->first()
                                @endphp
                                <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                   data-toggle="portofolio_{{ $portofolio->id }}" data-gallery="portofolio_gallery_{{ $portofolio->id }}">
                                    <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                         class="img-fluid rounded">
                                </a>
                                @if($portofolio->portofolio_images->count() > 1)
                                    @foreach($portofolio->portofolio_images as $image)
                                        @if($image->is_main_image === 0)
                                            <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                               data-toggle="lightbox1" data-gallery="gallery1">
                                                <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                                     class="img-fluid rounded">
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="text-left spaces-portfolio-responsive">
                                    <span class="custom-font-avenir-black">{{ $portofolio->name }}</span><br />
                                    <span class="custom-font-avenir-light">{{ $portofolio->location }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="commercial" role="tabpanel">
                <div class="container">
                    <div class="row pb-5">
                        @foreach($commercialPortofolios as $portofolio)
                            <div class="col-md-4 col-12">
                                @php
                                    $mainImage = $portofolio->portofolio_images->where('is_main_image', 1)->first()
                                @endphp
                                <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                   data-toggle="portofolio_{{ $portofolio->id }}" data-gallery="portofolio_gallery_{{ $portofolio->id }}">
                                    <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                         class="img-fluid rounded">
                                </a>
                                @if($portofolio->portofolio_images->count() > 1)
                                    @foreach($portofolio->portofolio_images as $image)
                                        @if($image->is_main_image === 0)
                                            <a href="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                               data-toggle="lightbox1" data-gallery="gallery1">
                                                <img src="{{ asset('storage/portofolios/'. $mainImage->path) }}"
                                                     class="img-fluid rounded">
                                            </a>
                                        @endif
                                    @endforeach
                                @endif
                                <div class="text-left spaces-portfolio-responsive">
                                    <span class="custom-font-avenir-black">{{ $portofolio->name }}</span><br />
                                    <span class="custom-font-avenir-light">{{ $portofolio->location }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
</section>

@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" type="text/css" media="screen" />


<style type="text/css">
    .spaces-portfolio-responsive {
        padding-left: 0px;
        padding-right: 0px;
        padding-bottom: 20px;
    }

    .slick-prev:before {

        color: black;

    }

    .slick-next:before {

        color: black;

    }

    .carousel-control-prev-icon {
        z-index: 99999;
    }

    .carousel-control-prev {
        filter: invert(100%);
    }

    .carousel-control-next {
        filter: invert(100%);
    }

    .tab-content>.tab-pane,

    .pill-content>.pill-pane {

        display: block;
        /* undo display:none          */

        height: 0;
        /* height:0 is also invisible */

        overflow-y: hidden;
        /* no-overflow                */

    }

    .tab-content>.active,

    .pill-content>.active {

        height: auto;
        /* let the content decide it  */

        overflow-y: visible;

    }

    /* bootstrap hack end */
    @media (max-width: 576px) {
        .header-top-img {
            min-height: 150px;
        }

        .spaces-portfolio-responsive {
            padding-left: 0px !important;
            padding-right: 0px !important;
            padding-bottom: 20px !important;
            margin-top: -20px !important;
        }

        .header-img {
            min-height: 350px;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
        }

        .left-menu {
            border-bottom: 1px solid #333;
        }

        .middle-menu {
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-bottom: 1px solid #333;
        }
    }

    @media (min-width: 768px) {
        .left-menu {}

        .middle-menu {
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-bottom: 1px solid #333;
        }

        .left-menu {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        .middle-menu {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-left: 1px solid #333;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }
    }

    @media (max-width: 992px) {}

    @media (min-width: 1024px) {
        .header-top-img {
            min-height: 350px;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
        }

        .header-img {
            min-height: 350px;
            background-size: 100%;
            background-repeat: no-repeat;
            height: 100%;
        }

        .left-menu {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        .middle-menu {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .right-menu {
            border-left: 1px solid #333;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .tab-left {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
            border-right: 1px solid #333;
        }

        .tab-right {
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .four-box {
            height: 100px;
            text-align: center;
            vertical-align: middle;
            line-height: 90px;
        }

        .tab-nav {
            border: 1px solid #333;
        }
    }

    @media (min-width: 1200px) {
        .left-menu {
            border-left: 1px solid #333;
            border-right: 1px solid #333;
            border-top: 1px solid #333;
        }

        .right-menu {
            border-right: 1px solid #333;
            border-top: 1px solid #333;
            border-bottom: 1px solid #333;
        }

        .four-box {
            text-align: center;
            vertical-align: middle;
            line-height: 90px;
        }

        .header-img {
            min-height: 500px;
        }
    }
</style>
@endsection

@section('scripts')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>

<script>
    $(document).on("click", '[data-toggle="lightbox1"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });
</script>
@endsection
