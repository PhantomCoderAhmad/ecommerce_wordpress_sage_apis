<?php $__env->startSection('content'); ?>

  <div class="container">
    <div class="section-title">
        <h2><?php echo e($profile['title']); ?></h2>
        <p class="text-justify">
          <?php echo e($profile['fields']['profile_detail']); ?>

        </p>
      </div>

      <div class="row">
        <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/profile_image.png" class="img-fluid rounded-4" alt>
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>Full Stack Developer</h3>
          <p class="fst-italic">
            Basic information:
          </p>
          <div class="row">
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                  <span>+923124264067</span>
                </li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                  <span>Lahore</span>
                </li>
                <li><i class="bi bi-chevron-right"></i> <strong>Country:</strong>
                  <span>Pakistan</span>
                </li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                  <span>Graduate- BSSE</span>
                </li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                  <span>ahmadibrar0000@gmail.com</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/index.blade.php ENDPATH**/ ?>