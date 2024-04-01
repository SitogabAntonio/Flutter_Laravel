@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">List Data Pendeta</h4>
        <a href="{{url('gereja/pendeta/add')}}" class="btn btn-primary pull-right"
            style="float: right; margin-top: -5px; margin-bottom:8px;"> Buat Baru</a>
    </div>
    <form class="row" accept="get">
        <div class="col-md-3" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Nama</label>
            <input type="text" name="title" class="form-control">
        </div>

        <div class="col-md-1"
            style="display:flex; justify-content:space-between; gap:2px; width:4%; height:4%; margin-top:2.7%;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="list_keuangan" class="btn btn-secondary">Reset</a>
        </div>

    </form><!-- Vertical Form -->
    <!-- Bordered table  start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Agus Setyo</td>
                    <td>Pdt. HKBP X-X-X</td>
                    <td>Pendeta yang sudah melayani di HKBP sepuluh tahun lamanya</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Lihat</a>
                                <a class="dropdown-item" href="edit_kas"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr> -->
                    <!-- <th scope="row">2</th>
                    <td>Setyo Budi</td>
                    <td>Pdt. HKBP X-X-X</td>
                    <td>Pendeta HKBP yang merangkap sebagai blablabla</td>
                    <td>
                        <div class="dropdown">
                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#"
                                role="button" data-toggle="dropdown">
                                <i class="dw dw-more"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> Lihat</a>
                                <a class="dropdown-item" href="edit_kas"><i class="dw dw-edit2"></i> Edit</a>
                                <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                            </div>
                        </div>
                    </td>
                </tr> -->
            </tbody>
        </table>


@endsection
@section('script')
@endsection
