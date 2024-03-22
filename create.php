<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-image: url(img/1.jpg);
        background-size: cover;
        color: white;
    }
    fieldset{
        width:200px;
        height: 480px;
        margin: 0px 200px;
        padding: 0 100px;
        background-color: black;
    }
    form{
        margin: 30px;
    }
    label{
        font-size: 20px;
        text-transform: capitalize;
        color: darkgoldenrod;
    }
    input{
        font-size: 15px;
        color: white;
        background-color: transparent;
        border: 1px solid white;
        border-top: none;
        border-left: none;
        border-right: none;
    }
    input:focus{
        outline: none;
    }
    button{
        height: 25px;
        width: 100px;
        background-color: white;
        font-size: 15px;
        cursor: pointer;
    }
    button:hover{
        background-color: darkgoldenrod;
        color: white;
    }

</style>
<body>
    <div class="container">
    <h1>Signup Form</h1>
    <fieldset>
        <legend>Personal information</legend>
    <form action="" method="POST">
        <label for="fname">First name</label><br><br>
        <input type="text" name="fname" placeholder="enter your first name"><br><br>
        <label for="lname">Last name</label><br><br>
        <input type="text" name="lname" placeholder="enter your lastname"><br><br>
        <label for="email">Email</label><br><br>
        <input type="text" name="email" placeholder="enter your email"><br><br>
        <label for="password">Password</label><br><br>
        <input type="password" name="password" placeholder="enter your password"><br><br>
        <label for="gender">Gender</label><br><br>
        <input type="radio" value="Male" name="gender">
        <label>Male</label>
        <input type="radio" value="Female" name="gender">
        <label>Female</label><br><br>
        <button type="submit" name="send">Submit</button>
    </form>
    </fieldset>
    </div>
</body>
</html>
<?php

include 'connection.php';

if(isset($_POST['send'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $gender=$_POST['gender'];
 $sql="INSERT INTO users VALUES('','$fname','$lname','$email','$pass','$gender')";
 $res=mysqli_query($conn,$sql);
 if(!$res==true){
    echo"data is inserted";
    
 }  
 header("location:display.php"); 
}
?>
