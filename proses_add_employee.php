<?php
    $nama_user = $_POST["nama_user"];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
    
    include "koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO user 
    (nama_user, jenis_kelamin, username, password, role) VALUES 
    ('".$nama_user."','".$jenis_kelamin."','".$username."','".md5($password)."','".$role."')") or die(mysqli_error($conn));

    if ($input) {
        echo "<script>alert('Success to Add New Employee');location.href='view_employee.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Add New Employee');location.href='view_employee.php';</script>";
    }
?>