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
                    &nbsp; Ibadah Raya &nbsp;
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                </h2>
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">Lihat Semua</a></div>
            </div>
            <div class="row g-3">
                <div class="col-md-12">
                    <div class="row g-3">
                        <div class="col-lg-4 mb-4">
                            <div class="post-entry-alt">
                                <a href="#" class="img-link" style="border : 3px solid white;"><img
                                       src="$value->getImage" alt="Image" class="img-fluid"></a>
                                <div class="excerpt">


                                    <h2><a href="#">$value->judul</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <!-- <figure class="author-figure mb-0 me-3 float-start"><img
                                                src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
                                        <span class="d-inline-block mt-1">By <a href="#">$value->username</a></span>
                                        <span>&nbsp;-&nbsp; $value->date</span>
                                    </div>

                                    <p> $value->deskripsi <br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                        laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae!
                                        Illo, aliquid, dicta beatae quia porro id est.</p>
                                    <p><a href="#" class="btn btn-sm btn-outline-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="post-entry-alt">
                                <a href="#" class="img-link" style="border : 3px solid white;"><img
                                       src="$value->getImage" alt="Image" class="img-fluid"></a>
                                <div class="excerpt">


                                    <h2><a href="#">$value->judul</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <!-- <figure class="author-figure mb-0 me-3 float-start"><img
                                                src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
                                        <span class="d-inline-block mt-1">By <a href="#">$value->username</a></span>
                                        <span>&nbsp;-&nbsp; $value->date</span>
                                    </div>

                                    <p> $value->deskripsi <br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                        laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae!
                                        Illo, aliquid, dicta beatae quia porro id est.</p>
                                    <p><a href="#" class="btn btn-sm btn-outline-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <div class="post-entry-alt">
                                <a href="#" class="img-link" style="border : 3px solid white;"><img
                                       src="$value->getImage" alt="Image" class="img-fluid"></a>
                                <div class="excerpt">


                                    <h2><a href="#">$value->judul</a></h2>
                                    <div class="post-meta align-items-center text-left clearfix">
                                        <!-- <figure class="author-figure mb-0 me-3 float-start"><img
                                                src="images/person_1.jpg" alt="Image" class="img-fluid"></figure> -->
                                        <span class="d-inline-block mt-1">By <a href="#">$value->username</a></span>
                                        <span>&nbsp;-&nbsp; $value->date</span>
                                    </div>

                                    <p> $value->deskripsi <br>
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                        laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae!
                                        Illo, aliquid, dicta beatae quia porro id est.</p>
                                    <p><a href="#" class="btn btn-sm btn-outline-primary">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End ayat haran -->

    @endsection
@section('script')
@endsection

