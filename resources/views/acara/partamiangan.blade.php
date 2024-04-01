@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

    <!-- Simple Datatable start -->
<div class="card-box mb-30" style="margin-left:2%; margin-right:2%;">
    <div class="pd-20"style="margin-top:2%;">
        <h4 class="logo m-0" style="color:black;">Jadwal Partamiangan.</h4>
    </div>
    <br>
    <br>
    <form class="row" accept="get" style="margin-left: 3px; padding:20px;">
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Kegiatan</label>
            <input type="text" name="kegiatan" value="{{Request::get('kegiatan')}}" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Tanggal</label>
            <input type="date" name="tanggal_waktu" value="{{Request::get('tanggal_waktu')}}" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Petugas</label>
            <input type="text" name="petugas" value="{{Request::get('petugas')}}" class="form-control">
        </div>


        <div class="col-md-1"
            style="display:flex; justify-content:space-between; gap:2px; width:4%; height:4%; margin-top:2.7%;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{url('acara/partamiangan')}}" class="btn btn-secondary">Reset</a>
        </div>

    </form><!-- Vertical Form -->

    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Petugas</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($view as $value)
                <tr>
                    <td class="table-plus">{{$value->kegiatan}}</td>
                    <td>{{$value->tanggal_waktu}}</td>
                    <td>{{$value->tempat}}</td>
                    <td>{{$value->petugas}}</td>

                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
</div>
    <!-- Preloader -->
    <div id="overlayer"></div>
    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>


@endsection
@section('script')
@endsection

