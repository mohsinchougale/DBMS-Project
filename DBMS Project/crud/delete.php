<?php
  include 'product.php'
  $id = $_GET['product_id'];

  $sql = "DELETE FROM product WHERE product_id = '$id'"
  if(mysqli_query($conn, $sql))
  {
    header("location:product.php");
  }

  else {
    echo"Error";
  }

?>
