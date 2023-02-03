<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
    @livewireStyles
</head>

<body>
    <x-navbar />
    
    <main class="min-vh-100">
        {{ $slot }}
    </main>

    <x-footer />
    @livewireScripts
    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</body>

</html>
