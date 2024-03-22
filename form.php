<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-image: url(img/1.jpg);
            background-size: cover;
        }
        .container{
            width: 300px;
            height: 200px;
            background-color: black;
            color: white;
            align-items: center;
            padding: 80px 20px;
            margin: 100px 500px;
        }
        .container form{
            margin: 20px 0;
            justify-content: space-around;
            
        }
        .container h1{
            padding: 20px;
            align-items: center;
            margin-top: -80px;
            margin-left: 75px;
        }
        .container label{
            position: relative;
            justify-content: center;
            display: block;
            margin:10px 0;
        }
        .container input{
            background-color: transparent;
            border: 2px solid white;
            border-top: none;
            border-left: none;
            border-right: none;
            color: white;
        }
        .container input:focus{
            outline: none;
        }
        .container button{
            width: 40%;
            height: 20%;
            margin: 20px;
            cursor: pointer;
        }
        .container button:hover{
            background: darkslategrey;
            color: white;
        }
    </style>
    
</head>

<body>
    <div class="container">
        <form method="GET" action="form2.php">
            <h1>Log In</h1>
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter your Name"><br>
            <label for="age">Age</label>
            <input type="number" name="age" placeholder="Enter your Age"><br>
            <button type="submit" name="submit">Send</button>
        </form>
    </div>
    
</body>
</html>