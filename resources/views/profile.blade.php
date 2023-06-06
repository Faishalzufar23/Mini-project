<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    @vite('resources/sass/app.scss')
</head>

<body>
    @include('layouts.app')
    <div class="container bg-light d-flex align-items-center flex-column mt-5">
        <h1 class="masthead-subheading font-weight-light mt-0">BIODATA</h1>
        <hr>
        <img class="masthead-avatar mb-5" src="{{ Vite::asset('resources/images/Faishal.png') }}" alt="..." />
        <h3 class="masthead-heading text-uppercase mt-5">Faishal Zufar Zharif</h3>
        <hr>
        <h4 class="masthead-subheading font-weight-light mt-0">IT TELKOM SURABAYA</h4>
        <h4 class="masthead-subheading font-weight-light mt-0">Kedung Klinter VII</h4>
        <h4 class="masthead-subheading font-weight-light mt-0">Sistem Informasi</h4>
        <h4 class="masthead-subheading font-weight-light mt-0">Laki - Laki</h4>
        <h5 class="masthead-subheading font-weight-light mt-0">NIM : 1204210007</h5>
    </div>

    @vite('resources/js/app.js')
</body>

</html>
