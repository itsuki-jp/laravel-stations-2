<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>
</head>
<body>
    <ul>
        @foreach ($practices as $practice)
            <li>Title: {{$practice->title}}</li>
        @endforeach
    </ul>
</body>
</html>