<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        background-image: url(img/1.jpg);
        background-size: cover;
        color: white;
    }
    table{
        background: black;
        margin: 80px 120px;
        padding: 0 80px;
        height: 200px;
        border: 1px solid white;
        border-radius: 5px;
        border-collapse: collapse;
    }
</style>
<body>
    <table border="1px ">
        <thead>
            <tr>
                <th>Id</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
        </thead>
        <?php
        include 'connection.php';
        $sql="SELECT * FROM users";
        $res=mysqli_query($conn,$sql);
        foreach($res as $info){

        
        ?>
        <tbody>
            <tr>
                <th><?=$info['id']?></th>
                <th><?=$info['fname']?></th>
                <th><?=$info['lname']?></th>
                <th><?=$info['email']?></th>
                <th><?=$info['password']?></th>
                <th><?=$info['gender']?></th>
                <th>
                    <button><a href="">Update</a></button>
                    <button><a href="delete.php ?id=<?php echo $info['id'] ?>">Delete</a></button>
                </th>
            </tr>
        </tbody>
        <?php
        }
        ?>
    </table>
    
</body>
</html>