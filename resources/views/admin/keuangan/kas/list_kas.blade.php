@extends('layouts.app')

@section('styles')
@endsection

@section('content')

<style>
    .small-text {
        font-size: 12px; /* Atur ukuran font sesuai kebutuhan */
    }
</style>
<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Data Arus Kas Bulanan</h4>
        <a href="{{ url('keuangan/kas/tambah_kas') }}" class="btn btn-primary pull-right"
            style="float: right; margin-top: -5px; margin-bottom:8px;">Buat Baru</a>
    </div>
    <form class="row" method="GET" action="{{ url('keuangan/kas/list_kas') }}">
        <div class="col-md-1" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">No</label>
            <input type="text" name="id" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Periode</label>
            <input type="text" name="periode" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Tanggal Mulai</label>
            <input type="date" name="tanggal_mulai" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Tanggal Berakhir</label>
            <input type="date" name="tanggal_akhir" class="form-control">
        </div>
        <div class="col-md-2" style="margin-bottom: 10px;">
            <label for="inputNanme4" class="form-label">Total</label>
            <input type="text" name="total" class="form-control">
        </div>

        <div class="col-md-1"
            style="display:flex; justify-content:space-between; gap:2px; width:4%; height:4%; margin-top:2.7%;">
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="{{ url('keuangan/kas/list_kas') }}" class="btn btn-secondary">Reset</a>
        </div>
    </form><!-- Vertical Form -->

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Tanggal Mulai</th>
                    <th scope="col">Tanggal Akhir</th>
                    <th scope="col">Total</th>
                    <!-- <th scope="col">Detail Arus Kas</th> -->
                    <th scope="col">Gambar</th>
                    <th scope="col">Aksi</th> <!-- Kolom untuk aksi edit dan delete -->
                </tr>
            </thead>
            <tbody>
                @foreach($arus_kas as $index => $aruskas)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $aruskas->judul }}</td>
                    <td>{{ $aruskas->periode }}</td>
                    <td>{{ $aruskas->created_at }}</td>
                    <td>{{ $aruskas->updated_at }}</td>
                    <td>{{ $aruskas->total }}</td>
                    <!-- <td > {!! \Illuminate\Support\Str::limit($aruskas->detail_kas, 25) !!}</td> -->
                    <td><img src="{{ asset($aruskas->image_file) }}" alt="Gambar Arus Kas" style="max-width: 100px;">
                    </td>
                    <td>
                        <a href="{{ route('kas.edit', $aruskas->id) }}" class="btn btn-sm btn-info">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- Simple Datatable End -->
@endsection

@section('script')
@endsection
