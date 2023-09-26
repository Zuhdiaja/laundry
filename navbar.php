<?php
    session_start();
    if($_SESSION['status_login']!=true){
        header('location: login.php');
    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <link rel="stylesheet" href="css/navbar.css">
    <title></title>
</head>
<body>
    <section>
<header>
            <a href="home.php"><img src="img/crown logo.png" class="logo" width="100px"></a>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="#">Service</a>
                    <ul class="dropdown">
                        <li><a href="view_service.php">View Service</a></li>
                        <?php
                            if($_SESSION['role']=='Admin'){
                        ?>
                        <li><a href="add_service.php">Add Service</a></li>
                        <?php
                            }else{

                            }
                        ?>
                    </ul>
                </li>
                <li><a href="#">Member</a>
                    <ul class="dropdown">
                        <li><a href="view_member.php">View Member</a></li>
                        <?php
                            if($_SESSION['role']=='Admin'){
                        ?>
                        <li><a href="add_member.php">Add Member</a></li>
                        <?php
                            }else{

                            }
                        ?>
                    </ul>
                </li>
                <li><a href="#">Order</a>
                    <ul class="dropdown">
                        <li><a href="view_order.php">View Order</a></li>
                        <?php
                            if($_SESSION['role']=='Admin' or $_SESSION["role"]=='Kasir'){
                        ?>
                        <li><a href="add_order.php">Add Order</a></li>
                        <?php
                            }else{

                            }
                        ?>
                    </ul>
                </li>
                <li><a href="#">Employee</a>
                    <ul class="dropdown">
                        <li><a href="view_employee.php">View Employee</a></li>
                        <?php
                            if($_SESSION['role']=='Admin' or $_SESSION["role"]=='Owner'){
                        ?>
                        <li><a href="add_employee.php">Add Employee</a></li>
                        <?php
                            }else{

                            }
                        ?>
                    </ul>
                </li>
                <li><a href="#">Outlet</a>
                    <ul class="dropdown">
                        <li><a href="view_outlet.php">View Outlet</a></li>
                        <?php
                            if($_SESSION['role']=='Admin'){
                        ?>
                        <li><a href="add_outlet.php">Add Outlet</a></li>
                        <?php
                            }else{

                            }
                        ?>
                    </ul>
                </li>
                <li><a href="logout.php">Sign Out</a></li>
            </ul>
        </header>
        </section>