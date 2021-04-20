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
        Email from {{$data['email']}}
    </div>
    <br>
    <div>
        {{$data['subject']}}
    </div>
    <br>
    <div>
        Hello! Yergalym
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