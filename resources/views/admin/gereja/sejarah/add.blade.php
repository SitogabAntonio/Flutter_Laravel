@extends('layouts.app')
@section('styles')
@endsection
@section('content')

<div class="mobile-menu-overlay"></div>

<div class="container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Formulir</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Formulir Gereja
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Sejarah
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Sejarah</h4>
                        <br>
                    </div>
                </div>
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Title</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="title" placeholder="Sejarah Gereja HKBP X-X-X" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Gambar 1 <h6>(opsional)</h6></label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="file" name="gambar_1" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Gambar 2 <h6>(opsional)</h6></label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="file" name="gambar_2" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Gambar 3 <h6>(opsional)</h6></label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="file" name="gambar_3" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label"><strong>Detail Sejarah</strong></label>
                        <textarea class="form-control tinymce-editor" name="description"
                            placeholder="Masukkan detail persembahan..."></textarea>
                    </div>
                    <hr>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- Default Basic Forms End -->
        </div>
    </div>
</div>

@endsection
@section('script')
@endsection
