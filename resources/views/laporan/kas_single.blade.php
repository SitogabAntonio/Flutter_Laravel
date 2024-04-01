@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

<div class="blog-wrap">
						<div class="container pd-0">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="blog-detail card-box overflow-hidden mb-30">
										<div class="blog-img">
											<img src="vendors/images/img2.jpg" alt="" />
										</div>
										<div class="blog-caption">
                                            @foreach($detail as $value)
											<h4 class="mb-10">
												{{$value->judul}}
											</h4>
											<p>
												{!! $value->detail_kas !!}
											</p>

										</div>
                                        @endforeach
									</div>
								</div>
						</div>
					</div>


@endsection
@section('script')
@endsection
