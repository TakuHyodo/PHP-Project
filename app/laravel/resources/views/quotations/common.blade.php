<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>サイドバー</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js','resources/css/app.css'])
</head>
<main class="container">

</main>
<body class="bg_cl_gr">

<div class="d-flex flex-column flex-shrink-0 " style="width: 300px; height: 1080px; background-color: #e2e6ea">
    <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <a  class="nav-link text-dark">
                承認管理システム
                <svg class="bi me-2" width="64" height="64">
                    <image x="0" y="0" width="64" height="64" xlink:href="{{ Vite::asset('resources/images/arrow.svg') }}"/></svg>
            </a>
        </li>
        <li>
            <a class="nav-link text-dark">
                <svg class="bi me-2" width="64" height="64"><image x="0" y="0" width="64" height="64" xlink:href="{{ Vite::asset('resources/images/directory.svg') }}"/></svg>
                申請一覧
            </a>
        </li>
        <li>
            <a class="nav-link text-dark">
                <svg class="bi me-2" width="64" height="64"><image x="0" y="0" width="64" height="64" xlink:href="{{ Vite::asset('resources/images/checkBox.svg') }}"/></svg>
                承認リクエスト
            </a>
        </li>
        <li>
            <a class="nav-link text-dark">
                <svg class="bi me-2" width="64" height="64"><image x="0" y="0" width="64" height="64" xlink:href="{{ Vite::asset('resources/images/graph.svg') }}"/></svg>
                レポート
            </a>
        </li>
        <li>
            <a class="nav-link text-dark">
                <svg class="bi me-2" width="64" height="64"><image x="0" y="0" width="64" height="64" xlink:href="{{ Vite::asset('resources/images/account.svg') }}"/></svg>
                アカウント
            </a>
        </li>
        <li>
            <a class="nav-link text-dark">
                <svg class="bi me-2" width="64" height="64"><image x="0" y="0" width="64" height="64" xlink:href="{{ Vite::asset('resources/images/operation.svg') }}"/></svg>
                操作ログ
            </a>
        </li>
    </ul>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-muted">©2023 AsiaQuest, Inc</p>
    </div>
</footer>

</body>
</html>
