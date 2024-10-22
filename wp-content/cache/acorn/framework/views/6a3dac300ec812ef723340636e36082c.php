<?php $__env->startSection('content'); ?>

<section id="about" class="about">
  <div class="container">
    <div class="section-title">
      <h2><?php echo e($profile['title']); ?></h2>
      <p class="text-justify">
        Hi i am, <strong><?php echo e($profile['fields']['person_name']); ?></strong> <?php echo e($profile['fields']['profile_detail']); ?>

      </p>
    </div>

    <div class="row">
      <div class="col-lg-4" data-aos="fade-right">
        <img src="<?php echo e($profile['fields']['person_image']); ?>" class="img-fluid rounded-3" alt>
      </div>
      <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
        <h3><strong>Position: </strong><?php echo e($profile['fields']['position']); ?></h3>
        <p class="fst-italic">
          Basic information:
        </p>
        <div class="row">
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong>
                <span>+<?php echo e($profile['fields']['phone']); ?></span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                <span><?php echo e($profile['fields']['city']); ?></span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>Country:</strong>
                <span><?php echo e($profile['fields']['country']); ?></span>
              </li>
            </ul>
          </div>
          <div class="col-lg-6">
            <ul>
              <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong>
                <span><?php echo e($profile['fields']['degree']); ?></span>
              </li>
              <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                <span><?php echo e($profile['fields']['email']); ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- ======= Facts Section ======= -->
    <section id="facts" class="facts">
      <div class>

        <div class="section-title">
          <p class="text-justify">
            <?php echo e($profile['fields']['proven_track_description']); ?>

          </p>
        </div>

        <div class="row no-gutters">
            <?php $__currentLoopData = $profile['accomplishments']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $accomplishment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch" data-aos="fade-up">
                    <div class="count-box d-flex flex-column align-items-center justify-content-center text-center">
                        <img src="<?php echo e($accomplishment['image']); ?>" class="img-fluid rounded-4 mb-3" alt="" style="max-height: 100px; object-fit: cover;">
                        <span data-purecounter-start="0" data-purecounter-end="<?php echo e($accomplishment['description']); ?>" data-purecounter-duration="1" class="purecounter"></span>
                        <p><strong><?php echo e($accomplishment['name']); ?></strong></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </div>


      </div>
    </section><!-- End Facts Section -->
  </div>
</section><!-- End About Section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/index.blade.php ENDPATH**/ ?>