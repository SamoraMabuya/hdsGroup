<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>HDSGroup client message</h1>
<p>Name : {{$name}}</p>
<p>Email : {{$email}}</p>
<p>Cellphone : {{$cellphone}}</p>
<p>Work Number : {{$work}}</p>
<p>Home Number : {{$home}}</p>
<p>Message :  {\n !! nl2br(e($msg)) !!}</p>
    
</body>
</html>