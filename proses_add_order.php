<?php
    session_start();
    if($_POST){
        include "koneksi.php";
        $qry_get_paket=mysqli_query($conn,"SELECT * from paket where id_paket = '".$_POST['id_paket']."'");
        $dt_paket=mysqli_fetch_array($qry_get_paket);
        $_SESSION['cart'][]=array(
            'id_paket'=>$dt_paket['id_paket'],
            // 'id_outlet'=>$dt_paket['id_outlet'],
            'nama_paket'=>$dt_paket['nama_paket'],
            'harga'=>$dt_paket['harga'],
            'qty'=>$_POST['jml_beli'],
            'total_harga'=>$dt_paket['harga']*$_POST['jml_beli']
        );
    }
    // print_r($_SESSION);
    header('location: add_order.php');
?>