<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This a blade template.</h1>
    <h3>{{ $name }}</h3>
    <h2>{{ $catname }}</h2>

    <ul>
        @foreach ($allAnimals as $animal)
        <li>{{$animal}}</li>
        @endforeach
    </ul>
    <a href="/about">Go to the about page.</a>
</body>
</html>