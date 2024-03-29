@extends('layouts.admin')

@section('content')

    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4> <i class="icon-table"></i> Ubah Data Portofolio</h4>
                </div>
            </div>
        </div>
    </header>


    <div class="content-wrapper animatedParent animateOnce">
        <div class="container">
            <section class="paper-card">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body b-b">

                                <div class="container-fluid animatedParent animateOnce my-3">
                                    <div class="animated fadeInUpShort">
                                        <!-- Input -->
                                        {{ Form::open(['route'=>['admin.portofolio.update'],'method' => 'post','id' => 'general-form', 'enctype' => 'multipart/form-data']) }}

                                        @include('partials.admin._messages')
                                        @foreach($errors->all() as $error)
                                            <ul>
                                                <li>
                                            <span class="help-block">
                                                <strong style="color: #ff3d00;"> {{ $error }} </strong>
                                            </span>
                                                </li>
                                            </ul>
                                        @endforeach
                                        <input type="hidden" name="id" value="{{$portofolio->id}}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Ubah Gambar Utama</label>
                                                        @if(!empty($mainImage))
                                                            <img src="{{ asset('storage/portofolios/'.$mainImage->path) }}" style="width: 200px;height: auto;">
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        {!! Form::file('main_image', array('id' => 'main_image', 'class' => 'file-loading', 'accept' => 'image/*,application/pdf')) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-3">
                                                        <label class="form-label">Ubah Gambar Lain</label>
                                                        <br>
                                                        @if($detailImage->count() > 0)
                                                            @foreach($detailImage as $image)
                                                                <img src="{{ asset('storage/portofolios/'.$image->path) }}" style="width: 200px;height: auto;">
                                                            @endforeach
                                                        @endif
                                                    </div>
                                                    <div class="col-md-6 mb-3">
                                                        {!! Form::file('detail_image[]', array('id' => 'detail_image', 'class' => 'file-loading', 'multiple' => 'multiple')) !!}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="name">Nama Portofolio</label>
                                                        <input type="text" id="name" name="name" class="form-control" value="{{ $portofolio->name }}" required>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="col-md-6">
                                                        <label for="introduction">Pendahuluan</label>
                                                        <input type="text" class="form-control" id="introduction"
                                                               name="introduction" value="{{ $portofolio->introduction }}">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="brief">Brief</label>
                                                        <input type="text" class="form-control" id="brief"
                                                               name="brief" value="{{ $portofolio->brief }}">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 mb-3">
                                                        <label for="description">Deskripsi</label>
                                                        <textarea class="form-control" id="description" name="description">{{ $portofolio->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <a href="{{ route('admin.portofolio.index') }}" class="btn btn-warning">Batal</a>
                                                    <button class="btn btn-success" type="submit">Simpan</button>
                                                </div>
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                    <!-- #END# Input -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection


@section('styles')
    <link href="{{ URL::asset('css/fileinput.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ URL::asset('js/fileinput.js') }}"></script>

    <script>

        // FILEINPUT
        $("#main_image")
            .fileinput({
                allowedFileExtensions: ["jpg", "jpeg", "png"],
                showUpload: false,
            });
        $("#detail_image")
            .fileinput({
                allowedFileExtensions: ["jpg", "jpeg", "png"],
                showUpload: false,
            });
    </script>
@endsection
