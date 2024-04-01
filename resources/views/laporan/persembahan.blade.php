@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

    <!-- Simple Datatable start -->
<div class="card-box mb-30" style="margin-left:2%; margin-right:2%;">
    <div class="pd-20"style="margin-top:2%;">
        <h4 class="logo m-0" style="color:black;">Data Persembahan Minguan.</h4>
    </div>
    <br>
    <br>
    <form class="row" accept="get" style="margin-left: 3px; padding:20px;">
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Minggu</label>
            <input type="text" name="minggu" value="{{Request::get('minggu')}}" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Tanggal</label>
            <input type="date" name="start_date" value="{{Request::get('tanggal')}}" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Total</label>
            <input type="text" name="total" value="{{Request::get('total')}}" class="form-control">
        </div>


        <div class="col-md-1"
            style="display:flex; justify-content:space-between; gap:2px; width:4%; height:4%; margin-top:2.7%;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{url('laporan/persembahan')}}" class="btn btn-secondary">Reset</a>
        </div>

    </form><!-- Vertical Form -->

    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Judul</th>
                    <th>Minggu</th>
                    <th>Tanggal</th>
                    <th>Total</th>
                    <th class="datatable-nosort">Action</th>
                </tr>
            </thead>
            <tbody>
            @foreach($getRecord as $value)
                <tr>
                    <td class="table-plus">{{ $value->judul }}</td>
                    <td>{{ $value->minggu }}</td>
                    <td>{{ $value->tanggal }}</td>
                    <td>{{ $value->total }}</td>
                    <td><a href="" class="badge badge-pill" data-bgcolor="#e7ebf5" data-color="#265ed7" style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">Detail</a></td>
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
