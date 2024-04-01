@extends('layouts.app')
@section('styles')
@endsection
@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">List Warta Jemaat</h4>
        <a href="{{url('warta/tambah_warta')}}" class="btn btn-primary pull-right"
            style="float: right; margin-top: -5px; margin-bottom:8px;"> Buat Baru</a>
    </div>
    <form class="row" accept="get">
        <div class="col-md-1" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">ID</label>
            <input type="text" name="id"  class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Tanggal Mulai</label>
            <input type="date" name="start_date"  class="form-control">
        </div>


        <div class="col-md-1"
            style="display:flex; justify-content:space-between; gap:2px; width:4%; height:4%; margin-top:2.7%;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="list_keuangan" class="btn btn-secondary">Reset</a>
        </div>

    </form><!-- Vertical Form -->
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Id</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Deskripsi</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-plus">1</td>
                    <td>Warta Jemaat</td>
                    <td>30-01-2024</td>
                    <td>Lorem ipsum dolor sit amet</td>
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
            </tbody>
        </table>
    </div>
</div>
<!-- Simple Datatable End -->

@endsection
@section('script')
@endsection
