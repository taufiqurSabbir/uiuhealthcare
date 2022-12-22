<?php

    include "config.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS LINK HERE -->
    <!-- BOOTSTRAP CSS -->
    <link rel="stylesheet" href="style/boostrap/bootstrap.min.css">
    <!-- OTHER LINKS -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,900&family=Open+Sans:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style/blogs-policy-pharmacy.css">
    <title>Health.io</title>
</head>
<body>
<section id="navbar">
    <div class="container">
        <nav>
            <div class="row">
                <div class="col-10">
                    <div class="leftpart">
                        <div class="logo">
                            <a href="index.php"><img src="images/logo.png" alt="file not found"></a>
                        </div>

                        <div class="link">
                            <ul>
                                <li><a href="Pharmacy.php">Pharmacy</a> </li>
                                <li><a href="Doctor_appointment.html">Consultancy</a></li>
                                <li><a href="Blood_request.html">Blood Request</a></li>
                                <li><a href="">Campaign</a></li>
                                <li><a href="Blogs.html">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="rightpart">

                        <a href="login.php" button type="button" class="btn btn-outline-danger">LOGOUT</a>
                        <!-- <button type="button" class="btn btn-success">REGISTER</button> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
<div class="container mt-5">
    <form method="GET">
        <input type="text" name="title" placeholder="Blog Title" class="form-control 
        bg-dark text-white my-3 text-center">
        <textarea name="content_1" placeholder="Short Description" class="form-control bg-dark text-white my-3"></textarea>
        <textarea name="content_2" placeholder="Detailed Content" class="form-control bg-dark text-white my-3"></textarea>
        Banner Photo: <br>
        <input type="file" name="image" accept="image/png, image/jpg, image/jpeg" class="box" required>
        <button name="new_post" class="btn btn-dark">Add Post</button>
    </form>
</div>



    
</body>
</html>