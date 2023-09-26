<?php
    $id_user = $_POST['id_user'];
    $nama_user = $_POST["nama_user"];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    include "koneksi.php";
    $input = mysqli_query($conn, "UPDATE user SET nama_user='".$nama_user."', 
    jenis_kelamin='".$jenis_kelamin."',
    username='".$username."', password='".md5($password)."', role='".$role."' 
    where id_user = '".$id_user."'");

    if ($input) {
        echo "<script>alert('Success to Edit Employee');location.href='view_employee.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Edit Employee');location.href='view_employee.php';</script>";
    }
?>