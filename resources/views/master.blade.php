<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Matemasie&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet" href="../css/ppp.css" />
        <title>Document</title>
    </head>
    <body>
        <nav>@include('components.navbar')</nav>
        <nav>@include('components.hero')</nav>
        <nav>@include('components.headline')</nav>
        <nav>@include('components.project-card')</nav>
        <nav>@include('components.services')</nav>
        <nav>@include('components.testimonials')</nav>
        <nav>@include('components.clients')</nav>
        <nav>@include('components.faq')</nav>
        <nav>@include('components.contact')</nav>
        <nav>@include('components.footer')</nav>
    </body>
</html>
