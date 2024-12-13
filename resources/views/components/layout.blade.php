@php use Illuminate\Support\Facades\Vite; @endphp
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
        rel="stylesheet">
    <title>Pixel Positions</title>

    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body class="bg-gray-950 text-white font-hanken-grotesk pb-20">

<div class=" mx-4 ">
    <nav class="flex justify-between items-center py-4 border-b border-white/10">

        <div>
            <a href="/">
                <img src="{{ Vite::asset('resources/images/logo(1).svg') }}" alt="">
            </a>
        </div>
        <div class="flex gap-6 font-bold">
            <a href="">Jobs</a>
            <a href="">Careers</a>
            <a href="">Salaries</a>
            <a href="">Companies</a>
        </div>

        @auth
            <div><a href="/jobs/create">Post a Job</a></div>
        @endauth

        @guest
            <div class="flex gap-6 font-bold">
                <a href="/register">Sign Up</a>
                <a href="/login">Login</a>
            </div>
        @endguest
    </nav>
    <main class="mt-10 max-w-[986px] mx-auto">
        {{ $slot }}
    </main>
</div>

</body>
</html>
