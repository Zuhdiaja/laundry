<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Laundry</title>
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/service.css" type="text/css">
</head>
<body>
<?php
    include "navbar.php";
?>
<div><br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="mt-2 mb-3 text-center">Check Our Service</h2><br>
                <form method="POST" action="view_service.php" class="d-flex">
            <input class="form-control me-2" type="search" name="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form><br>
            </div>
        <div class="card-body">
            <div class="row">
                <?php
                    include "koneksi.php";
                    if (isset($_POST['cari'])){
                        $cari = $_POST['cari'];
                        $query_paket = mysqli_query($conn,"SELECT * from paket where id_paket = '%$cari%' or nama_paket like '%$cari%' or jenis like '%$cari%'");
                    }
                    else{
                        $query_paket = mysqli_query($conn, "SELECT * from paket");
                    }
                    // $qry_paket=mysqli_query($conn,"SELECT * from paket"); 
                    while($dt_paket=mysqli_fetch_array($query_paket)){ //fetcharray digunakan mengambil data berupa array
                ?>
                <!-- <div class="col-md-1"></div> -->
                <div class="col-md-3">
                    <div class="card" >
                    <img src="img/<?=$dt_paket['img']?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?=$dt_paket['nama_paket']?></h5>
                            <p class="card-text"><?=$dt_paket['jenis']?></p>
                            <p class="card-title">Rp <?=$dt_paket['harga']?>,-</p>
                            <?php
                                if($_SESSION['role']=='Admin'){
                            ?>
                            <a href="edit_service.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-outline-primary">Edit</a>
                            <a href="delete_service.php?id_paket=<?=$dt_paket['id_paket']?>" class="btn btn-outline-danger"
                            onclick="return confirm('Are you sure want to delete this service?')">Delete</a>
                            <?php
                                }else{

                                }
                            ?>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1"></div> -->
                <?php
                }
                ?>
            </div>
        </div>
        
        </div>
        </div>
</div><br>
</body>
</html>
<?php
    include "footer.php";
?>