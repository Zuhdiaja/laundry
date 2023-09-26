<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Laundry</title>
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/add_member.css">
</head>
<body>
<?php
    include "navbar.php";
?>    
<div class="container">
    <div class="title">Add New Member</div>
    <form method="POST" action="proses_add_member.php">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="" name="nama_member" required>
            </div>
            <div class="input-box">
                <span class="details">Address</span>
                <textarea class="form-control" name="alamat" row="3" required></textarea>
            </div>
            <div class="input-box">
                <span class="details">Gender</span>
                <?php
                    $arr_gender=array('M'=>'Male','F'=>'Female');
                ?>
                <select name="jenis_kelamin" class="form-select" required>
                <option></option>
                <?php foreach ($arr_gender as $key_gender => $val_gender):?>
                <option value="<?=$key_gender?>"><?=$val_gender?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Contact</span>
                <input type="text" placeholder="" name="telp" required>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Add Member">
        </div>
    </form>
</div>  
</body>
</html>