<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Form</title>
    <style>
        /* Registration form */

        #header{
            text-align: center;
        }
        .main{
            margin-left: 550px;
            align-content: center;
            width: 300px;
            text-align: center;
            background-color: skyblue;
            border: 5px solid black;
            border-radius: 20px;
        }
        .content{
            text-align: center;
            flex-wrap: wrap;
            display: block;
        }
        form{
            text-align: center;
            align-content: center;
            margin: 20px 40px;
        }
        input{
            display: block;
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
        }
        button{
            width: 100px;
        }
    </style>
</head>
<body>
    <h1 id="header">Registration Form</h1>
    <div class="main">
        <div class="content">
            <form method="POST" action="{{ route('add-form') }}" enctype="multipart/form-data">
                @csrf
                <input type="text" name="name" placeholder="name">
                <input type="text" name="surname" placeholder="surname">
                <input type="text" name="email" placeholder="email">
                <input type="file" name="photos">
                <button id="button" type="submit">Add</button>
            </form>
        </div>
    </div>

    
</body>
</html>