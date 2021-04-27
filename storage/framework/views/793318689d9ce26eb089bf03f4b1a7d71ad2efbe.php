

<?php $__env->startSection('tittle', 'Admin'); ?>

<?php $__env->startSection('breadcrumb'); ?>
<ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
    <li class="breadcrumb-item active">Admin</li>
</ol>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>
<div class="card card-primary card-outline">
    <div class="card-body">
        <h5 class="card-title">Selamat Datang Di Halaman Admin</h5>

        <p class="card-text">

        </p>
    </div>


</div><!-- /.card -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-laravel\resources\views/admin.blade.php ENDPATH**/ ?>