<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Laundry</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="icon" type="image/png" href="img/cleaning.png" />

</head>

<body>
    <div class="container">
        <div class="login">
            <form action="proses_login.php" method="post">
                <h1>Login</h1>
                <hr>
                <p>We Serve You Better</p>
                <label for="">Username</label>
                <input type="username" name="username" class="form-control" id="exampleInputEmail1" />
                <label for="">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" />
                <button type="submit">Login</button>
                <p>
                    <!-- <a href="#">Forgot Password?</a> -->
                </p>
            </form>
        </div>
        <div class="right">
            <img src="img/crown-01.png" alt="">
        </div>
    </div>
</body>

</html>