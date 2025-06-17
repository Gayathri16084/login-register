<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <style>
    .welcome{
    color: rgb(29, 32, 32);
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    }
    button{
        color: rgb(12, 34, 34);
        padding: 10px 15px;
        cursor: pointer;
        font-size: 15px;
        border-radius: 10px;
        
    }
</style>
    
    
    

<body>
    <div class="welcome">
<h1>The page is opened </h1>
<form action="{{ route("logout") }}" method="post">
@csrf
<button type="submit">logout</button>
</form>
    </div>
</body>
</html>-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #74ebd5, #9face6);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .welcome-box {
            background-color: white;
            padding: 40px 60px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .welcome-box h1 {
            color: #333;
            margin-bottom: 10px;
        }

        .welcome-box p {
            color: #666;
        }
    </style>
</head>
<body>

    <div class="welcome-box">
        <h1>Welcome!</h1>

        <p>You are logged in successfully.</p>
        <form action="{{ route("logout") }}" method="post">
@csrf
<button type="submit">logout</button>
</form>
    </div>

</body>
</html>
