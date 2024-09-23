<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>laravel-primi-passi</title>
</head>

<body>
    <header class="border-bottom border-success">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="list-unstyled d-flex m-0 justify-content-around">
                        <li><a class="my-4 py-3 text-decoration-none" href="{{ route('homepage') }}">Home</a></li>
                        <li><a class="my-4 py-3 text-decoration-none" href="{{ route('about-us') }}">About Us</a></li>
                        <li><a class="my-4 py-3 text-decoration-none" href="{{ route('contacts') }}">Contacts</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <h1 class="text-success">Hello World!</h1>
                    </div>
                </div>
                <div class="col-12">
                    {{ $message }}
                </div>
                <div class="col-12">
                    {{ $sub_title }}
                </div>
            </div>
        </div>
    </main>
</body>

</html>