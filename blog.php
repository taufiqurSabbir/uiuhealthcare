<?php

    include "bloglogic.php"

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

<section id="banner">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\blog.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Post Your Blogs</h5>
                        <div class="text-center">
                            <a href="createblog.php" class="btn btn-success">CREATE BLOG</a>
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\blog1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Post Your Blogs</h5>
                        <div class="text-center">
                            <a href="createblog.php" class="btn btn-success">CREATE BLOG</a>
                        </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images\blog2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Post Your Blogs</h5>
                        <div class="text-center">
                            <a href="createblog.php" class="btn btn-success">CREATE BLOG</a>
                        </div>
                    
                </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="clr"></div>
</section>
<!-- BANNER ENDS -->

<!-- HEADING OF PAGE -->
<div id="page_top">
    <div class="container">
        <div class="row">
            <div class="top">
                <h1>TRENDING BLOGS</h1>
            </div>
            <div class="caption">
                <p>Here you can find the exclusive blogs posted by the doctors and the teahcers of this</p>
            </div>


        </div>
    </div>
</div>

<!-- BODY SECTION -->
<div id="body_section">
    <div class="sidebar">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Accordion Item #1
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion
                        body.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Accordion Item #2
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                     data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion
                        body. Let's imagine this being filled with some actual content.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                        Accordion Item #3
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                     aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to
                        demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion
                        body. Nothing more exciting happening here in terms of content, but just filling up the
                        space to make it look, at least at first glance, a bit more representative of how this would
                        look in a real-world application.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php foreach($query as $q){?>

            <div class="col-4 col-md-3">
                <a href="blogview.php?id=<?php echo $q['id'];?>"><div class="card" style="width: 15rem;">   <!-- redirecting to blogview page after clicking on the card -->
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title"><?php echo $q ['title'];?></h6>          <!-- fetching blog title -->
                            <p class="card-text"><?php echo $q['content_1'];?></p>          <!-- fetching blog short description -->
                        </div>
                    </div></a>
            </div>
            <?php } ?>
            <div class="col-4 col-md-3">
                <a href="blogview.php?id=<?php echo $q['id'];?>"><div class="card" style="width: 15rem;">  
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
            <div class="col-4 col-md-3">
                <a href=""><div class="card" style="width: 15rem;">
                        <img src="images/blog_pic.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6>blog title</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div></a>
            </div>
        </div>

        <!-- BOOTSRAP JS -->
        <script src="js/boostrap/bootstrap.bundle.js"></script>
</body>

</html>