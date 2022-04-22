<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caio a tutti</title>
</head>
<body>

        <button>
            <a href="/">home</a>
        </button>
        <button>
            <a href="/contact">contact</a>
        </button>



    @foreach($team as $value)

        <li>
            {{ $value["name"]}}

        </li>

    @endforeach

    <h1>Ciao mondo</h1>
    
</body>
</html>