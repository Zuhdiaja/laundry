<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/coba.css">
    <title>Document</title>
</head>
<body>
     <!-- Pilihan Paket -->
    <div class="order">
        <div class="order-1">
            <div class="card">
            <div class="title">ADD COSTUMER ORDER</div>
     <?php
                include "koneksi.php";
                $qry_paket=mysqli_query($conn,"select * from paket");
                while($data_paket=mysqli_fetch_array($qry_paket)){
            ?>
                <form action="proses_add_order.php" method="post">
                    <div class="card-bdy">
                        <h5 class="card-title"><?=$data_paket['nama_paket']?></h5>
                        <p class="card-text">
                            <?php
                                echo "Rp. ".number_format($data_paket['harga'], 2, ',', '.')."";
                            ?>
                        </p>
                        <input type="hidden" name = "id_paket" value = "<?=$data_paket['id_paket']?>">
                        <input class = "jml" type="number" min = "1" value = "1" name = "jml_beli">
                        <span><input class = "button" type="submit" value = "+"></span>
                    </div>
                </form>
            <?php
                }
            ?>
            </div>

        <div class="costumer">
            <div class="cart">
            <div class="title">Costumer</div>
            <form action="checkout.php" methos="POST">
                <div class="member">
                <select name="id_user" id="">
                    <option value=""></option>
                    <?php
                    include "koneksi.php";
                    $qry_member=mysqli_query($conn, "SELECT * FROM member");
                    $no=0;
                    while($data_member=mysqli_fetch_array($qry_member)){
                        $no++;
                    
                    ?>
                    <option value="<?=$data_member['id_member']?>"><?=$no?> - <?=$data_member['nama_member']?></option>
                    <?php
                    }
                    ?>
                </select>
                </div>
                <input type="submit" value="Checkout" class="button_checkout">
            </form>
        </div>
        </div>
        </div>
    </div>
</body>
</html>