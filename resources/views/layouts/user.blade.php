<!-- Blade view for logged in users, calls respective header blade and relevant content -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <header>
        @include('includes.header')
    </header>

    <article>
        @yield('content')
    </article>
</body>
</html>
