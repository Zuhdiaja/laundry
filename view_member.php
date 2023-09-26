<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/view_member.css">
    <title>View Member</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2 mb-3 text-center">List of Member</h3>
                <form method="POST" action="view_member.php" class="d-flex">
                    <input type="search" name="cari" class="form-control me-2" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Seacrh</button>
                </form>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAME OF MEMBER</th>
                            <th>ADDRESS</th>
                            <th>GENDER</th>
                            <th>CONTACT</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            if(isset($_POST['cari'])){
                                $cari=$_POST['cari'];
                                $query_member=mysqli_query($conn,"SELECT * from member where id_member='$cari' or nama_member like '%$cari%'");
                            }else{
                                $query_member=mysqli_query($conn,"SELECT * from member");
                            }
                            $no=0;
                            while($data_member=mysqli_fetch_array($query_member)){
                                $no++;
                        ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data_member['nama_member']?></td>
                                <td><?=$data_member['alamat']?></td>
                                <td><?=$data_member['jenis_kelamin']?></td>
                                <td><?=$data_member['telp']?></td>
                                <td>
                                    <a href="edit_member.php?id_member=<?=$data_member ['id_member']?>" class="btn btn-outline-success">Edit</a>
                                    <a href="delete_member.php?id_member=<?=$data_member ['id_member']?>" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure want to delete this member?')">Delete</a> 
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
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous">
    </script>
</body>
</html>
<?php
    // include "footer.php";
?>