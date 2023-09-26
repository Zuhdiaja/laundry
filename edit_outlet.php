<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/edit_outlet.css">
    <title>Edit Outlet</title>
</head>

<body>
    <?php
    include "navbar.php";
    include "koneksi.php";
    $query_outlet = mysqli_query($conn, "SELECT * from outlet where id_outlet='" . $_GET['id_outlet'] . "'");
    $data_outlet = mysqli_fetch_array($query_outlet);
    ?>
    <div class="container">
        <div class="title">Edit Outlet</div>
        <form method="POST" action="proses_edit_outlet.php">
            <input type="hidden" name="id_outlet" value="<?= $data_outlet['id_outlet'] ?>">
            <div class="outlet-details">
                <div class="input-box">
                    <span class="details">Outlet Name</span>
                    <input type="text" class="form-control" name="nama_outlet" value="<?= $data_outlet['nama_outlet'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Address</span>
                    <input type="textarea" class="form-control" name="alamat" value="<?= $data_outlet['alamat'] ?>" required>
                </div>
                <div class="input-box">
                    <span class="details">Contact</span>
                    <input type="text" class="form-control" name="telp" value="<?= $data_outlet['telp'] ?>" required>
                </div>
                <div class="form-group">
                    <label>owner</label>
                    <select name="id_owner" class="form-control">
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
                <input type="submit" value="Edit Outlet">
            </div>
        </form>
    </div>
</body>

</html>