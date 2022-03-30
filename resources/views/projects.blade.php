@extends('layouts.main')
@section('title')
Project
@endsection
@section('content')

    <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout8 bg-overlay bg-parallax text-center">
      <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 offset-xl-3">
            <h1 class="pagetitle__heading">Projects</h1>
            <nav>
              <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Projects Tridaya</li>
              </ol>
            </nav>
          </div><!-- /.col-xl-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- =========================== 
      portfolio Grid 
    ============================= -->
    <section class="portfolio-grid">
      <div class="container">
        <div class="row">
          <!-- portfolio item #1 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project1.png">
                  <img src="assets/images/portfolio/grid/project1.PNG" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">PT KAI Stasiun Wanaraja</a></h4>
                <div class="portfolio-item__cat">
                  {{-- <a href="#">Building</a><a href="#">Interior</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #2 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project2.PNG">
                  <img src="assets/images/portfolio/grid/project2.PNG" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title"><br><br/>FASAD & UVS AC BJB Syariah KCP Cikarang </a></h4>
                <div class="portfolio-item__cat">
                  {{-- <a href="#">Construction</a><a href="#">Engineering</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #3 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project3.PNG">
                  <img src="assets/images/portfolio/grid/project3.PNG" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">Interior BJB KCP MajalengkaTahun </a></h4>
                <div class="portfolio-item__cat">
                  {{-- <a href="#">Renovation</a><a href="#">Architecture</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            </div><!-- /.portfolio-item -->
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #4 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project4.png">
                  <img src="assets/images/portfolio/grid/project4.png" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">Meubel Bank BJB</a></h4>
                {{-- <div class="portfolio-item__cat">
                  <a href="#">Construstion</a><a href="#">Cuilding</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            {{-- </div><!-- /.portfolio-item --> --}}
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #5 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project5.png">
                  <img src="assets/images/portfolio/grid/project5.png" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title"><br/>Interior PT linggasari Bandung</a></h4>
                {{-- <div class="portfolio-item__cat">
                  <a href="#">Engineering</a><a href="#">Renovation</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            {{-- </div><!-- /.portfolio-item --> --}}
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #6 -->
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project6.png">
                  <img src="assets/images/portfolio/grid/project6.png" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">Toilet BJB Syariah Kantor Pusat</a></h4>
                {{-- <div class="portfolio-item__cat">
                  <a href="#">Building</a><a href="#">Modern</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            {{-- </div><!-- /.portfolio-item --> --}}
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #7 -->
          <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project7.png">
                  <img src="assets/images/portfolio/grid/project7.png" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">Alun- Alun Garut</a></h4>
                {{-- <div class="portfolio-item__cat">
                  <a href="#">construction</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            {{-- </div><!-- /.portfolio-item --> --}}
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #8 -->
          <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project8.png">
                  <img src="assets/images/portfolio/grid/project8.png" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">Ruang Rooptop Bank bjb Syariah Kantor Pusat</a>
                </h4>
                {{-- <div class="portfolio-item__cat">
                  <a href="#">Engineering</a><a href="#">Auto</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            {{-- </div><!-- /.portfolio-item --> --}}
          </div><!-- /.col-lg-4 -->
          <!-- portfolio item #9 -->
           <div class="col-sm-6 col-md-6 col-lg-4 portfolio-hidden">
            <div class="portfolio-item">
              <div class="portfolio-item__img">
                <a class="popup-gallery-item" href="assets/images/portfolio/grid/project9.png">
                  <img src="assets/images/portfolio/grid/project9.png" alt="portfolio img">
                </a>
              </div><!-- /.portfolio-img -->
              <div class="portfolio-item__content">
                <h4 class="portfolio-item__title">Showroom PT Tridaya Putra Bungsu</a></h4>
                {{-- <div class="portfolio-item__cat">
                  <a href="#">Construction</a><a href="#">Energy</a> --}}
                </div><!-- /.portfolio-cat -->
              </div><!-- /.portfolio-content -->
            {{-- </div><!-- /.portfolio-item --> --}}
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row --> 
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 text-center">
            <button type="button" class="btn btn__secondary loadMoreportfolio">Explore More</button>
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.portfolio Grid -->

@endsection