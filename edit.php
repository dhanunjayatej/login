<?php

include_once "../../shared/connection.php";
session_start();
$pid=$_GET['pid'];
$_SESSION['impath']=$impath;
$status=mysqli_query($conn,"select * from product where pid=$pid");
$row=mysqli_fetch_assoc($status);
$name=$row['name'];
$price=$row['price'];
$detail=$row['detail'];
$impath=$row['impath'];

?>





<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <form enctype="multipart/form-data" class="bg-secondary p-4 " action="code.php"  method="post">
            <input type="hidden" name="pid" value="<?php echo "$pid" ?>">
            <input required class="form-control mt-2" type="text" value="<?php echo "$name" ?>" name="name">
            <input  required min="1" class="form-control mt-2"  type="text" value="<?php echo $price ?>" name="price">
            <textarea required class="form-control mt-2"  name="detail" id="" cols="30" rows="10"><?php echo "$detail" ?></textarea>
            <input class="form-control mt-2" type="file" name="imfile"  placeholder="<?php echo "$impath" ?>">
            <input type="text" value="<?php echo "$impath" ?>" name="oldimage">
            <a href="code.php?pid=$pid">
            <button class="form-control bg-primary mt-2" name="updateimage">update
            </button>
            </a>
        </form>
    </div>
    
</body>
</html>

