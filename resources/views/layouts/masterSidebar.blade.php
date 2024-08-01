<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'YourAppName')</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        a {
            text-decoration: none !important;
        }

        .sidebar {
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            background-color: #f8f9fa;
            padding-top: 20px;
        }

        .sidebar a {
            padding: 15px;
            text-align: left;
            display: block;
            color: #333;
        }

        .sidebar a:hover {
            background-color: #ddd;
            color: #000;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
    @yield('css')
</head>

<body>

    @include('partials.sidebar')

    <div class="content">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    @yield('scripts')
</body>

</html>
