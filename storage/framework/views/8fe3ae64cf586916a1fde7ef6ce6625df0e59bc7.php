<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Mini Project UTS</title>
        <!-- Core theme CSS (includes Bootstrap)-->
        <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
        <?php echo app('Illuminate\Foundation\Vite')('resources/css/style.css'); ?>


    </head>
    <body id="page-top">
        <!-- Navigation-->
        <?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Masthead-->
        <header class="masthead bg-secondary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="<?php echo e(Vite::asset('resources/images/gudangbarang.png')); ?>" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Faishal Zufar Zharif</h1>
                <p class="masthead-subheading font-weight-light mb-0">1204210007</p>
            </div>
        </header>

        <!-- About Section-->
        <section class="page-section  text-black mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase ">Master Barang UTS</h2>
                <h5 class="page-section-heading text-center text-uppercase "></h5>

        <?php echo app('Illuminate\Foundation\Vite')('resources/js/script.js'); ?>

    </body>
</html>
<?php /**PATH C:\Users\User\Downloads\mini-project\masterBarangUts - Copy\resources\views/home.blade.php ENDPATH**/ ?>