<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/view_outlet.css">
    <title>View Outlet</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2 mb-3 text-center">List of Outlet</h3>
                <form method="POST" action="view_outlet.php" class="d-flex">
                    <input type="search" name="cari" class="form-control me-2" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Seacrh</button>
                </form>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAME OF OUTLET</th>
                            <th>ADDRESS</th>
                            <th>CONTACT</th>
                            <th>ACTION</th>
                            <th>OWNER</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include "koneksi.php";
                        $qry_outlet = mysqli_query($conn, "SELECT o.id_outlet, o.nama_outlet, o.alamat, o.telp, o.id_owner, u.nama_user as nama_owner FROM outlet o JOIN user u ON o.id_owner=u.id_user");

                        $no = 0;
                        while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
                            $no++;
                        ?>
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $data_outlet['nama_outlet'] ?></td>
                                <td><?= $data_outlet['alamat'] ?></td>
                                <td><?= $data_outlet['telp'] ?></td>
                                <td>
                                    <?php
                                    if ($_SESSION['role'] == 'Admin') {
                                    ?>
                                        <a href="edit_outlet.php?id_outlet=<?= $data_outlet['id_outlet'] ?>" class="btn btn-outline-success">Edit</a>
                                        <a href="delete_outlet.php?id_outlet=<?= $data_outlet['id_outlet'] ?>" class="btn btn-outline-danger" onclick="return confirm('Are you sure want to delete this outlet?')">Delete</a>
                                    <?php
                                    } else {
                                    }
                                    ?>
                                </td>
                                <td><?= $data_outlet['nama_owner'] ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>
<?php
// include "footer.php";
?>