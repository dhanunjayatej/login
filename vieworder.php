<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .cart
        {
            height: fit-content;
            width: fit-content;
            background-color: bisque;
            padding: 10px;

        }
        .name,.number,.address,.costumer
        {
            font-size: 24px;
            margin-top: 10px;
        }
        .costumer
        {
            color: red;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
include_once "../../shared/connection.php";
session_start();
$pid=$_SESSION['$pid'];
echo "$pid";
$query="select * from orders where pid='$pid' ";
echo "$query";
$status=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($status);
while($row=mysqli_fetch_assoc($status))
{
    $name=$row['name'];
    $number=$row['number'];
    $address=$row['address'];
    $ordered_date=$row['ordered_date'];
    echo "<div class='cart'>
    <div class='costumer'>ordered costumer details</div>
    <div class='name'>name=$name</div>
    <div class='number'>mobile number=$number</div>
    <div class='address'>address=$address</div>
    <div>orderdate=$ordered_date</div>
    </div>
    
    
    
    ";
}

?>