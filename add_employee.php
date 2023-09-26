<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/add_employee.css">
    <link rel="stylesheet" href="css/footer.css">
</head>
<body>
<?php
    include "navbar.php";
?>  
<div class="container">
    <div class="title">Add New Employee</div>
    <form method="POST" action="proses_add_employee.php">
        <div class="user-details">
            <div class="input-box">
                <span class="details">Full Name</span>
                <input type="text" placeholder="Enter Your Name" name="nama_user" required>
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
                <span class="details">Username</span>
                <input type="text" placeholder="Enter Your Username" name="username" required>
            </div>
            <div class="input-box">
                <span class="details">Password</span>
                <input type="password" placeholder="Enter Your Password" name="password" required>
            </div>
            <div class="input-box">
                <span class="details">Role</span>
                <?php
                    $arr_role=array('Admin'=>'Admin','Kasir'=>'Kasir','Owner'=>'Owner');
                ?>
                <select name="role" class="form-select" required>
                <option></option>
                <?php foreach ($arr_role as $key_role => $val_role):?>
                <option value="<?=$key_role?>"><?=$val_role?></option>
                <?php endforeach ?>
                </select>
            </div>
        </div>
        <div class="button">
            <input type="submit" value="Add Employee">
        </div>
    </form>
</div>  
</body>
</html>