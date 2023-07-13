<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   <style>
    .container
    {
        display: inline-block;
        height: fit-content;
        width: fit-content;
        padding: 10px;
        background-color: bisque;
        margin: 10px;
    }
    .image-wrap
    {
        height: 100%;
        width: 70%;
    }
    .image
    {
        margin-top: 10px;
        height: 300px;
        width: 200px;
    }
    .name
    {
        font-size: 24px;
        font-weight: bold;
    }
    .price
    {
        font-size: 18px;
        font-weight: bold;
        margin-top: 10px;
    }
    .detail
    {
        margin-top: 10px;
        font-size: 18px;
        font-weight: bold;
    }
   </style>
</head>
<body>
    <script>
        function confirmdelete(pid)
        {
            ans=confirm('are you sure to delete');
            if(ans)
            {
                window.location=`delete.php?pid=${pid}`;
            }
        }
    </script>
    
</body>
</html>
<?php
include "menu.html";
session_start();
$sellerid=$_SESSION['userid'];
include_once "../../shared/connection.php";
$sql_cursor=mysqli_query($conn,"select * from product where seller_id=$sellerid");
while($row=mysqli_fetch_assoc($sql_cursor))
{
    $_SESSION['$name']=$row['name'];
    $_SESSION['$price']=$row['price'];
    $_SESSION['$detail']=$row['detail'];
    $_SESSION['$impath']=$row['impath'];
   $_SESSION['$pid']=$row['pid'];

    $pid=$row['pid'];
    $name=$row['name'];
    $price=$row['price'];
    $detail=$row['detail'];
    $impath=$row['impath'];
    echo "<div class='container'>
    <div class='name'>$name</div>
    <div class='price'>$price Rs</div>
    <div class='image-wrap'>
    <img class='image'  src='../../$impath'>
    </div>
    <div class='detail'>$detail</div>
   
    <div class='d-flex justify-content-around'>
        <div>
        <a href='edit.php?pid=$pid'>
        <button  class='btn btn bg-warning'>edit
        </button>
        </a>
    
        </div>
    
    
    <div>

         <button onclick='confirmdelete($pid)' class='btn btn bg-danger'>delete</button>
    
    </div>
    </div>
    </div>
    </div>
    ";
    
}

?>
