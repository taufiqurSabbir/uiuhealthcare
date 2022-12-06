<?php
include 'core/task.php';
$user = new Task();

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
    <link rel="stylesheet" href="style\Login_signup.css">
    <title>Document</title>
</head>

<body>
<!-- MENU SECTION STARTS-->
<div class="board">
    <div id="login_page">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt="file not found"></a>
        </div>
        <div class="form">
            <!-- <form action="" class="login_form">
                <div class="body">
                    <div class="row">
                        <h3>LOGIN</h3>
                    </div>
                    <div class="row">
                        <input type="email" name="email" Placeholder="Enter Your Email">
                    </div>
                    <div class="row">
                        <input type="password" name="password" Placeholder="Enter Your Password">
                    </div>
                    <div class="row">
                        <button type="button" class=" btn btn-success key" name="access">LOGIN</button>
                    </div>
                    <div class="row">
                        <p>Are you new? Do you want to <span><a href=""> Signup?</a></span></p>
                    </div>
                </div>

            </form> -->

            <?php
            if(isset($_POST['submit'])){
                if(!empty (( $_POST['name'] && $_POST['email'] && $_POST['password'] ))){
                    $user ->res($_POST['name'],$_POST['password'],$_POST['email']);
                    echo "<P class='alert alert-success'> Registration successfully</P>";

                } else{
                    echo "<P class='alert alert-danger'> Empty username,email,password not allow</P>";
                }
            }

            ?>
            <form class="signup_form" method="post">
                <div class="body">
                    <div class="row">
                        <h3>SIGNUP</h3>
                    </div>
                    <div class="row">
                        <div class="col" style="padding-left: 0rem;" ><input type="text" name="name" Placeholder=" Name" ></div>

                    </div>
                    <div class="row">
                        <input type="email" name="email" Placeholder="Enter Your Email">
                    </div>
                    <div class="row">
                        <input type="password" name="password" Placeholder="Enter Your Password">
                    </div>

                    <div class="row">
                    <select name="role" class="role">
                        <option selected>Select Your Role</option>
                        <option value="2">Student</option>
                        <option value="3">Teacher</option>
                        <option value="4">Doctor</option>
                        <option value="5">Pharmacy Owner</option>
                    </select>
                </div>
                    <div class="row">
                        <input type="submit" name="submit" class=" btn btn-success key" value="REGISTER">
                    </div>
                    <div class="row">
                        <p>Do you want to<span><a href="login.php"> Login?</a></span></p>
                    </div>
                </div>

            </form>

        </div>
        <div class="photoframe">
            <img src="images/signup_photo.png" alt="">
        </div>


    </div>
</div>

<!-- <div id="signup_page">
    <div class="logo"></div>
    <div class="signup_form">

    </div>
    <div class="photoframe"></div>
    <div class="login_link">

    </div>
</div> -->






</div>
<!-- MENU SECTION ENDS -->

<!-- HEADING OF PAGE -->

<!-- BOOTSRAP JS -->
<script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>