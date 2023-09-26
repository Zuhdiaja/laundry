<?php
 if($_GET['id_paket']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"DELETE from paket where id_paket='".$_GET['id_paket']."'");
    if($qry_hapus){
        echo "<script>alert('Success to Delete Service');
        location.href='view_service.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete Service');
        location.href='view_service.php';</script>";
    }
 }
?>