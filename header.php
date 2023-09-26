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
    <link rel="stylesheet" href="css/header.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <section>
        <header class="menu">
            <label for=""><img src="img/crown logo.png" alt="" width="100px"></label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="service.php">Service</a></li>
                <li><a href="#">Order</a>
                    <ul class="dropdown">
                        <li><a href="view_order.php">View Order</a></li>
                        <li><a href="add_order.php">Add Order</a></li>
                    </ul>
                </li>
                <li><a href="#">Member</a>
                    <ul class="dropdown">
                        <li><a href="view_member.php">View Member</a></li>
                        <li><a href="add_member.php">Add Member</a></li>
                    </ul>
                </li>
                <li><a href="#">Employee</a>
                    <ul class="dropdown">
                        <li><a href="view_employee.php">View Employee</a></li>
                        <li><a href="add_employee.php">Add Employee</a></li>
                    </ul>
                </li>
                <li><a href="logout.php">Sign Out</a></li>
            </ul>
</header>
    </section>