<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('Title') </title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>

<body>
    @include('partials.navbar')

    @yield('content')

</body>

</html>