<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav style="border: 3px solid black; padding: 10px;">
        <ul>
            <li style="display: inline;"><a href="{{ route('home') }}">Inicio</a></li>
            <li style="display: inline;"><a href="{{ route('contact') }}">Contacto</a></li>
            <li style="display: inline;"><a href="{{ route('blog') }}">Blog</a></li>
            <li style="display: inline;"><a href="{{ route('about') }}">Nosotros</a></li>
        </ul>
    </nav>
</body>
</html>