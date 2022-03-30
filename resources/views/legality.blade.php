@extends('layouts.main')
@section('title')
Legalitas
@endsection
@section('content')

<img src="{{asset('assets/images/legalitas/lg1.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
<div> 
  <img src="{{asset('assets/images/legalitas/lg2.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri"> 
</div>
<div>
  <img src="{{asset('assets/images/legalitas/lg3.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
</div>
<div>
  <img src="{{asset('assets/images/legalitas/lg4.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
</div>
<div>
  <img src="{{asset('assets/images/legalitas/lg5.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
</div>
<div>
  <img src="{{asset('assets/images/legalitas/lg6.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
</div>
<div>
  <img src="{{asset('assets/images/legalitas/lg7.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
</div>
<div>
  <img src="{{asset('assets/images/legalitas/lg8.PNG')}}" class="img-responsive" style="display:block; margin:auto"; alt="Tri">
</div>
<!-- ========================
       page title 
    =========================== -->
    {{-- <section class="page-title page-title-layout6 bg-overlay bg-overlay-2 bg-parallax">
      <div class="bg-img"><img src="assets/images/page-titles/4.jpg" alt="background"></div> --}}
      {{-- <div class="container">
        <div class="row align-items-center">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            <span class="pagetitle__subheading">We Help Build On Past & Prepare For Your Future.</span>
            <h1 class="pagetitle__heading">Ready to Bring Bigger, Better, Faster & Stronger Projects Than Ever!!</h1>
            <a href="projects-standard.html" class="btn btn__white">
              <i class="icon-arrow-right"></i><span>Schedule An Appointment</span>
            </a>
          </div><!-- /.col-xl-6 -->
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6 blockquote-banner-wrapper d-flex justify-content-end">
            <div class="blockquote-banner">
              <p class="blockquote-banner__title">You are helping to lead the charge; we can help you build on your past
                successes and prepare for your great future.</p>
              <span class="blockquote-banner__author">Martin, Amarou CEO</span>
            </div><!-- /.blockquote-banner-->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title --> --}}

    <!-- ========================
        Services Layout 1
    =========================== -->
    {{-- <section class="services-layout1 pb-90">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
            <div class="heading text-center mb-40">
              <h2 class="heading__subtitle">Quality Construction Solutions For Industries!</h2>
              <h3 class="heading__title">Best A Grade Commercial & Residential Services</h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-brick"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Architecture <br> & Building</h4>
                <p class="service-item__desc">Architecture is both the process and the product of planning, and
                  constructing
                  buildings or any other structures.</p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Cognitive architecture</li>
                  <li>Computer architecture</li>
                  <li>Enterprise architecture</li>
                </ul>
                <a href="services-single-service.html" class="btn btn__secondary">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-gloves"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Construction <br> Consultants</h4>
                <p class="service-item__desc">Given the increasing complexity of many construction projects it is
                  becoming
                  more common that a consultant.</p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Cognitive architecture</li>
                  <li>Computer architecture</li>
                  <li>Enterprise architecture</li>
                </ul>
                <a href="services-single-service.html" class="btn btn__secondary">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-high-visibility"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Construction<br> Management</h4>
                <p class="service-item__desc">Professional service uses specialized, project management techniques to
                  oversee
                  the planning, design.</p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Cognitive architecture</li>
                  <li>Computer architecture</li>
                  <li>Enterprise architecture</li>
                </ul>
                <a href="services-single-service.html" class="btn btn__secondary">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-floor-plan"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Planning And <br> Scheduling</h4>
                <p class="service-item__desc">When it comes to choosing a renovator to transform the interior of your
                  home,
                  quality never be compromised.</p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Cognitive architecture</li>
                  <li>Computer architecture</li>
                  <li>Enterprise architecture</li>
                </ul>
                <a href="services-single-service.html" class="btn btn__secondary">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-pantone"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Tiling And <br> Painting</h4>
                <p class="service-item__desc">When it comes to choosing a renovator to transform the interior of your
                  home, quality never be compromised.</p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Cognitive architecture</li>
                  <li>Computer architecture</li>
                  <li>Enterprise architecture</li>
                </ul>
                <a href="services-single-service.html" class="btn btn__secondary">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="service-item">
              <div class="service-item__content">
                <div class="service-item__icon">
                  <i class="icon-concrete-mixer-1"></i>
                </div><!-- /.service-item__icon -->
                <h4 class="service-item__title">Design Build <br> Contracts</h4>
                <p class="service-item__desc">Design build is project delivery in which one entity works under a single
                  contract with the project owner to provide.</p>
                <ul class="list-items list-items-layout2 list-unstyled mb-30">
                  <li>Cognitive architecture</li>
                  <li>Computer architecture</li>
                  <li>Enterprise architecture</li>
                </ul>
                <a href="services-single-service.html" class="btn btn__secondary">
                  <i class="icon-arrow-right"></i>
                  <span>Read More</span>
                </a>
              </div>
            </div><!-- /.service-item -->
          </div><!-- /.col-lg-4 --> --}}
        {{-- </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 --> --}}

    <!-- =========================
       Banner layout 4
      =========================== -->
    {{-- <section class="banner-layout4 bg-overlay bg-parallax">
      <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading-layout3 heading-light mb-30">
              <h2 class="heading__subtitle">We Work With Global Industries!</h2>
              <h3 class="heading__title">We Help Build On Past & Prepare For Your Future.</h3>
            </div>
            <a href="services.html" class="btn btn__white btn__bordered mb-20">Our Services</a>
          </div><!-- /.col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-7">
            <div class="row fancybox-light">
              <!-- fancybox item #1 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-warning"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Control System</h4>
                    <p class="fancybox-item__desc">High security requirements and are certified .</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-44 -->
              <!-- fancybox item #2 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-laser-level"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">100% Satisfaction</h4>
                    <p class="fancybox-item__desc">Building projects impressive list of long-term clients.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #3 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-disc-grinder"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Professional Staff</h4>
                    <p class="fancybox-item__desc">Involves of unknown risks and challenging regulations.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #4 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-chainsaw"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Workmanship</h4>
                    <p class="fancybox-item__desc">Take great pride in everything that we do in our Company.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-44 -->
              <!-- fancybox item #5 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-ladder"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">High Performance</h4>
                    <p class="fancybox-item__desc">Recognized as one of World's leading Construction firms.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
              <!-- fancybox item #6 -->
              <div class="col-sm-4 col-md-4 col-lg-4">
                <div class="fancybox-item">
                  <div class="fancybox-item__icon">
                    <i class="icon-brush"></i>
                  </div><!-- /.fancybox-icon -->
                  <div class="fancybox-item__content">
                    <h4 class="fancybox-item__title">Uinque Solutions</h4>
                    <p class="fancybox-item__desc">Bring bigger, better, faster and stronger projects than ever.</p>
                  </div><!-- /.fancybox-content -->
                </div><!-- /.fancybox-item -->
              </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-7 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner layout 4 -->

    <!-- ==========================
        contact layout 2
      =========================== -->
    <section class="contact-layout2 py-0 bg-gray">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="contact-panel mt--130">
              <div class="testimonials testimonials-layout1 bg-overlay bg-overlay-theme">
                <div class="bg-img">
                  <img src="assets/images/banners/6.jpg" alt="banner">
                </div>
                <div class="slick-carousel"
                  data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "infinite": true}'>
                  <!-- Testimonial #1 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">They are the expertly trained team members who take extra step and
                      go the extra mile, to fulfill our promise to deliver dynamic solutions to our customers to fit
                      needs of a rapidly changing global environment!!
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/1.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">Martin Hope</h4>
                        <p class="testimonial-item__meta-desc">Pro Cons</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->
                  <!-- Testimonial #2 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                      determination turned it into an awesome and great project which make me happy because they help me
                      accelerate my business.
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/2.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">John Peter</h4>
                        <p class="testimonial-item__meta-desc">7oroof Inc</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->
                  <!-- Testimonial #3 -->
                  <div class="testimonial-item">
                    <div class="testimonial-item__rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-item__desc">My project was a simple & small task, but the persistence and
                      determination turned it into an awesome and great project which make me happy because they help me
                      accelerate my business.
                    </p>
                    <div class="testimonial-item__meta">
                      <div class="testimonial-item__thumb">
                        <img src="assets/images/testimonials/thumbs/3.jpg" alt="author thumb">
                      </div><!-- /.testimonial-thumb -->
                      <div>
                        <h4 class="testimonial-item__meta-title">John Peter</h4>
                        <p class="testimonial-item__meta-desc">7oroof Inc</p>
                      </div>
                    </div><!-- /.testimonial-meta -->
                  </div><!-- /. testimonial-item -->
                </div>
              </div><!-- /.testimonials-layout1 -->

              <form method="post" action="http://7oroof.com/demos/amarou/assets/php/contact.php" id="contactForm" class="contact-panel__form">
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="contact-panel__title">Request A Quote</h4>
                    <p class="contact-panel__desc mb-40">We take great pride in everything that we do, complete control
                      over products allows us to ensure our customers receive the best quality service.
                    </p>
                  </div>
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                      <select class="form-control" style="display: none;">
                        <option>select your industry</option>
                        <option>Petroleum &amp; Gas Energy</option>
                        <option>Construction &amp; Engineering</option>
                        <option>Mechanical Engineering</option>
                      </select>
                    </div>
                  </div><!-- /.col-lg-6 -->
                  <div class="col-sm-12 col-md-12 col-lg-12">
                    <div class="form-group">
                      <textarea class="form-control" placeholder="Additional Details!" id="contact-messgae"
                        name="contact-messgae" required></textarea>
                    </div>
                  </div><!-- /.col-lg-12 -->
                  <div class="col-sm-12 col-md-12 col-lg-12 d-flex flex-wrap align-items-center">
                    <button type="submit" class="btn btn__secondary mr-40">
                      <i class="icon-arrow-right"></i> <span>Submit Request</span>
                    </button>
                    <div class="form-group input-radio my-3">
                      <label class="label-radio">I accept the privacy and terms.
                        <input type="checkbox" checked="">
                        <span class="radio-indicator"></span>
                      </label>
                    </div>
                  </div><!-- /.col-lg-12 -->
                </div>
              </form>
            </div><!-- /.contact__panel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 2 -->

    <!-- =========================== 
      counters
    ============================= -->
    <section class="counters-layout2">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="heading-layout3 mb-70">
              <h2 class="heading__subtitle">Work With All The Major Industry Suppliers</h2>
              <h3 class="heading__title">Committed To Delivering High Quality Construction Projects And Innovate Design!
              </h3>
            </div><!-- /.heading -->
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
        <div class="row">
          <!-- counter item #1 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">6,154</h4>
              <p class="counter-item__desc">Projects And Residentials Completed in 2020</p>
            </div>
            <hr>
            <p>Yet those that embrace change are thriving, building bigger, better, faster, and stronger products than
              ever.</p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Download Brochures</li>
              <li>Pricing and Plans</li>
              <li>Request Quote</li>
            </ul>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #2 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">2,512</h4>
              <p class="counter-item__desc">Qualified Employees And Workers With Us</p>
            </div>
            <hr>
            <p>You are helping lead the charge; we can help you build on your past and prepare future changing faster.
            </p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Our Leadership Team</li>
              <li>Awards & Regognition</li>
              <li>Join Our Team</li>
            </ul>
          </div><!-- /.col-sm-3 -->
          <!-- counter item #3 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">1,784</h4>
              <p class="counter-item__desc">Satisfied Clients We Have Served Globally</p>
            </div>
            <hr>
            <p>Industrial Construction operator providing full range of service in the sphere of Civil Construction.</p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Clients & Investors</li>
              <li>Our Locations</li>
              <li>Contsct Us</li>
            </ul>
          </div><!-- /.col-sm-3 -->
          <div class="col-sm-6 col-md-3 col-lg-3">
            <div class="counter-item">
              <h4 class="counter">0,46</h4>
              <p class="counter-item__desc">Years Of Experience In The Construction Industry</p>
            </div>
            <hr>
            <p>Since its foundation the company has doubled its turnover year on year with our experienced staff.</p>
            <ul class="list-items list-items-layout2 list-unstyled">
              <li>Mission and Vission</li>
              <li>Company History</li>
              <li>Help & FAQs</li>
            </ul>
          </div><!-- /.col-sm-3 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.counters -->

    <!-- =====================
         Clients
      ======================== -->
    <section class="clients border-top pt-40 pb-40">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="slick-carousel"
              data-slick='{"slidesToShow": 6, "arrows": false, "dots": false, "autoplay": true,"autoplaySpeed": 2000, "infinite": true, "responsive": [ {"breakpoint": 992, "settings": {"slidesToShow": 4}}, {"breakpoint": 767, "settings": {"slidesToShow": 3}}, {"breakpoint": 480, "settings": {"slidesToShow": 2}}]}'>
              <div class="client">
                <img src="assets/images/clients/1.png" alt="client">
                <img src="assets/images/clients/1.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/2.png" alt="client">
                <img src="assets/images/clients/2.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/3.png" alt="client">
                <img src="assets/images/clients/3.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/4.png" alt="client">
                <img src="assets/images/clients/4.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/5.png" alt="client">
                <img src="assets/images/clients/5.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/6.png" alt="client">
                <img src="assets/images/clients/6.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/7.png" alt="client">
                <img src="assets/images/clients/7.png" alt="client">
              </div><!-- /.client -->
              <div class="client">
                <img src="assets/images/clients/8.png" alt="client">
                <img src="assets/images/clients/8.png" alt="client">
              </div><!-- /.client -->
            </div><!-- /.carousel -->
          </div><!-- /.col-lg-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.clients --> --}}

@endsection