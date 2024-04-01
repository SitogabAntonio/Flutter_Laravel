@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

<div class="section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                <h2 class="heading text-primary">Para Pendeta</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, dicta! Pariatur corporis,
                    culpa, nobis totam nemo error id repellendus consequuntur reprehenderit, possimus temporibus
                    similique quibusdam.</p>
            </div>
        </div>

        <div class="row">
            @foreach($data_pendeta as $pendeta)
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset($pendeta->gambar) }}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">{{ $pendeta->nama_pendeta }}</h5>
                <h6 class="text-black">{{ $pendeta->jabatan }}</h6>
                <p>{{ $pendeta->deskripsi_singkat}}</p>
            </div>
            @endforeach
        </div>

    </div>
</div>

<div class="section">
    <div class="container">

        <div class="row mb-5">
            <div class="col-lg-5 mx-auto text-center" data-aos="fade-up">
                <h2 class="heading text-primary">Badan Pengurus Harian</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium quod facere natus perspiciatis?
                    Nam aliquid dolor rem quaerat nostrum mollitia eligendi incidunt, illo ab architecto.</p>
            </div>
        </div>

        <div class="row">
            @foreach($data_bph as $bph)
            <div class="col-lg-4 mb-4 text-center" data-aos="fade-up" data-aos-delay="0">
                <img src="{{ asset($bph->gambar) }}" alt="Image" class="img-fluid w-50 rounded-circle mb-3">
                <h5 class="text-black">{{ $bph->nama }}</h5>
                <h6 class="text-black">{{ $bph->jabatan }}</h6>
                <p>{!! $bph->deskripsi_singkat !!}</p>
            </div>
            @endforeach
        </div>

    </div>
</div>

@endsection
@section('script')
@endsection
