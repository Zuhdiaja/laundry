<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/edit_service.css">
    <title>Edit Eervice</title>
</head>
<body>
<?php
    include "navbar.php";
    include "koneksi.php";
    $query_paket = mysqli_query($conn, "SELECT * from paket where id_paket='".$_GET['id_paket']."'");
    $data_paket = mysqli_fetch_array($query_paket);
?>
<div class="container">
    <div class="title">Edit service</div>
    <form method="POST" action="proses_edit_service.php" enctype="multipart/form-data">
    <input type="hidden" name="id_paket" value="<?=$data_paket['id_paket']?>">
        <div class="service-details">
            <div class="input-box">
                <span class="details">Service Name</span>
                <input type="text" class="form-control" name="nama_paket" value="<?=$data_paket['nama_paket']?>"required>
            </div>
            <div class="input-box">
                <span class="details">Jenis</span>
                <?php
                    $arr_paket=array('Pcs'=>'Pcs','Kg'=>'Kg');
                ?>
                <select name="jenis" class="form-select" required>
                <option></option>
                <?php foreach ($arr_paket as $key_paket => $val_paket):
                if($key_paket==$data_member['jenis']){
                    $selek="selected";
                } else {
                    $selek="";
                }?>
                <option value="<?=$key_paket?>"<?=$selek?>><?=$val_paket?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Price</span>
                <input type="text" class="form-control" name="harga" value="<?=$data_paket['harga']?>" required>
            </div>
            <div class="mb-3">
                <span for="foto" class="details">Picture</span>
                <img src="img/<?=$data_paket['img']?>" width="100"/></br>
                <input type="file" class="form-control" name="img" value="<?=$data_paket['img']?>">
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Edit Service">
        </div>
    </form>
</div>  
</body>
</html>