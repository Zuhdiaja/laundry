<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/edit_employee.css">
    <title>Edit Employee</title>
</head>
<body>
<?php
    include "navbar.php";
    include "koneksi.php";
    $query_user = mysqli_query($conn, "SELECT * from user where id_user='".$_GET['id_user']."'");
    $data_user = mysqli_fetch_array($query_user);
?>
<div class="container">
    <div class="title">Edit Employee</div>
    <form method="POST" action="proses_edit_employee.php">
    <input type="hidden" name="id_user" value="<?=$data_user['id_user']?>">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter Your Name" name="nama_user" value="<?=$data_user['nama_user']?>"required>
            </div>
            <div class="input-box">
                <span class="details">Gender</span>
                <?php
                    $arr_gender=array('M'=>'Male','F'=>'Female');
                ?>
                <select name="jenis_kelamin" class="form-select" required>
                <option></option>
                <?php foreach ($arr_gender as $key_gender => $val_gender):
                if($key_gender==$data_user['gender']){
                    $selek="selected";
                } else {
                    $selek="";
                }?>
                <option value="<?=$key_gender?>"<?=$selek?>><?=$val_gender?></option>
                <?php endforeach ?>
                </select>
            </div>
            <div class="input-box">
                <span class="details">Username</span>
                <input type="text" value="<?=$data_user['username']?>" name="username" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" name="password" required>
            </div>
            <div class="input-box">
                <span class="details">Role</span>
                <?php
                    $arr_role=array('Admin'=>'Admin','Kasir'=>'Kasir','Owner'=>'Owner');
                ?>
                <select name="role" class="form-select" required>
                <option></option>
                <?php foreach ($arr_role as $key_role => $val_role):
                if($key_role==$data_user['role']){
                    $selek="selected";
                } else {
                    $selek="";
                }?>
                <option value="<?=$key_role?>"<?=$selek?>><?=$val_role?></option>
                <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Edit Employee">
        </div>
    </form>
</div>  
</body>
</html>