<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>車カタログ</title>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body class="bg_cl_gr">

<main class="container">

</main>
<div class="sidebar bg-gray-900/30 text-dark">
    <img src="{{ Vite::asset('resources/images/arrow.svg') }}">
    <img src="{{ Vite::asset('resources/images/directory.svg') }}">
    <img src="{{ Vite::asset('resources/images/checkBox.svg') }}">
    <img src="{{ Vite::asset('resources/images/graph.svg') }}">
    <img src="{{ Vite::asset('resources/images/account.svg') }}">
    <img src="{{ Vite::asset('resources/images/operation.svg') }}">
</div>

</body>
</html>
