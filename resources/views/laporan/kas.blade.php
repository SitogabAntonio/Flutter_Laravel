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
                &nbsp; Laporan Arus Kas Bulanan &nbsp;
                <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
            </h2>
            <div class="col-sm-6">
            </div>
            <!-- <div class="col-sm-6 text-sm-end"><a href="{{url('#')}}" class="read-more">Lihat Semua</a></div> -->
        </div>
        <div class="row g-3">

            <div class="col-md-12">
                <div class="row g-3">
                @foreach ($data->chunk(1) as $chunk)
                    <div class="col-lg-4 mb-4">
                        @foreach ($chunk as $value)
                        <div class="section posts-entry">
                            <a href="" class="img-link" style="border : 3px solid white;"><img style="width:25vw; height:35vh; border-radius:20px"
                            src="{{ asset($value->image_file) }}" alt="Image" class="img-fluid"></a>
                            <div class="excerpt">


                                <h2><a href="#">{{$value->judul}}</a></h2>
                                <div class="post-meta align-items-center text-left clearfix">
                                    <span>&nbsp;Periode - &nbsp; {{$value->periode}}</span>
                                </div>
                                <p><a href="{{ url('laporan/kas_single', ['id' => $value->id]) }}" class="btn btn-sm btn-outline-primary">Read More</a></p>

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
