<!-- menampilkan data paket yang akan diubah menggunakan value -->
<?php
    $id_paket = $_POST["id_paket"];
    $nama_paket = $_POST["nama_paket"];
    $jenis = $_POST['jenis'];
    $harga = $_POST['harga'];
    
    include "koneksi.php";
    if ($_FILES['img']['tmp_name']) {
        $temp = $_FILES['img']['tmp_name'];
        $type = $_FILES['img']['type'];
        $size = $_FILES['img']['size'];
        $name = rand(0,9999).$_FILES['img']['name'];
        $folder = "img/";

        if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png'))
        {
            $query_img = mysqli_query($conn, "SELECT * FROM paket where id_paket = '".$_POST['id_paket']."'");
            $data_img = mysqli_fetch_array($query_img);
            unlink('img/'.$data_img['img']); //remove img yang ada difolder lalu diganti img yang baru diup
            
            move_uploaded_file($temp, $folder . $name);
            $input = mysqli_query($conn, "UPDATE paket SET 
            nama_paket='".$nama_paket."', jenis='".$jenis."',
            harga='".$harga."', img='".$name."'
            where id_paket='".$id_paket."'");

            if ($input) {
                echo "<script>alert('Success to Edit Service');location.href='view_service.php';</script>";
            }
            else {
                echo "<script>alert('Failed to Edit Service');location.href='view_service.php';</script>";
            }
        }
    }
    else{
        $input = mysqli_query($conn, "UPDATE paket SET nama_paket='".$nama_paket."', jenis='".$jenis."', harga='".$harga."' where id_paket='".$id_paket."'");

        if ($input) {
            echo "<script>alert('Success to Edit Service');location.href='view_service.php';</script>";
        }
        else {
            echo "<script>alert('Failed to Edit Service');location.href='view_service.php';</script>";
        }
    }
    
?>