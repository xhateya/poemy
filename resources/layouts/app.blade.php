<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500-600&display=swap" rel="stylesheet">
    <title>{{ $title??config('app.name') }}</title>

<style>
    body{
        background: lightgray;
        font-family: 'Quicksand',sans-serif
    }
    </style>
 </head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            @yield('content')
        </div>
    </div>
    <script src="https://code.jquery.com/query-3.5.1.slim.min.js"></script>
    <script src="https://cdn.isdelivr.net/npm/popper.is@1.16.1/dist/umd/popper.min.is"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/is/bootstrap.min.js"></script>
    
</body>
</html>