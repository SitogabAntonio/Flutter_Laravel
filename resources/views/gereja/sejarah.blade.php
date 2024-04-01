@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')


@foreach ($sejarah as $value)
<div class="site-cover site-cover-sm same-height overlay single-page" style="$value->getImage">
    <div class="container">
      <div class="row same-height justify-content-center">
        <div class="col-md-6">
          <div class="post-entry text-center">
            <h1 class="mb-4">{{ $value->judul }}</h1>
            <div class="post-meta align-items-center text-center">
              <!-- <figure class="author-figure mb-0 me-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
              <span class="d-inline-block mt-1">Dibuat pada</span>
              <span>&nbsp;-&nbsp; {{$value->created_at}}</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endforeach

  <div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
                                    @foreach ($sejarah as $value)
										<div class="blog-img">
											<img src="{{$value->gambar}}" alt="" />
										</div>
										<div class="blog-caption">
											<p>
                                            {{$value->deskripsi}}
											</p>
											<p>
                                            <p class="text-justify" style=" color: black;">{!! $value->detail_sejarah !!}</p>
											</p>
										</div>
                                        @endforeach
									</div>
								</div>
							</div>
						</div>
					</div>



@endsection
@section('script')
@endsection
