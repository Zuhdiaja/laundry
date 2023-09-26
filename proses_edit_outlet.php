<?php
$id_outlet = $_POST['id_outlet'];
    $nama_outlet = $_POST["nama_outlet"];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $id_owner = $_POST['id_owner'];
    
    include "koneksi.php";
    $cmd="UPDATE outlet SET nama_outlet='$nama_outlet', 
    alamat='$alamat', telp='$telp', id_owner='$id_owner'
    where id_outlet = '$id_outlet'";
    echo $cmd;
    $input = mysqli_query($conn, $cmd);

    if ($input) {
        echo "<script>alert('Success to Edit Outlet');location.href='view_outlet.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Edit Outlet');location.href='view_outlet.php';</script>";
    }
?>