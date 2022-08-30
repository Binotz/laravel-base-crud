<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Comics</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        @include('components.navbar')
    </header>

    <main>
        @yield('main-content')
    </main>

    <footer>
        Footer
    </footer>
</body>
</html>
