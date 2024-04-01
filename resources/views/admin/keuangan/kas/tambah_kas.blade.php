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
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Forms
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Arus Kas Bulanan
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
                            <h4 class="text-blue h4">Formulir Arus Kas</h4>
                            <br>
                        </div>
                    </div>
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Judul / Keterangan</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="judul" placeholder="Laporan Persembahan" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Periode</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="periode" placeholder="Periode satu bulan" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Tangal Mulai</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control datetimepicker" name="tanggal_mulai" placeholder="Pilih tanggal" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Tangal Akhir</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control datetimepicker" name="tanggal_akhir" placeholder="Pilih tanggal" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Total</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="total" placeholder="Rp. 5.850.000" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="image_file" type="file" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label"><strong>Detail Arus Kas</strong></label>
                            <textarea class="form-control tinymce-editor" name="detail_kas"
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
