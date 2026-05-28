<!doctype html>
<html lang="fr" class="antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title','Admin — La Lumière Divine')</title>
    <link href="/public/css/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&family=Noto+Serif:wght@500;600;700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body class="font-body-md text-on-surface bg-surface-bright min-h-screen">

@include('components.sidebar')

<div class="ml-64">
    @include('components.topbar')
    <main class="p-margin-desktop">
        @yield('content')
    </main>
    @include('components.toast')
</div>

</body>
</html>
