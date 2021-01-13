<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet"
        href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
</head>

<body class="bg-gray-200 font-poppins">
    <nav
        class="bg-white p-6 mb-6 flex justify-between shadow-lg">
        <ul class="flex space-x-6">
            <li><a href="#"
                    class="hover:text-gray-500">Home</a>
            </li>
            <li><a href="#"
                    class="hover:text-gray-500">Dashboard</a>
            </li>
            <li><a href="#"
                    class="hover:text-gray-500">Post</a>
            </li>
        </ul>
        <ul class="flex space-x-6">
            <li><a href="#"
                    class="hover:text-gray-500">Hichem
                    Djabri</a></li>
            <li><a href="#"
                    class="hover:text-gray-500">Login</a>
            </li>
            <li><a href="{{ route('register') }}"
                    class="hover:text-gray-500">Register</a>
            </li>
            <li><a href="#"
                    class="hover:text-gray-500">Logout</a>
            </li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>
