<?php
include "admin_header.php";
?>

<!--Main layout-->
<main style="margin: 10px 0px; 20px 0px">
  <div class="container pt-4">
  <div id="page_top">
        <div class="container">
            <div class="row">
                <div class="top">
                    <h1>Post an Blog</h1>
                </div>
            </div>
        </div>
    </div>

  <form action="add_blog.php" method="post" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Title</label>
  <input type="text"  name="title" class="form-control" id="formGroupExampleInput" placeholder="Enter Title her">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Caption</label>
  <input type="text"  name="caption" class="form-control" id="formGroupExampleInput" placeholder="Enter Title her">
</div>

<div class="mb-3">
  <img src="" alt="click on me to see preview" class="preview" style="width:15rem; display:block;" onclick="getPreview();" alt="">
  
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Image</label>
  <input type="file" name="image" onchange="readURL(this);" class="form-control" id="exampleFormControlInput1" placeholder="cover photo insert here">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Content 1</label>
  <input type="text" name="c1"  class="form-control" id="formGroupExampleInput2" placeholder="Enter brief text here ">
</div>
  
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Content 2</label>
  <textarea type="text"  name="c2" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="text-center">
  <button type="submit" class="btn btn-success">Post</button>
</div>

  </form>





<?php
if($_SERVER ['REQUEST_METHOD'] == 'POST'){
  $stat="SELECT * FROM user where email = '$User_email'";
  $id=Query($stat);
  $id=mysqli_fetch_assoc($id);
  $id=$id['id'];
  
  $title= $_POST['title'];
  $c1= $_POST['c1'];
  $c2= $_POST['c2'];
  $caption= $_POST['caption'];
  $upload_image=$_FILES['image'];
  //print_r($upload_image);
  //print_r($_POST);
  //die;
  
  $explode= explode(".", $upload_image['name']);
  $ext=end($explode);
  
  $allow_format= ['jpeg', 'jpg', 'JP{G', 'png', 'PNG'];
  if(in_array($ext,$allow_format)){
    
      $image_name=$id . "." .$ext;
      $newlocation="../images/". $image_name;
      move_uploaded_file($upload_image['tmp_name'], $newlocation);
        $check="SELECT COUNT(*) as t FROM image";
        $check=Query($check);
        $check=mysqli_fetch_assoc($check);
        $image_id=$check['t'];
        $checkblog="SELECT COUNT(*) as t FROM blogs";
        $checkblog=Query($checkblog);
        $checkblog=mysqli_fetch_assoc($checkblog);
        $blog_id=$checkblog['t'];
        echo $blog_id;
        $image_name=$id .$blog_id. "." .$ext;
        $insertblog="INSERT INTO blogs(id, title, content_1, content_2, image_id, writer_id_FK) VALUES ('$blog_id', '$title', '$c1', '$c2','$image_id', '$id')";
        $insert= "INSERT INTO image( id, caption, location, name, user_fk) VALUES ( '$image_id', '$caption', '$newlocation','$image_name', '$id')";
        $reesult=Query($insert);
        $rlt=Query($insertblog);
  }
  else {
    echo "not right format";
  }
  
  
    


  //print_r($_POST);
  //echo $id . $post_at;
  //die();
  // $stat="INSERT INTO blogs( title, content_1, content_2, image_id, writer_id_FK) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')";
  // Query($stat);
  // header("location:blood_post.php");
  

}

?>

  </div>
</main>
<!--Main layout-->
<?php
include "admin_footer.php";
?>