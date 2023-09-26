<?php
 if($_GET['id_user']){
    include "koneksi.php";
    $qry_hapus=mysqli_query($conn,"DELETE from user where id_user='".$_GET['id_user']."'");
    if($qry_hapus){
        echo "<script>alert('Success to Delete Employee');
        location.href='view_employee.php';</script>";
    } else {
        echo "<script>alert('Failed to Delete Employee');
        location.href='view_employee.php';</script>";
    }
 }
?>