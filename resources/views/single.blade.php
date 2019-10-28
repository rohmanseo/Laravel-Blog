<html>

<head><title>Single Page Blog</title></head>
<body>
<h1>Hello, {{$blog}}</h1>

@foreach($users as $user)
    <li>{{$user}}</li>
@endforeach

</body>
</html>