<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Myschool</title>
    <!-- Include CSS and other necessary files -->
</head>

<body>
    @include('layouts.header')
    @include('layouts.navbar')
    @include('layouts.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('layouts.footer')
</body>

</html>
