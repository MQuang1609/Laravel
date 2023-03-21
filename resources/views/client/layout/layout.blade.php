<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    @include('client.blocks.header')
    <main>
        <div class="container">
            <div class="row">
                <div class="col-4">
                    @section('sidebar')
                        @include('client.blocks.sidebar')
                    @show
                </div>
                <div class="col-8">
                    <div>
                        @yield('content')
                    </div>
                </div>
            </div>

        </div>
    </main>
    @include('client.blocks.footer')
</body>

</html>