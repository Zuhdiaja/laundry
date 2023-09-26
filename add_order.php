<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Laundry</title>
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/add_order.css">
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <!-- CART PAGE -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2 mb-3 text-center">List of Order</h3>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAMA PAKET</th>
                            <th>HARGA</th>
                            <th>QTY</th>
                            <th>TOTAL HARGA</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        if (@$_SESSION['cart']) {
                            foreach ($_SESSION['cart'] as $key_paket => $val_paket) :
                                $subtotal = $val_paket['qty'] * $val_paket['harga'];
                                $total += $subtotal;
                        ?>
                                <tr>
                                    <td class="no"><?= ($key_paket + 1) ?></td>
                                    <td class="nama"><?= $val_paket['nama_paket'] ?></td>
                                    <td class="harga">
                                        <?php
                                        echo "Rp. " . number_format($val_paket['harga'], 2, ',', '.') . "";
                                        ?>
                                    </td>
                                    <td><?= $val_paket['qty'] ?></td>
                                    <td>
                                        <?php
                                        echo "Rp. " . number_format($val_paket['total_harga'], 2, ',', '.') . "";
                                        ?>
                                    </td>
                                    <td class="x"><a href="delete_cart.php?id_paket=<?= $key_paket ?>" onclick="return confirm('Are You Sure Want Delete This?');"><strong>X</strong></a></td>
                                </tr>
                            <?php endforeach ?>
                            <tr>
                                <td colspan="3"><b>Total</td>
                                <td colspan="3">
                                    <b><?php
                                        echo "Rp. " . number_format($total, 2, ',', '.') . "";
                                        ?>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><br>
    </div>
    <!-- Pilihan Paket -->
    <div class="tab">
        <div class="order">
            <div class="order-1">
                <div class="kard">
                    <div class="title">ADD COSTUMER ORDER</div>
                    <?php
                    include "koneksi.php";
                    $qry_paket = mysqli_query($conn, "SELECT * from paket");
                    while ($data_paket = mysqli_fetch_array($qry_paket)) {
                    ?>
                        <form action="proses_add_order.php" method="post">
                            <div class="card-bdy">
                                <h5 class="card-title"><?= $data_paket['nama_paket'] ?></h5>
                                <p class="card-text">
                                    <?php
                                    echo "Rp. " . number_format($data_paket['harga'], 2, ',', '.') . "";
                                    ?>
                                </p>
                                <input type="hidden" name="id_paket" value="<?= $data_paket['id_paket'] ?>">
                                <input class="jml" type="number" min="1" value="1" name="jml_beli">
                                <span><input class="button" type="submit" value="+"></span>
                            </div>
                        </form>
                    <?php
                    }
                    ?>
                </div>
                <!-- PILIH -->
                <div class="costumer">
                    <div class="cart">
                        <form action="checkout.php" method="POST">
                            <div class="title">Costumer</div>
                            <div class="member">
                                <select name="id_member" id="">
                                    <option value=""></option>
                                    <?php
                                    include "koneksi.php";
                                    $qry_member = mysqli_query($conn, "SELECT * FROM member");
                                    $no = 0;
                                    while ($data_member = mysqli_fetch_array($qry_member)) {
                                        $no++;

                                    ?>
                                        <option value="<?= $data_member['id_member'] ?>"><?= $no ?> - <?= $data_member['nama_member'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="title">Outlet</div>
                            <div class="member">
                                <select name="id_outlet" id="">
                                    <option value=""></option>
                                    <?php
                                    include "koneksi.php";
                                    $cmd = "SELECT * FROM outlet";
                                    echo $cmd;
                                    $qry_outlet = mysqli_query($conn, $cmd);
                                    $no = 0;
                                    while ($data_outlet = mysqli_fetch_array($qry_outlet)) {
                                        $no++;

                                    ?>
                                        <option value="<?= $data_outlet['id_outlet'] ?>"><?= $no ?> - <?= $data_outlet['nama_outlet'] ?></option>
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
    </div>
</body>

</html>