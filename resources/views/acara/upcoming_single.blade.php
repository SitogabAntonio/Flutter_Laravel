@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

@if($single)
<div class="site-cover site-cover-sm same-height overlay single-page" style="{{ $single->getImage }}">
    <div class="container">
        <div class="row same-height justify-content-center">
            <div class="col-md-6">
                <div class="post-entry text-center">
                    <h1 class="mb-4">{{ $single->deskripsi }}</h1>
                    <div class="post-meta align-items-center text-center">
                        <!-- <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
                        <span class="d-inline-block mt-1">Dibuat pada</span>
                        <span>&nbsp;-&nbsp; {{ $single->created_at }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-wrap">
    <div class="container pd-0">
        <div class="row">
            <div class="col-md-8 col-sm-12">
                <div class="blog-detail card-box overflow-hidden mb-30">
                    <div class="blog-img">
                        <img src="{{ $single->gambar }}" alt="" />
                    </div>
                    <div class="blog-caption" style="font-size: 18pt; color:#42415c">
                        <p>{!! $single->detail_kegiatan !!}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="card-box mb-30">
                    <h5 class="pd-20 h5 mb-0">Latest Post</h5>
                    <div class="latest-post">
                        <ul>
                            <li>
                                <h4>
                                    <a href="#">Ut enim ad minim veniam, quis nostrud exercitation ullamco</a>
                                </h4>
                                <span>HTML</span>
                            </li>
                            <!-- Add more list items as needed -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@else
    <p>Data not found.</p>
@endif

@endsection

@section('script')
@endsection
