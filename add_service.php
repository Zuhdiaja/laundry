<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Laundry</title>
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/add_service.css">
</head>
<body>
<?php
    include "navbar.php";
?>    
<div class="container">
    <div class="title">Add New Service</div>
    <form method="POST" action="proses_add_service.php" enctype="multipart/form-data">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Service Name</span>
                <input type="text" placeholder="" name="nama_paket" required>
            </div>
            <div class="input-box">
                <label for="jenis" class="form-label">jenis</label>
                <?php
                    $arr_jenis=array('Pcs'=>'Pcs','Kg'=>'Kg');
                ?>
                <select name="jenis" class="form-select" required>
                    <option></option>
                    <?php foreach ($arr_jenis as $key_jenis => $val_jenis):?>
                        <option value="<?=$key_jenis?>"><?=$val_jenis?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Price</span>
                <input type="text" placeholder="" name="harga" required>
            </div>
            <div class="input-box">
                <span class="details">Picture</span>
                <input type="file" name="img" value="" class="form-control" required><br>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Add service">
        </div>
    </form>
</div>  
</body>
</html>