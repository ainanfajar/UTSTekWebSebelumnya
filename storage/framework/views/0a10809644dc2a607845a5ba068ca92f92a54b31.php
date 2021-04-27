

<?php $__env->startSection('tittle', 'Detail Data Guru'); ?>

<?php $__env->startSection('content'); ?>
<!-- Profile Image -->
<div class="card card-primary card-outline col-md-6">
    <div class="card-body box-profile">
        <h3 class="profile-username">NIP : <?php echo e($guru -> nip); ?></h3>
        <h3 class="profile-username">Nama : <?php echo e($guru -> nama_guru); ?></h3>
        <h3 class="profile-username">Mata Pelajaran :<?php echo e($guru -> mapel); ?></h3>
        <br>

        <a href="/guru" class="btn btn-primary btn-block"><b>Kembali</b></a>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-laravel\resources\views/detailguru.blade.php ENDPATH**/ ?>