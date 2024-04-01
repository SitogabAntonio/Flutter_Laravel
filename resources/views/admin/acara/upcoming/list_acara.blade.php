@extends('layouts.app')

@section('styles')
@endsection

@section('content')
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">List Upcoming Event</h4>
        <a href="{{ url('acara/upcoming/tambah_upcoming') }}" class="btn btn-primary pull-right"
            style="float: right; margin-top: -5px; margin-bottom:8px;"> Buat Baru</a>
    </div>
    <form class="row" method="GET" action="{{ url('acara/upcoming/list_acara') }}">
        <div class="col-md-1" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">ID</label>
            <input type="text" name="id" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Minggu</label>
            <input type="text" name="title" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Tanggal</label>
            <input type="date" name="start_date" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Total</label>
            <input type="text" name="total" class="form-control">
        </div>

        <div class="col-md-1"
            style="display:flex; justify-content:space-between; gap:2px; width:4%; height:4%; margin-top:2.7%;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{ url('acara/upcoming/list_acara') }}" class="btn btn-secondary">Reset</a>
        </div>
    </form>

    <!-- Vertical Form -->
    <!-- Bordered table  start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul / Keterangan</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Tanggal dan Waktu</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Detail Kegiatan</th>
                    <th scope="col">Actions</th> <!-- Kolom baru untuk actions -->
                </tr>
            </thead>
            <tbody>
                <!-- Isi tabel disini -->
                @foreach($acara as $index => $event)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $event->judul }}</td>
                    <td>{{ $event->deskripsi }}</td>
                    <td>{{ $event->tanggal_waktu }}</td>
                    <td><img src="{{ asset('images/' . $event->gambar) }}" alt="{{ $event->judul }}" style="max-width: 100px;"></td>
                    <td>{{ $event->detail_kegiatan }}</td>
                    <td>
                        <a href="{{ route('acara.upcoming.edit', ['id' => $event->id]) }}" class="btn btn-info btn-sm">Edit</a>
                        <form action="{{ route('acara.upcoming.delete', ['id' => $event->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Bordered table End -->
</div>
<!-- Simple Datatable End -->

@endsection

@section('script')
@endsection
