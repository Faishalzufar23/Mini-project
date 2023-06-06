<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($pageTitle); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>
    <?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container bg-light d-flex align-items-center flex-column mt-5">
        <h1 class="masthead-subheading font-weight-light mt-0">BIODATA</h1>
        <hr>
        <img class="masthead-avatar mb-5" src="<?php echo e(Vite::asset('resources/images/Faishal.png')); ?>" alt="..." />
        <h3 class="masthead-heading text-uppercase mt-5">Faishal Zufar Zharif</h3>
        <hr>
        <h4 class="masthead-subheading font-weight-light mt-0">IT TELKOM SURABAYA</h4>
        <h4 class="masthead-subheading font-weight-light mt-0">Kedung Klinter VII</h4>
        <h4 class="masthead-subheading font-weight-light mt-0">Sistem Informasi</h4>
        <h4 class="masthead-subheading font-weight-light mt-0">Laki - Laki</h4>
        <h5 class="masthead-subheading font-weight-light mt-0">NIM : 1204210007</h5>
    </div>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>
<?php /**PATH C:\Users\User\Downloads\mini-project\masterBarangUts - Copy\resources\views/profile.blade.php ENDPATH**/ ?>