<?php
$conn=mysqli_connect('localhost','root','','laundry'); //connect ke database
/* check connection */
if (mysqli_connect_errno()) { //memunculkan error berada di baris ke berapa
    printf("Connect failed: %s\n", mysqli_connect_error()); //memunculkan error
    exit();
}
?>