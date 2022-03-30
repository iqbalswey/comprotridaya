<header class="header header-light header-layout1">
    <div class="header-topbar d-none d-xl-block">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-7 col-lg-7">
            <div class="d-flex flex-wrap justify-content-between">
              <ul class="contact-list list-unstyled mb-0 d-flex flex-wrap">
                <li>
                  <i class="icon-phone"></i><span>Phone:</span>
                  <a href="tel:556554117">+62 813 2254 5154 </a>
                </li>
                <li>
                  <i class="icon-envelope"></i><span>Email:</span>
                  <a href="mailto:info@pttridaya.com">info@pttridaya.com</a>
                </li>
                <li><i class="icon-clock"></i><span>Hours: Mon-Fri: 8am – 7pm</span></li>
              </ul>
            </div>
          </div><!-- /.col-lg-7 -->
          <div class="col-sm-12 col-md-5 col-lg-5 d-flex flex-wrap justify-content-end">
            <ul class="header-topbar__links d-flex flex-wrap list-unstyled mb-0">
              <li><a href="#">New & Media</a></li>
              <li><a href="#">Contacts</a></li>
              <li><a href="#">Careers</a></li>
            </ul>
            <ul class="social-icons list-unstyled mb-0">
              <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
          </div><!-- /.col-lg-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.header-topbar -->
    <?php echo $__env->make('layouts.template.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </header><!-- /.Header --><?php /**PATH E:\tridayaproject\resources\views/layouts/template/header.blade.php ENDPATH**/ ?>