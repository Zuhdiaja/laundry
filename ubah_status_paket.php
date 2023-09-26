<?php
    include "koneksi.php";
    $get_order = mysqli_query($conn, "SELECT * from transaksi where id_transaksi = '".$_GET['id_transaksi']."'");
    $status_order = mysqli_fetch_array($get_order);
    if ($status_order['status'] != NULL) {
        $update_status = mysqli_query($conn, "UPDATE transaksi set status = '".$_GET['status']."' where id_transaksi = '".$_GET['id_transaksi']."'");
        echo "<script>alert('Sukses mengupdate status bayar');location.href='view_order.php';</script>";
    } else {
        echo "<script>alert('Gagal mengupdate status bayar');location.href='view_order.php';</script>";    
    }
?>