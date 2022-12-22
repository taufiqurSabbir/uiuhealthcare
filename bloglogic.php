<?php

$conn = mysqli_connect('localhost','root','','health_io') or die('connection failed');

    if(!$conn){
        echo "<h3 class= 'container bg-dark text-center p-3 text rounded-lg mt-5'>Not able to
        establish Database Connection</h3>";
    }

    $sql = "SELECT * FROM blogs";
    $query = mysqli_query($conn, $sql);

    if(isset($_REQUEST["new_post"])){
        $title = $_REQUEST["title"];
        $content_1 = $_REQUEST["content_1"];
        $content_2 = $_REQUEST["content_2"];
        $image = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];

        
        $sql = "INSERT INTO blogs(title, content_1, content_2, image) VALUES('$title', '$content_1', '$content_2', '$image')";
        mysqli_query($conn, $sql);

        header("Location: blog.php?info=added");
        exit();
    }

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $sql = "SELECT * FROM blogs WHERE id = $id";
        $query = mysqli_query($conn, $sql);
    }


?>

