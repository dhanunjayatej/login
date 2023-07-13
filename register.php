<?php
$name=$_POST['uname'];
$pass1=$_POST['upass1'];
$hpass=md5($pass1);
$conn=new mysqli("localhost","root","","teja");
$sql_status=mysqli_query($conn,"insert into user(username,password) values('$name','$hpass')");
if ($sql_status)
{
    echo "<h1>registration succesfull</h1>";


}
else
{
    echo "<h1>invalid</h1>";
}
?> 