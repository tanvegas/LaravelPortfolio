<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>User Page</h1>
    <h3>Name: {{$name}}</h3>
    <h5>Details: </h5>
    <ul>
        <li>{{$users['name']}}</li>
        <li>{{$users['email']}}</li>
        <li>{{$users['phone']}}</li>
    </ul>
</body>
</html>