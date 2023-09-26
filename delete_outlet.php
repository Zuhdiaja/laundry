<?php
 if($_GET['id_outlet']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"DELETE from outlet where id_outlet='".$_GET['id_outlet']."'");
    if($qry_hapus){
        echo "<script>alert('Success to Delete Outlet');
        location.href='view_outlet.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete Outlet');
        location.href='view_outlet.php';</script>";
    }
 }
?>