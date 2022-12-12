<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $medicine_name = $_POST['medicine_name'];
   $medicine_price = $_POST['medicine_price'];
   $medicine_image = $_POST['medicine_image'];
   $medicine_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$medicine_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'medicine already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$medicine_name', '$medicine_price', '$medicine_image', '$medicine_quantity')");
      $message[] = 'medicine added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>medicines</title>

    <!-- custom css file link -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php
if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};
?>

<?php include 'header.php'; ?>

<div class="container">

<section class="medicines">

   <h1 class="heading">latest medicines</h1>

   <div class="box-container">

      <?php
      
      $select_medicines = mysqli_query($conn, "SELECT * FROM `medicines`");
      if(mysqli_num_rows($select_medicines) > 0){
         while($fetch_medicine = mysqli_fetch_assoc($select_medicines)){
      ?>

      <form action="" method="post">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_medicine['image']; ?>" alt="">
            <h3><?php echo $fetch_medicine['name']; ?></h3>
            <div class="price">$<?php echo $fetch_medicine['price']; ?>/-</div>
            <input type="hidden" name="medicine_name" value="<?php echo $fetch_medicine['name']; ?>">
            <input type="hidden" name="medicine_price" value="<?php echo $fetch_medicine['price']; ?>">
            <input type="hidden" name="medicine_image" value="<?php echo $fetch_medicine['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
            </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>