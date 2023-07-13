<?php

include_once "../../shared/connection.php";
session_start();
$dest="../../shared/images/".$_FILES['imfile']['name'];
move_uploaded_file($_FILES['imfile']['tmp_name'],$dest);

$sellerid=$_SESSION['userid'];
$name=$_POST['name'];
$price=$_POST['price'];
$detail=$_POST['detail'];

$impath="shared/images/".$_FILES['imfile']['name'];

$conn=new mysqli("localhost","root","","acme");

$query="insert into product(name,price,detail,impath,seller_id) values('$name','$price','$detail','$impath','$sellerid')";
echo $query;
$status_cursor=mysqli_query($conn,$query);

echo mysqli_error($conn);
if ($status_cursor)
{

    echo "<h1>uploaded successfully</h1>";
}
else
{
    echo "<h1>something wrong</h1>";
}

?>