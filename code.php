<?php
session_start();
include_once "../../shared/connection.php";
if(isset($_POST['updateimage']))
{
    $newimage="shared/images/".$_FILES['imfile']['name'];
    $dest="../../shared/images/".$_FILES['imfile']['name'];
    move_uploaded_file($_FILES['imfile']['tmp_name'],$dest);
    $pid=$_POST['pid'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $detail=$_POST['detail'];
    $newimage="shared/images/".$_FILES['imfile']['name'];
    $oldimage=$_POST['oldimage'];

    echo "$name";
    echo "<br>"; 
    echo "$price";
    echo "<br>";
     echo "$detail";
    echo "<br>";
    echo "$newimage";
    echo "<br>";
    echo "$oldimage";
    echo "<br>";
    echo "$pid";
    if($newimage!='')
    {
       $updatefilename= "shared/images/".$_FILES['imfile']['name'];
    }
    else
    {
        $updatefilename=$oldimage;
    }
    echo "$updatefilename";
    include_once "../../shared/connection.php";
    $conn=new mysqli("localhost","root","","acme");
    $query="update product set name='$name',price='$price',detail='$detail',impath='$updatefilename' where pid='$pid'";
    $sql_cursor=mysqli_query($conn,$query);
    if($sql_cursor )
    {
        echo "updated succesfully";
    }
    else
    {
        echo "<h1> failed to update</h1>";
        echo mysqli_error($conn); 
   }
    
}
?>