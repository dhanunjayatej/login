<?php
session_start();
if (!isset($_SESSION['login_status']))
{
    echo "unauthorised attempt";
    die;
}
if ($_SESSION['login_status']==false)
{
    echo "illegal attempt";
    die;

}
include "menu.html";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>
<body>
    <div class="d-flex vh-100 justify-content-center align-items-center">
        <form enctype="multipart/form-data" class="bg-secondary p-4 " action="upload_db.php" method="post">
            <input required class="form-control mt-2" type="text" placeholder="product name" name="name">
            <input  required min="1" class="form-control mt-2"  type="text" placeholder="product price" name="price">
            <textarea required class="form-control mt-2" placeholder="enter about product detail" name="detail" id="" cols="30" rows="10"></textarea>
            <input required  class="form-control mt-2" type="file" name="imfile">
            <button class="form-control bg-primary mt-2">upload
            </button>

        </form>
    </div>
    
</body>
</html>
