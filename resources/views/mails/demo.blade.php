<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        Email from <strong>{{$data['email']}}</strong> 
    </div>
    <br>
    <div>
        <em>{{$data['subject']}}</em>
    </div>
    <br>
    <div>
        {{$data['message']}}
    </div>
    <br>
    <div>
        Best Regards,<br>{{$data['name']}}
    </div>
</body>
</html>