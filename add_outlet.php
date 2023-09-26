<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outlet Laundry</title>
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/add_outlet.css">
</head>

<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    ?>
    <div class="container">
        <div class="title">Add New Outlet</div>
        <form method="POST" action="proses_add_outlet.php">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">Outlet Name</span>
                    <input type="text" placeholder="" name="nama_outlet" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <textarea class="form-control" name="alamat" row="3" required></textarea>
                </div>
                <div class="input-box">
                    <span class="details">Contact</span>
                    <input type="text" placeholder="" name="telp" required>
                </div>
                <div class="input-box">
                    <span class="details">Owner</span>
                    <select name="id" class="form-control">
                        <?php
                        $cmd_query = mysqli_query($conn, "SELECT * FROM user WHERE role='Owner'");
                        while ($list_owner = mysqli_fetch_assoc($cmd_query)) {
                            echo '<option value="'.$list_owner['id_user'].'">'.$list_owner['nama_user'].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Add Outlet">
            </div>
        </form>
    </div>
</body>

</html>