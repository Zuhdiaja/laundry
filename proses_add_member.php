<?php
    $nama_member = $_POST["nama_member"];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    include "koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO member 
    (nama_member, alamat, jenis_kelamin, telp) VALUES 
    ('".$nama_member."','".$alamat."','".$jenis_kelamin."','".$telp."')") or die(mysqli_error($conn));

    if ($input) {
        echo "<script>alert('Success to Add New Member');location.href='view_member.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Add New Member');location.href='view_member.php';</script>";
    }
?>