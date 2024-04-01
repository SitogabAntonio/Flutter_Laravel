@extends('home_layouts.app')
@section('styles')
@endsection
@section('content')

    <!-- Start retroy layout blog posts -->
    <section class="section "
        style="background-color : #dce0e2; margin-bottom: 15px; margin-top: 15px; border-radius:20px; margin-right:25px; margin-left:25px;">
        <div class="container" >
            <div class="row mb-4">
                <h2 class="posts-entry-title" style="text-align: center;">
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                    &nbsp; Popular Post &nbsp;
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                </h2>
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6 text-sm-end"><a href="#" class="read-more">Lihat Semua</a></div>
            </div>

            <!-- <form action="#" class="search-form d-none d-lg-inline-block" >
            <input type="text" class="form-control" placeholder="Search..." >
            <span class="bi-search"></span>
        </form> -->
            <div class="row align-items-stretch retro-layout">
                <div class="col-md-4">
                    <a href="#" class="h-entry mb-30 v-height gradient" style="border : 3px solid white;">

                        <!-- <div class="featured-img" style="background-image: url('images/img_2_horizontal.jpg');"></div> -->

                        <div class="text">
                            <span class="date">$value->date</span>
                            <h2> $value->judul </h2>
                        </div>
                    </a>
                    <a href="#" class="h-entry v-height gradient" style="border : 3px solid white;">

                        <!-- <div class="featured-img" style="background-image: url('images/img_5_horizontal.jpg');"></div> -->

                        <div class="text">
                            <span class="date">$value->date</span>
                            <h2> $value->judul </h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#" class="h-entry mb-30 v-height gradient" style="border : 3px solid white;">

                        <!-- <div class="featured-img" style="background-image: url('images/img_2_horizontal.jpg');"></div> -->

                        <div class="text">
                            <span class="date">$value->date</span>
                            <h2> $value->judul </h2>
                        </div>
                    </a>
                    <a href="#" class="h-entry v-height gradient" style="border : 3px solid white;">

                        <!-- <div class="featured-img" style="background-image: url('images/img_5_horizontal.jpg');"></div> -->

                        <div class="text">
                            <span class="date">$value->date</span>
                            <h2> $value->judul </h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-4">
                    <a href="#" class="h-entry mb-30 v-height gradient" style="border : 3px solid white;">

                        <!-- <div class="featured-img" style="background-image: url('images/img_2_horizontal.jpg');"></div> -->

                        <div class="text">
                            <span class="date">$value->date</span>
                            <h2> $value->judul </h2>
                        </div>
                    </a>
                    <a href="#" class="h-entry v-height gradient" style="border : 3px solid white;">

                        <!-- <div class="featured-img" style="background-image: url('images/img_5_horizontal.jpg');"></div> -->

                        <div class="text">
                            <span class="date">$value->date</span>
                            <h2> $value->judul </h2>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- End retroy layout blog posts -->

    <!-- Start ayat harian -->
    <section class="section posts-entry"
        style="background-color : #dce0e2; margin-bottom: 15px; border-radius:20px; margin-right:25px; margin-left:25px;">
        <div class="container">
            <div class="row mb-4">
            <h2 class="posts-entry-title" style="text-align: center;">
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                    &nbsp; Ayat Harian &nbsp;
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

    <!-- Start warta jemaat-entry -->
    <section class="section posts-entry"
        style="background-color : #dce0e2; margin-bottom: 15px; border-radius:20px; margin-right:25px; margin-left:25px;">
        <div class="container">
            <div class="row mb-4">
            <h2 class="posts-entry-title" style="text-align: center;">
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                    &nbsp; Warta Jemaat &nbsp;
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


    <section class="section"
        style="background-color : #dce0e2; margin-bottom: 15px; border-radius:20px; margin-right:25px; margin-left:25px;">
        <div class="container">

            <div class="row mb-4">
            <h2 class="posts-entry-title" style="text-align: center;">
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                    &nbsp; Berita &nbsp;
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                </h2>
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">Lihat Semua</a></div>
            </div>

            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="#" class="img-link" style="border : 3px solid white;"><img
                                src="$value->getImage" alt="Image" class="img-fluid"></a>
                        <div class="excerpt">


                            <h2><a href="#">$value->judul</a></h2>

                            <p> $value->deskripsi <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="#" class="img-link" style="border : 3px solid white;"><img
                                src="$value->getImage" alt="Image" class="img-fluid"></a>
                        <div class="excerpt">


                            <h2><a href="#">$value->judul</a></h2>

                            <p> $value->deskripsi <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="post-entry-alt">
                        <a href="#" class="img-link" style="border : 3px solid white;"><img
                                src="$value->getImage" alt="Image" class="img-fluid"></a>
                        <div class="excerpt">


                            <h2><a href="#">$value->judul</a></h2>

                            <p> $value->deskripsi <br>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo sunt tempora dolor
                                laudantium sed optio, explicabo ad deleniti impedit facilis fugit recusandae! Illo,
                                aliquid, dicta beatae quia porro id est.</p>
                            <p><a href="#" class="read-more">Continue Reading</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="section"
        style="background-color : #dce0e2; margin-bottom: 15px; border-radius:20px; margin-right:25px; margin-left:25px;">
        <div class="container">

            <div class="row mb-4">
            <h2 class="posts-entry-title" style="text-align: center;">
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                    &nbsp; Postingan Terbaru &nbsp;
                    <span style="border-top: 1px solid #000; display: inline-block; width: 10%;"></span>
                </h2>
                <div class="col-sm-6">
                </div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">

                <div class="col-md-12">

                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="#" class="hentry v-height img-2 gradient" style="border : 3px solid white;">
                            <div class="featured-img" style="$value->getImage"></div>
                            <div class="text text-sm">
                                <span>$value->date</span>
                                <h2>$value->judul</h2>
                            </div>
                        </a>
                        <a href="#" class="hentry v-height img-2 gradient" style="border : 3px solid white;">
                            <div class="featured-img" style="$value->getImage"></div>
                            <div class="text text-sm">
                                <span>$value->date</span>
                                <h2>$value->judul</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>

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
