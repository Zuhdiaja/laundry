<?php 
    $nama_paket = $_POST['nama_paket'];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    $temp = $_FILES ['img']['tmp_name']; //karena upload jd menggunakan variabel FILES [tmp_name merupakan file itu sendiri]
    $type = $_FILES ['img']['type'];
    $size = $_FILES ['img']['size'];
    $name = rand(0,9999).$_FILES['img']['name']; //upload nama dari img tsb
    $folder = "img/";
    include "koneksi.php";
    if ($size < 2048000 and ($type =='image/jpeg' or $type =='image/png' or $type =='image/jpg')){ 
        move_uploaded_file($temp,$folder.$name); //[$file itu sendiri,$destinasi tujuan folder akan disimpan.$namafilenya]
        $input = mysqli_query($conn, "INSERT INTO paket (nama_paket, jenis, harga, img) VALUES ('".$nama_paket."','".$jenis."','".$harga."','".$name."')");
        if ($input){
            echo "<script>alert('Success to Add Service');location.href='view_service.php';</script>";
        }else{
            echo "<script>alert('Failed to Add Service');location.href='view_service.php';</script>";
        }
    }
?>