@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

<!-- Start ayat harian -->
<section class="section posts-entry"
    style="background-color : #dce0e2; margin-bottom: 15px; border-radius:20px; margin-right:25px; margin-left:25px;">
    <div class="container">
        <div class="row mb-4">
            <h2 class="posts-entry-title" style="text-align: center;">
                <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                &nbsp; Upcoming Event &nbsp;
                <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
            </h2>
            <div class="col-sm-6">
            </div>
            <!-- <div class="col-sm-6 text-sm-end"><a href="{{url('#')}}" class="read-more">Lihat Semua</a></div> -->
        </div>
        <div class="row g-3">

            <div class="col-md-12">
                <div class="row g-3">
                @foreach ($upcoming->chunk(1) as $chunk)
                    <div class="col-lg-4 mb-4">
                        @foreach ($chunk as $value)
                        <div class="section posts-entry">
                            <a href="" class="img-link" style="border : 3px solid white;"><img style="width:25vw; height:35vh; border-radius:20px"
                            src="{{ asset('storage/images/' . $value->gambar) }}" alt="Gambar Acara" alt="Image" class="img-fluid"></a>
                            <div class="excerpt">


                                <h2><a href="#">{{$value->judul}}</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <!-- <figure class="author-figure mb-0 me-3 float-start"><img
                                                src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
                                    <span class="d-inline-block mt-1">By <a href="#">{{Auth::user()->name}}</a></span>
                                    <span>&nbsp;-&nbsp; {{$value->tanggal_waktu}}</span>
                                </div>

                                <p> <strong style="color:black;">{{$value->deskripsi}}</strong> <br>
                                {!! Illuminate\Support\Str::limit(strip_tags($value->detail_kegiatan), 100) !!}</p>
                                <p><a href="{{ url('acara/upcoming_single', ['id' => $value->id]) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>

                            </div>
                        </div>
                        @endforeach

                    </div>
                    @endforeach

                </div>

            </div>

        </div>
    </div>
</section>
<!-- End ayat haran -->

@endsection
@section('script')
@endsection
