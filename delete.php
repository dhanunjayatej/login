<?php
$pid=$_GET['pid'];
$conn=new mysqli("localhost","root","","acme");
$status=mysqli_query($conn, "delete from product where pid=$pid");
if($status)
{
    echo "<h1>Deleted successfully</h1>";


}
else
{
    echo "Error in Deleting";
    echo mysqli_error($conn);
}
?>