<?php $__env->startSection('content'); ?>
<div class="banner-container">
    <?php if($featured_image): ?>
        <div class="banner-image mb-4">
            <img src="<?php echo e($featured_image); ?>" class="card-img-top img-fluid" alt="case studies">
            <h2 class="banner-title">Projects</h2>
        </div>
    <?php endif; ?>
</div>
<div class="container">
    

    <div class="row mt-5">
        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <a href="<?php echo e(get_permalink($project['ID'])); ?>">
                    <div class="card mb-4 ">
                        <?php if(isset($project['fields']['banner_image'])): ?>
                            <img src="<?php echo e($project['fields']['banner_image']); ?>" class="card-img-top img-fluid project_image" alt="<?php echo e($project['title']); ?>">
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo e($project['title']); ?></h5>
                            
                            <?php if(!empty($project['tech_stacks'])): ?>
                                <div class="tech-stacks">
                                    
                                        <?php $__currentLoopData = $project['tech_stacks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tech_stack): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                            <span class="tech-stack"><?php echo e($tech_stack['name']); ?></span>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    
                                </div>
                            <?php endif; ?>

                            <p class="project-description"><?php echo e($project['fields']['description']); ?></p> 
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/wordpress-sage/wp-content/themes/my_portfolio/resources/views/page-projects.blade.php ENDPATH**/ ?>