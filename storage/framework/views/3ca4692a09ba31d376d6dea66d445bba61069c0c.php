<?php $__env->startSection('content'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resource/css/style'); ?>
<body>
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3"><?php echo e($pageTitle); ?></h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="<?php echo e(route('barangs.create')); ?>" class="btn" style="background-color: rgb(0, 132, 255) ">Tambah Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    <tr class="text-center">
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Barang</th>
                        <th>Deskripsi Barang</th>
                        <th>Nama Satuan Barang</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr class="text-center">
                            <td><?php echo e($barang->kode_barang); ?></td>
                            <td><?php echo e($barang->nama_barang); ?></td>
                            <td><?php echo e($barang->harga_barang); ?></td>
                            <td><?php echo e($barang->deskripsi_barang); ?></td>
                            <td><?php echo e($barang->satuan->nama_satuan); ?></td>
                            <td><?php echo $__env->make('barang.actions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\User\Downloads\mini-project\masterBarangUts\resources\views/barang/index.blade.php ENDPATH**/ ?>