<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&displahttp://127.0.0.1:8000/carsy=swap"
        rel="stylesheet" />
    @vite('resources/css/app.css')

    <!-- Styles -->

</head>

<body class="max-w-[1400px] m-auto antialiased">
    <div class="w-full h-screen">
        <nav class="p-8 border-b-2 border-gray-800 flex items-center justify-between">
            <a href="/">
                <h3>Car App</h3>
            </a>
            <ul class="flex items-center justify-between">
                <li>
                    <a href="/about">About us</a>
                </li>
                <li>
                    <a href="/cars">Cars</a>
                </li>
            </ul>
        </nav>

     

            @yield('content')
       

    </div>
</body>

</html>
