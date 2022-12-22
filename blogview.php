<?php

    include "bloglogic.php";

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
    <title>Document</title>
</head>

<body>
<!-- MENU SECTION STARTS-->
<section id="navbar">
    <div class="container">
        <nav>
            <div class="row">
                <div class="col-10">
                    <div class="leftpart">
                        <div class="logo">
                            <a href="Homepage.html"><img src="images/logo.png" alt="file not found"></a>
                        </div>

                        <div class="link">
                            <ul>
                                <li><a href="Pharmacy.php">Pharmacy</a> </li>
                                <li><a href="Doctor_appointment.php">Consultancy</a></li>
                                <li><a href="Blood_request.php">Blood Request</a></li>
                                <li><a href="">Campaign</a></li>
                                <li><a href="Blog.php">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="rightpart">

                        <!-- <button type="button" class="btn btn-light loginkey">LOGIN</button>
                        <button type="button" class="btn btn-success">REGISTER</button> -->
                        <button type="button" class="btn btn-outline-success">Create Blog</button>
                        
                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
<!-- MENU SECTION ENDS -->

    

<!-- BODY SECTION -->
<div class="container mt-5">
        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>
            </div>
            <p>
                <?php echo $q['content_1'];?>
            </p>
            <br>
            <p>
                <?php echo $q['content_2'];?>
            </p>



            <?php }?>



    </div>



        <!-- BOOTSRAP JS -->
        <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>

