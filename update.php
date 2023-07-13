<?php
include_once "../../shared/connection.php";
$pid=$_GET['pid'];
$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];
$impath=$_POST['impath'];

$status=mysqli_query($conn," update product set pid='$pid', name='$name',price='$price',detail='$detail',impath='$impath' where pid=$pid");
$row=mysqli_fetch_assoc($status);
if($status)
{
    echo "<h1>updated successfully</h1>";
}
else
{
    echo "<h1> failed to update</h1>";
    echo mysqli_error($conn);s
}
?>