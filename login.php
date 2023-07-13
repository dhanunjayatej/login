<?php
session_start();
$_SESSION['login_status']=false;

$name=$_POST['uname'];
$pass=$_POST['upass1'];
$hpass=md5($pass);
$conn=new mysqli("localhost","root","","teja");
$sqli_cursor=mysqli_query($conn, "select * from user where username='$name' and password='$hpass'");
$total_row=mysqli_num_rows($sqli_cursor);
if ($total_row>0)
{

    $row=mysqli_fetch_assoc($sqli_cursor);
    print_r($row);
    $_SESSION['login_status']=true;
    $_SESSION['userid']=$row['sellerid'];
    $_SESSION['username']=$row['username'];
    echo '<h1>login success</h1>';
    header("location:product/upload.php");
   
}
else
{
    echo '<h1>invalid credentials</h1>';
}
?>