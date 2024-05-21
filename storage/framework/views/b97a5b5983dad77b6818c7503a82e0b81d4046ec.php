 
<!-- START FORM -->
<?php $__env->startSection('konten'); ?>


<form action="<?php echo e(url('edit-prestasi/'.$data_prestasi->id)); ?>" method='post' enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <a href="<?php echo e(url('list-Cms')); ?>" class="btn-btn-secondary"><< kembali</a>

            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">judul_halaman</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='judul_prestasi' id="judul_halaman" value="<?php echo e($data_prestasi->judul); ?>">
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">deskripsi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='desk'>
                </div>
                <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
            </div>
        </div>
    </form>
        <!-- AKHIR FORM -->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.backend_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\latihan\resources\views/Prestasi/edit.blade.php ENDPATH**/ ?>