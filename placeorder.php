<?php
/*
show the form for getting costumer info
create order table
get the pids from the session cart 
 insert the pids and costumer into the order table
*/
session_start();

$localcart=$_SESSION['cart'];
$pids=[];
for($i=0;$i<count($localcart);$i++)
{
    array_push($pids,$localcart[$i]);
}
$name=$_POST['name'];
$number=$_POST['mobilenumber'];
$address=$_POST['address'];

$_SESSION['name']=$name;
$_SESSION['number']=$number;
$_SESSION['address']=$address;
echo "$number";
echo "<br>";
$str_pid=implode(",",$pids);
print_r($str_pid);

echo "<br>";
include_once "../shared/connection.php";
if(!$conn)
{
    echo "no connection";
    die;
}
$query="insert into orders(name,number,address,pid) values('$name','$number','$address','$str_pid')";
$status=mysqli_query($conn,$query);
if($status)
{
    echo "<h1>order placed</h1>";
}
else
{
    echo "<h1>error</h1>";
    echo mysqli_error($conn);
}

?>