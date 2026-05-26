<?php
include 'koneksi.php';

if(isset($_POST['submit'])){
    $u = $_POST['username'];
    $p = $_POST['password'];
    $e = $_POST['email'];

    $query = "INSERT INTO tb_users(username,password,email)VALUES('$u','$p','$e')";
    $hasil = mysqli_query($conn,$query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">username</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="text" name="password"><br>
        <label for="">email</label><br>
        <input type="text" name="email"><br>
        <button name="submit">submit</button>
    </form>
</body>
</html>