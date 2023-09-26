<?php
$id_member = $_POST['id_member'];
    $nama_member = $_POST["nama_member"];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $telp = $_POST['telp'];
    
    include "koneksi.php";
    $input = mysqli_query($conn, "UPDATE member SET nama_member='".$nama_member."', 
    alamat='".$alamat."',
    jenis_kelamin='".$jenis_kelamin."', telp='".$telp."'
    where id_member = '".$id_member."'");

    if ($input) {
        echo "<script>alert('Success to Edit Member');location.href='view_member.php';</script>";
    }
    else {
        echo "<script>alert('Failed to Edit Member');location.href='view_member.php';</script>";
    }
?>