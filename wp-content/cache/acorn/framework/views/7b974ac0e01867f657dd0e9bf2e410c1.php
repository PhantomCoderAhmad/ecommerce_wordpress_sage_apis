<!doctype html>
<html <?php (language_attributes()); ?>>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Asset Links -->
    <link href="<?php echo e(asset('assets/aos/aos.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('assets/bootstrap-icons/bootstrap-icons.css')); ?>" rel="stylesheet"> 
    <link href="<?php echo e(asset('assets/boxicons/css/boxicons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/glightbox/css/glightbox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('assets/swiper/swiper-bundle.min.css')); ?>" rel="stylesheet">

    <?php (do_action('get_header')); ?>
    <?php (wp_head()); ?>
</head>

<body <?php (body_class()); ?>>
    <?php (wp_body_open()); ?>

    <div id="app">
        <?php echo $__env->make('sections.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main id="main" class="main">
            <?php echo $__env->yieldContent('content'); ?>
        </main>

        <?php echo $__env->make('sections.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

    <?php (do_action('get_footer')); ?>
    <?php (wp_footer()); ?>

    <!-- JavaScript Files -->
    <script src="<?php echo e(asset('assets/purecounter/purecounter_vanilla.js')); ?>"></script> 
    <script src="<?php echo e(asset('assets/aos/aos.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/glightbox/js/glightbox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/isotope-layout/isotope.pkgd.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/swiper/swiper-bundle.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/typed.js/typed.umd.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/waypoints/noframework.waypoints.js')); ?>"></script>


    <!-- Template Main JS File -->
    <script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/layouts/app.blade.php ENDPATH**/ ?>