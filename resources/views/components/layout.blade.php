<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env("APP_NAME") }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">
@guest
    <header class="bg-slate-800 shadow-lg">
        <nav>
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <div class="flex items-center gap-4">
                <a href="{{ route('login') }}" class="nav-link">Login</a>
                <a href="{{ route('register') }}" class="nav-link">Register</a>
            </div>
        </nav>
    </header>
@endguest

@auth
    <header class="bg-slate-800 shadow-lg">
        <nav>
            <a href="{{ route('home') }}" class="nav-link">Home</a>
            <div class="flex items-center gap-4">
                <a href="{{ route('posts.index') }}" class="nav-link">Posts</a>
                <a href="{{ route('dashboard') }}" class="nav-link">Dashboard</a>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="nav-link">Logout</button>
                </form>
            </div>
        </nav>
    </header>
@endauth

<main class="py-8 px-4 mx-auto max-w-screen-lg">
    {{ $slot }}
</main>

</body>
</html>
