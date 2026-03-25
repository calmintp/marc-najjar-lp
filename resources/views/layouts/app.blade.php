<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#0a0a0a">
    <title>@yield('title', 'Marc Najjar')</title>
    <meta name="description" content="@yield('description', 'Transform your mindset, transform your life. Business strategist, life coach, and bestselling author Marc Najjar empowers you to ignite your inner fire.')">

    {{-- Favicons --}}
   {{-- Favicons --}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('icon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('icon-16x16.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-icon.png') }}">

    {{-- Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background font-sans text-foreground antialiased">
    @yield('content')
</body>
</html>
