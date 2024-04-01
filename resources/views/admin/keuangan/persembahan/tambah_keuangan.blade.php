@extends('layouts.app')
@section('styles')
@endsection
@section('content')

    <div class="mobile-menu-overlay"></div>

    <div class="secondaryx-container">
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
                                        Form
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Formulir Persembahan
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
                            <h4 class="text-blue h4">Formulir Persembahan</h4>
                            <br>
                        </div>
                    </div>
                    <form method="post" enctype ="multipart/form-data">
                    @csrf
                        <div class="form-group row" action="" >
                            <label class="col-sm-12 col-md-2 col-form-label">Judul / Keterangan</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="judul" placeholder="Laporan Persembahan"
                                    required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Minggu</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="minggu" placeholder="Minggu IIX Trinity" type="text"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Tangal
                                dan Waktu</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control datetimepicker" name="tanggal" placeholder="Pilih tanggal"
                                    type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Total</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="total" placeholder="Rp. 850.000" type="text" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="image_file" type="file" />
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label"><strong>Detail Persembahan</strong></label>
                            <textarea class="form-control tinymce-editor" name="detail_persembahan"
                                placeholder="Masukkan detail persembahan..."></textarea>
                        </div>
                        <hr>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                </div>
                <!-- Default Basic Forms End -->
@endsection
@section('script')
@endsection
