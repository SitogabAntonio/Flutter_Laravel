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
                                    Form
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Ibadah Raya
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
                        <h4 class="text-blue h4">Ibadah Raya</h4>
                        <br>
                    </div>
                </div>
                <form method="post" action="{{ route('insert_ibadah') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Judul / Keterangan</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="judul" class="form-control" type="text" placeholder="Natal" />
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="deskripsi" class="form-control" placeholder="Merayakan Natal Penuh Kasih" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal_waktu" class="col-sm-12 col-md-2 col-form-label">Tanggal dan Waktu</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="tanggal_waktu" id="tanggal_waktu" class="form-control datetimepicker" placeholder="Pilih tanggal" type="text" />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Gambar</label>
                        <div class="col-sm-12 col-md-10">
                            <input name="gambar" class="form-control" type="file" />
                        </div>
                    </div>
                    <div class="col-12">
                        <label class="form-label"><strong>Detail Kegiatan</strong></label>
                        <textarea name="detail_kegiatan" class="form-control tinymce-editor" placeholder="Masukkan detail persembahan..."></textarea>
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
