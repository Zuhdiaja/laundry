<?php
 if($_GET['id_member']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"DELETE from member where id_member='".$_GET['id_member']."'");
    if($qry_hapus){
        echo "<script>alert('Success to Delete Member');
        location.href='view_member.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete Member');
        location.href='view_member.php';</script>";
    }
 }
?>