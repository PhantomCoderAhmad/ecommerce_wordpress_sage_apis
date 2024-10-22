<?php $__env->startSection('content'); ?>
<div class="banner-container">
    <?php if($project): ?>
        <div class="banner-image mb-4">
            <img src="<?php echo e($project['fields']['banner_image']); ?>" class="card-img-top img-fluid" alt="case studies">
            <h2 class="banner-title text-dark"><?php echo e($project['title']); ?></h2>
        </div>
    <?php endif; ?>
</div>

<div class="container text-center">
    <p><?php echo e($project['fields']['description']); ?></p>
    
    <?php if(!empty($project['tech_stacks'])): ?>
        <div class="row mt-5 mb-5">
            <h3 class="mb-5">Tech Stacks</h3>
            <?php $__currentLoopData = $project['tech_stacks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech_stack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="tech-stack-item text-center"> 
                        <img src="<?php echo e($tech_stack['image']); ?>" alt="<?php echo e($tech_stack['name']); ?> icon" class="tech-stack-icon img-fluid mx-auto d-block"> <!-- mx-auto d-block for centering -->
                        <p><?php echo e($tech_stack['name']); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
    <?php if(!empty($project['services_offered'])): ?>
        <div class="row mt-5 mb-5">
            <h3 class="mb-5">Services Offered</h3>
            <?php $__currentLoopData = $project['services_offered']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="tech-stack-item text-center"> 
                        <img src="<?php echo e($service['image']); ?>" alt="<?php echo e($service['name']); ?> icon" class="tech-stack-icon img-fluid mx-auto d-block"> <!-- mx-auto d-block for centering -->
                        <p><?php echo e($service['name']); ?></p>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/single-projects.blade.php ENDPATH**/ ?>