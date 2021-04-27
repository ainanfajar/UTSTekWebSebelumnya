

<?php $__env->startSection('tittle', 'Detail Data Siswa'); ?>

<?php $__env->startSection('content'); ?>
<!-- Profile Image -->
<div class="card card-primary card-outline col-md-6">
    <div class="card-body box-profile">
        <h3 class="profile-username">NIP : <?php echo e($siswa -> nis); ?></h3>
        <h3 class="profile-username">Nama : <?php echo e($siswa -> nama_siswa); ?></h3>
        <h3 class="profile-username">Kelas : <?php echo e($siswa -> kelas); ?></h3>
        <h3 class="profile-username">Jenis Kelamin : <?php echo e($siswa -> jk); ?></h3>
        <br>

        <a href="/siswa" class="btn btn-primary btn-block"><b>Kembali</b></a>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\si-laravel\resources\views/detailsiswa.blade.php ENDPATH**/ ?>