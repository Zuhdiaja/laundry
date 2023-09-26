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
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="icon" type="image/png" href="img/cleaning.png" />
    <title>Home</title>
</head>
<body>
<?php
    include "navbar.php";
?>
        <!-- poster -->
<section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
        <div class="row justify-content-between gy-5">
            <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
                <h2 data-aos="fade-up"><b>Welcome <?=$_SESSION['role']?> <?=$_SESSION['nama_user']?> to website <span>Crown Laundry!</span></b></h2>
                <p data-aos="fade-up" data-aos-delay="100">Helping you set professional clothing goals by doing your laundry in the finest way possible.</p>
                <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                    <a href="#contact" class="btn-book-a-table">Contact Us!</a>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
                <img src="img/home1.png " class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
            </div>
        </div>
    </div>
</section>

<!-- copas yt -->
<div class="wrapper">
        <!-- untuk home -->
        <section id="home">
            <img src="img/cleaning.png" width="350px"/>
            <div class="kolom-intro">
                <p class="deskripsi">Let us wash #yourlaundry</p>
                <h2><b>Introduce</b></h2>
                <p>We are the biggest and cheapest laundry service in Malang.
                We can help you to wash your dirty clothes, shirts, t-shirts, trousers, pants, and many more.</p> 
                <p>Because we are the biggest, we serve you as fast and clean as possible.
                Come to us on Danau Tambingan No. 21 Sawojajar, or you just call os on 081673912844</p>
                <!-- <p><a href="" class="tbl-pink">Pelajari Lebih Lanjut</a></p> -->
            </div>
        </section>

        <!-- untuk courses -->
        <section id="courses">
            <div class="kolom-diskon">
                <p class="deskripsi">You Will Need This</p>
                <h2><b>Fragrant Discount</b></h2>
                <p>We offer a variety of interesting things. Your clothes will smell good when they are in your hands again. You don't worry about our service because you are our majesty.</p>
                <p>Discounts for first customers and member discounts will be waiting for you at any time. You will get a lot of benefits. What are you waiting for? Let's let us wash #yourlaundry</p>
                <!-- <p><a href="" class="tbl-biru">Pelajari Lebih Lanjut</a></p> -->
            </div>
            <img src="img/soap.png" width="350px"/>
        </section>
        <section id="contact">
            <div class="tengah">
                <div class="kolom-kontak">
                    <p class="deskripsi">Enjoy your time</p>
                    <h2><b>This is our contact</b></h2>
                    <p>Contact us immediately if you need help to lighten the job of washing your clothes. We will be happy to receive and provide services to you</p>
                </div>
                <div class="social" target="_blank">
                    <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-telegram"></i></a>
                    <a href="#" target="_blank"><i class="fa-solid fa-map-pin"></i></a>
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </section>
    </div>
<!-- end -->
</body>
</html><br>
<?php
    include "footer.php";
?>