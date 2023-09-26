<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/edit_member.css">
    <title>Edit Member</title>
</head>
<body>
<?php
    include "navbar.php";
    include "koneksi.php";
    $query_member = mysqli_query($conn, "SELECT * from member where id_member='".$_GET['id_member']."'");
    $data_member = mysqli_fetch_array($query_member);
?>
<div class="container">
    <div class="title">Edit Member</div>
    <form method="POST" action="proses_edit_Member.php">
    <input type="hidden" name="id_member" value="<?=$data_member['id_member']?>">
        <div class="member-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" class="form-control" name="nama_member" value="<?=$data_member['nama_member']?>"required>
            </div>
            <div class="input-box">
                <span class="details">Address</span>
                <input type="textarea" class="form-control" name="alamat" value="<?=$data_member['alamat']?>" required>
            </div>
            <div class="input-box">
                <span class="details">Gender</span>
                <?php
                    $arr_gender=array('M'=>'Male','F'=>'Female');
                ?>
                <select name="jenis_kelamin" class="form-select" required>
                <option></option>
                <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$data_member['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }?>
                <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Contact</span>
                <input type="text" class="form-control" name="telp" value="<?=$data_member['telp']?>" required>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Edit Member">
        </div>
    </form>
</div>  
</body>
</html>