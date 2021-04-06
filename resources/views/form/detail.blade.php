<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        img{
            width: 300px;
        }
    </style>
</head>
<body>
    <div>
        <img src="{{asset('uploads/'.$form->filename)}} " alt="">
        <h1>Name: <em>{{ $form->name}}</em></h1>
        <h1>Surname: <em>{{ $form->surname}}</em></h1>
        <h1>Email: <em>{{ $form->email}}</em></h1>
    </div>
    
    
</body>
</html>