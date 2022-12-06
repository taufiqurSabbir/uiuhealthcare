<?php

session_start();
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

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        a{
            text-decoration: none;
            font-size: 1vw;
            color: #000;

        }
        .clr{
            clear: both;
        }
        ul li{
            list-style: none;
            text-transform: capitalize;

        }
        :root{
            --primary_color:#1D9160;
            --secondary_color:#FFFFFF;
            --teritary_color:#9a9c94;

        }

        h1,h2,h3,h4,h5,h6{
            font-family: 'Montserrat', sans-serif;;
            font-weight: 400;
            margin-bottom: .85rem;


        }
        p{

            font-size: .8rem;
            font-family: 'Montserrat', sans-serif;;
            font-weight: 400;
        }

        button{
            font-family: 'Montserrat', sans-serif;;
            font-weight: 900;
            margin: 1.25rem 1rem 0 0;
            padding: 0.5rem 1rem;

        }
        .key{
            border:1px var(--primary_color) solid ;
            background-color: var(--secondary_color);
        }
        .card-body h5{
            font-size: 1rem;
            color: var(--primary_color);
            text-align: center;

        }

        .card-body h6{
            font-size: 0.85rem;
            text-align: center;
            color: var(--teritary_color);
        }

        #navbar nav{
            padding:0.25rem ;

        }
        #navbar nav ul li a{
            color: var(--primary_color);
        }
        #navbar nav ul li{
            font-family: 'Montserrat', sans-serif;;
            font-weight: 900;
            font-size: clamp(1rem, 0.75rem, 2rem);
            margin: 2rem 0.85rem 0 0;
            list-style: none;
            float: left;
        }
        #navbar nav .leftpart, #navbar nav .rightpart{
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }


        #navbar nav .logo{
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        #navbar nav .logo img{
            display: block;
            width: 15rem;
            max-width: 100%;
            margin: 0.75rem;
        }

        .loginkey{
            border:1px var(--primary_color) solid ;
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
                            <a href="index.php"><img src="images/logo.png" alt="file not found"></a>
                        </div>

                        <div class="link">
                            <ul>
                                <li><a href="Student_dashboard.html">Dashboard</a> </li>
                                <li><a href="pharmacy.php">Pharmacy</a> </li>
                                <li><a href="Doctor_appointment.html">Consultancy</a></li>
                                <li><a href="blood_request.php">Blood Request</a></li>
                                <li><a href="Blood_request.html">My Posts</a></li>



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
        <div class="row my-5">
            <div class="col">
                <div class="card">

                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="moon_profile" style="background-color: #1D9160; width: 5rem; height: 5rem; border-radius: 50%;">
                                    <img src="" alt="" >
                                </div>
                            </div>
                            <div class="col-4">

                                <h4 class="card-title" style="text-align: left;"> <b> <?php echo( $_SESSION['name'])?> </b></h4>
                                <p class="card-text">With supporting text below as a natural lead-in to additional
                                    content.</p>
                            </div>
                            <div class="col-4">

                                <button type="btn btn-success"> Edit Profile</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="request_blood">
                    <div class="card">
                        <div class="card-header">
                            Request Blood
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: left;">POST AN REQUEST FOR BLOOD IN OUR
                                COMMUNITY</h5>
                            <a href="blood_request.php" class="btn btn-success">POST AN REQUEST</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="avail_nd_payment">
                    <div class="card">

                        <div class="card-body">
                            <div class="row">
                                <div class="col">
                                    <h5 class="card-title" style="text-align: left;">PAYMENT for Consultancy</h5>

                                </div>
                                <div class="col"><a href="#" class="btn btn-success"
                                                    style=" display: block;float: right;">GO TO PAYMENT</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-6">
                <div class="schedule my-5" >
                    <div class="heading">
                        <h5 >Appointment Schedule</h5>
                    </div>
                    <table class="table table-success table-striped" style="border:1px #000 solid ;">
                        <thead>
                        <tr>

                            <th scope="col">Doctor name</th>
                            <th scope="col">TIME SLOT</th>
                            <th scope="col">DATE</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">FARIAH HASIN</td>
                            <td>12:30-1:30</td>
                            <td>DD/MM?YY</td>
                        </tr>
                        <tr>
                            <td scope="row">SAIMA HASIN</td>
                            <td>12:30-1:30</td>
                            <td>DD/MM?YY</td>
                        </tr>
                        <tr>
                            <td scope="row">SUMAN HASIN</td>
                            <td>12:30-1:30</td>
                            <td>DD/MM?YY</td>
                        </tr>

                        </tbody>
                    </table>

                </div>
            </div>
            <div class="col-6">
                <div class="appointment_history m-5" >
                    <div class="schedule">
                        <div class="heading">
                            <h5 >Appointment History</h5>
                        </div>
                        <table class="table table-success table-striped" style="border:1px #000 solid ;">
                            <thead>
                            <tr>

                                <th scope="col">Doctor Name</th>
                                <th scope="col">DATE</th>
                                <th scope="col">ATTENDED</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>

                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                            </tr>
                            <tr>

                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                            </tr>
                            <tr>

                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                            </tr>
                            <tr>

                                <td scope="row">SAIMA HASIN</td>
                                <td>DD/MM/YY</td>
                                <td>YES/NO</td>
                            </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="receipt">
                <div class="heading">
                    <h5 >Pharmacy Receipt</h5>
                </div>
                <table class="table table-success table-striped" style="border:1px #000 solid ;">
                    <thead>
                    <tr>

                        <th scope="col">DATE</th>
                        <th scope="col">RECEIPT NUMBER</th>
                        <th scope="col">TOTAL AMOUNT</th>
                        <th scope="col">FILE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>DD/MM/YY</td>
                        <td>########################</td>
                        <td>$$$$$$$$$$$$$$$$$$</td>
                        <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                    </tr>
                    <tr>
                        <td>DD/MM/YY</td>
                        <td>########################</td>
                        <td>$$$$$$$$$$$$$$$$$$</td>
                        <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                    </tr>
                    <tr>
                        <td>DD/MM/YY</td>
                        <td>########################</td>
                        <td>$$$$$$$$$$$$$$$$$$</td>
                        <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                    </tr>
                    <tr>
                        <td>DD/MM/YY</td>
                        <td>########################</td>
                        <td>$$$$$$$$$$$$$$$$$$</td>
                        <td><button type="button" class="btn btn-success"> Download Receipt</button></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- BOOTSRAP JS -->
<script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>