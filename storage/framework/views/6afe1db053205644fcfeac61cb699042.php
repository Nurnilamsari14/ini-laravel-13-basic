<?php if (isset($component)) { $__componentOriginal165f8e34452936f6da18fceb86497519 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal165f8e34452936f6da18fceb86497519 = $attributes; } ?>
<?php $component = App\View\Components\App::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\App::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <a class="btn btn-primary" href="/student" role="button">Back To Student</a>
    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal165f8e34452936f6da18fceb86497519)): ?>
<?php $attributes = $__attributesOriginal165f8e34452936f6da18fceb86497519; ?>
<?php unset($__attributesOriginal165f8e34452936f6da18fceb86497519); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal165f8e34452936f6da18fceb86497519)): ?>
<?php $component = $__componentOriginal165f8e34452936f6da18fceb86497519; ?>
<?php unset($__componentOriginal165f8e34452936f6da18fceb86497519); ?>
<?php endif; ?><?php /**PATH D:\laravel\laraver-basic\resources\views/student/create.blade.php ENDPATH**/ ?>