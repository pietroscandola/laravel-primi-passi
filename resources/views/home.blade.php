<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-5">Hello {{ $name }}!</h1>
    <nav class="pt-4">
        <ul class="d-flex justify-content-center">
            <li class="mx-4 list-group-item"><a href="{{ route('link1') }}">Link 1</a></li>
            <li class="mx-4 list-group-item"><a href="{{ route('link2') }}">Link 2</a></li>
            <li class="mx-4 list-group-item"><a href="{{ route('link3') }}">Link 3</a></li>
        </ul>
    </nav>
</body>

</html>