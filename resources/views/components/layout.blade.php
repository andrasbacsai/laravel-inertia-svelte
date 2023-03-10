<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <title inertia>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/js/app-inertia.js', 'resources/css/app.css'])
    {{ $headScripts }}
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/users">Users</a></li>
            <li><a href="/about">About</a></li>
        </ul>
    </nav>
    <main>
        {{ $slot }}
    </main>
    {{ $bodyScripts }}
</body>

</html>
