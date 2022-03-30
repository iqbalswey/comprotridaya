
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from 7oroof.com/demos/amarou/?storefront=envato-elements by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Mar 2022 05:58:35 GMT -->
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Amarou - Construction And Building Template">
  <link href="<?php echo e(asset('assets/images/favicon/favicon.png')); ?>" rel="icon">
  <title>Tridaya | <?php echo $__env->yieldContent('title'); ?></title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Rubik:400,500,600,700%7cRoboto:400,500,700&amp;display=swap">
  <link rel="stylesheet" href="<?php echo e(asset('assets/all.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/libraries.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>

<body>
  <div class="wrapper">
    <div class="preloader">
      <div class="spinner"><span class="cube1"></span><span class="cube2"></span></div>
    </div><!-- /.preloader -->

    <!-- =========================
        Header
    =========================== -->
    <?php echo $__env->make('layouts.template.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <!-- ========================
      Footer
    ========================== -->
    <?php echo $__env->make('layouts.template.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

    <div class="search-popup">
      <i class="search-popup__close">&times;</i>
      <form class="search-popup__form">
        <input type="text" class="search-popup__form__input" placeholder="Type Words Then Enter">
        <button class="search-popup__btn"><i class="fas fa-search"></i></button>
      </form>
    </div><!-- /. search-popup -->

  </div><!-- /.wrapper -->

  <script src="<?php echo e(asset('assets/js/jquery-3.5.1.min.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>
  <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>


</body>


</html><?php /**PATH E:\tridayaproject\resources\views/layouts/main.blade.php ENDPATH**/ ?>