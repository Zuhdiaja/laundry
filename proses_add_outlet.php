<?php
    $nama_outlet = $_POST["nama_outlet"];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $id_owner = $_POST["id"];

    include "koneksi.php";
    $input = mysqli_query($conn, "INSERT INTO outlet 
    (nama_outlet, alamat, telp, id_owner) VALUES 
    ('$nama_outlet','$alamat','$telp', '$id_owner')") or die(mysqli_error($conn));

    if ($input) {
        echo "<script>alert('Success to Add New Outlet');location.href='view_outlet.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Add New Outlet');location.href='view_outlet.php';</script>";
    }
?>