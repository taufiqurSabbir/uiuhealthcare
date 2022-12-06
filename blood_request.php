<?php
include 'core/task.php';
$user = new Task();

session_start();
if(!isset($_SESSION['id'])){
    header("Location:login.php" );
}
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

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        a {
            text-decoration: none;
            font-size: 1vw;
            color: #000;

        }

        .clr {
            clear: both;
        }

        ul li {
            list-style: none;
            text-transform: capitalize;

        }

        :root {
            --primary_color: #1D9160;
            --secondary_color: #FFFFFF;
            --teritary_color: #9a9c94;

        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
        ;
            font-weight: 400;
            margin-bottom: .85rem;


        }

        p {

            font-size: .8rem;
            font-family: 'Montserrat', sans-serif;
        ;
            font-weight: 400;
        }

        button {
            font-family: 'Montserrat', sans-serif;
        ;
            font-weight: 900;
            margin: 1.25rem 1rem 0 0;
            padding: 0.5rem 1rem;

        }

        .key {
            border: 1px var(--primary_color) solid;
            background-color: var(--secondary_color);
        }

        .card-body h5 {
            font-size: 1rem;
            color: var(--primary_color);
            text-align: center;

        }

        .card-body h6 {
            font-size: 0.85rem;
            text-align: center;
            color: var(--teritary_color);
        }

        #navbar nav {
            padding: 0.25rem;

        }

        #navbar nav ul li a {
            color: var(--primary_color);
        }

        #navbar nav ul li {
            font-family: 'Montserrat', sans-serif;
        ;
            font-weight: 900;
            font-size: clamp(1rem, 0.75rem, 2rem);
            margin: 2rem 0.85rem 0 0;
            list-style: none;
            float: left;
        }

        #navbar nav .leftpart,
        #navbar nav .rightpart {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }


        #navbar nav .logo {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }

        #navbar nav .logo img {
            display: block;
            width: 15rem;
            max-width: 100%;
            margin: 0.75rem;
        }

        .loginkey {
            border: 1px var(--primary_color) solid;
            background-color: var(--secondary_color);
        }
    </style>
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
                                <li><a href="dashboard.php">Dashboard</a> </li>
                                <li><a href="pharmacy.php">Pharmacy</a> </li>
                                <li><a href="consultancy.php">Consultancy</a></li>
                                <li><a href="blood_list.php">Blood Request</a></li>
                                <li><a href="">My Posts</a></li>



                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="rightpart">
                        <!-- Example single danger button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-success dropdown-toggle" style="padding: 0rem 1rem"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="images/settings.png" alt="" style="display: inline-block; width:1rem; ">
                                Edit
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="#">Settings </a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">LOGOUT</a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </nav>
    </div>
</section>
<!-- MENU SECTION ENDS -->


<!-- BODY SECTION -->
<div id="body_section">
    <div class="container">
        <div class="heading m-5">
            <h5 style="font-weight: 900; text-align: center;">Request for Blood</h5>
        </div>
        <div class="row" style="display: flex; justify-content:center">
            <div class="col-4">

                <?php

                if(isset($_POST['submit'])){



                    if(!empty (( $_POST['blood_type'] && $_POST['number'] && $_POST['details'] ))){
                        $user ->blood_request($_SESSION['id'],$_POST['blood_type'],$_POST['number'],$_POST['details']);
                        echo "<P class='alert alert-success'> Blood Request Added successfully</P>";

                    } else{
                        echo "<P class='alert alert-danger'> Empty value not allow</P>";
                    }
                }

                ?>

                <form method="post">
                    <div class="board" style="border-right:5px #1D9160 solid ;">
                        <div class="row my-2">
                            <div class="col-6">
                                <label for=""> Blood type:</label>
                            </div>
                            <div class="col-6">
                                <select name="blood_type" id="" >
                                    <option value="O+"> O+</option>
                                    <option value="O-"> O-</option>
                                    <option value="A+"> A+</option>
                                    <option value="AB+"> AB+</option>
                                    <option value="A-"> A-</option>


                                </select>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col-6">
                                <label for=""> Contact:</label>
                            </div>
                            <div class="col-6">
                                <input type="number" name="number" style=" width:8rem">

                            </div>
                        </div> <div class="row my-2">
                            <div class="col-2">
                                <label for=""> Details:</label>
                            </div>
                            <div class="col-10">
                                    <textarea name="details" id="" cols="30" rows="10">


                                    </textarea>



                            </div>
                            <div class="row my-2" style="display: flex; justify-content:center;">

                                <input type="submit" name="submit" class="btn btn-success" style="width: 5rem;" value="Post">
                            </div>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

<!-- BOOTSRAP JS -->
<script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>