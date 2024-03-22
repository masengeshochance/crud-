<?php
include 'connection.php';
$id=$_GET['id'];
$sql="DELETE FROM `users` WHERE id='$id'";
$res=mysqli_query($conn,$sql);

if($res==true){
    echo"data deleted";
}
header("location:display.php");
?>