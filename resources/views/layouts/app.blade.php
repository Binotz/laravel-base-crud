<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <header>
        @include('components.navbar')
    </header>

    <main>
        <div class="container">
            @yield('main-content')
        </div>
    </main>

    <footer>
        
    </footer>
</body>
</html>
