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
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/view_employee.css">
    <title>View Employee</title>
</head>
<body>
    <?php
        include "navbar.php";
    ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="mt-2 mb-3 text-center">List of Employee</h3>
                <form method="POST" action="view_employee.php" class="d-flex">
                    <input type="search" name="cari" class="form-control me-2" placeholder="Search">
                    <button class="btn btn-outline-success" type="submit">Seacrh</button>
                </form>
            </div>
            <div class="card-body">
                <table>
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>NAME OF EMPLOYEE</th>
                            <th>GENDER</th>
                            <th>USERNAME</th>
                            <th>ROLE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include "koneksi.php";
                            if(isset($_POST['cari'])){
                                $cari=$_POST['cari'];
                                $query_user=mysqli_query($conn,"SELECT * from user where id_user='$cari' or nama_user like '%$cari%' or role='$cari'");
                            }else{
                                $query_user=mysqli_query($conn,"SELECT * from user");
                            }
                            $no=0;
                            while($data_user=mysqli_fetch_array($query_user)){
                                $no++;
                        ?>
                            <tr>
                                <td><?=$no?></td>
                                <td><?=$data_user['nama_user']?></td>
                                <td><?=$data_user['jenis_kelamin']?></td>
                                <td><?=$data_user['username']?></td>
                                <td><?=$data_user['role']?></td>
                                <td>
                                    <a href="edit_employee.php?id_user=<?=$data_user ['id_user']?>" class="btn btn-outline-success">Edit</a>
                                    <a href="delete_employee.php?id_user=<?=$data_user ['id_user']?>" class="btn btn-outline-danger"
                                    onclick="return confirm('Are you sure want to delete this employee?')">Delete</a> 
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
</body>
</html>