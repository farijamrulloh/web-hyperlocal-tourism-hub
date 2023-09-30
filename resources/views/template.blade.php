<!DOCTYPE html>
<html lang="en">

<head>
    @vite(['resources/css/app.css','resources/js/app.js'])
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <title>@yield('title_web')</title>
    <style>
        /* Custom scrollbar styles */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: #dc2626;
            border-radius: 3px;
        }

        ::-webkit-scrollbar-track {
            background-color: #f1f1f1;
            border-radius: 3px;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen">
    @include('partials.navbar')
        <!-- Your page content here -->

        @yield('content')

    <div>
        @include('partials.footer')
    </div>

</body>

</html>