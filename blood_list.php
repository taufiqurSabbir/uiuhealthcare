<?php
include 'core/task.php';
$user = new Task();

$all_blood = $user->blood_all();


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
    <link rel="stylesheet" href="style\blogs-policy-pharmacy.css">
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
                            <a href="index.php"><img src="images/logo.png" alt="file not found"></a>
                        </div>

                        <div class="link">
                            <ul>
                                <li><a href="pharmacy.php">Pharmacy</a> </li>
                                <li><a href="consultancy.php">Consultancy</a></li>
                                <li><a href="blood_list.php">Blood Request</a></li>
                                <li><a href="">Campaign</a></li>
                                <li><a href="Blogs.html">Blogs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="rightpart">

                        <button type="button" class="btn btn-light loginkey">LOGIN</button>
                        <button type="button" class="btn btn-success">REGISTER</button>
                    </div>
                </div>
            </div>



        </nav>
    </div>
</section>
<!-- MENU SECTION ENDS -->

<!-- HEADING OF PAGE -->
<div id="page_top">
    <div class="container">
        <div class="row">
            <div class="top">
                <h1>BLOOD REQUEST</h1>
            </div>
            <div class="caption">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus aliquam alias expedita.
                    Vero voluptate libero consequuntur consectetur, veritatis nihil minima autem, earum mollitia
                    odio
                    voluptatem corporis dolor delectus magnam quas?</p>
            </div>


        </div>
    </div>
</div>

<!-- BODY SECTION -->
<div id="body_section">
    <div class="blood_post">

        <form action="">
            <div class="container">
                <div class="row">
                    <button type="button" > POSTS</button>
                    <button type="button" style="margin-left: 0rem;"> DONARS</button>
                </div>
                <!-- OBJECT TO BE USE FOR POSTS -->


                <?php foreach($all_blood as $blood):?>
                <div class="profile" style="border-right: 2rem #1D9160 solid; margin-bottom: 1rem;">
                    <div class="row">
                        <div class="col-2">
                            <img src="images/doc- (1).png" alt="">
                        </div>
                        <div class="col-8">
                            <div class="body">

                                <h4 name="requester_name">Requester</h4>
                                <h5>Blood type: <span name="blood-type"> <?=$blood['blood_type']?></span></h5>
                                <h6 name="info">Contact details <br>
                                    <?=$blood['details']?>
                                </h6>
                            </div>
                        </div>
                        <div class="col-2">
                            <div class="modals-btn">

                                <button type="button" class="btn btn-success" name="phoneno."> Call NOW </button>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endforeach;?>








        </form>
    </div>
</div>

<!-- BOOTSRAP JS -->
<script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>