<?php

// Naming the variables
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$product_id = $_POST['product_id'];

if(!empty($firstname) || !empty($lastname) || !empty($city) || !empty($state) || !empty($zip) ||
    !empty($phone) || !empty($gender) || !empty($age) || !empty($product_id))
    {
      $host = "localhost";
      $dbUsername = "root";
      $dbPassword = "";
      $dbname = "test";

      //Create connection
      $conn = new mysqli($host,$dbUsername,$dbPassword,$dbname);

      //If there is error during connection
      if(mysqli_connect_error())
      {
        die('Connection Error('.mysqli_connect_error.')'.mysqli_connect_error());
      }

      else
      {
        $SELECT = "SELECT age FROM customer WHERE age = ? LIMIT 1";
        $INSERT = "INSERT INTO customer (firstname, lastname, city, state, zip, phone, gender, age, product_id)
        VALUES (?,?,?,?,?,?,?,?,?)";



        //Preparing Satements
        $stmt = $conn->prepare($SELECT);
        // i is for integer
        // d is for double
        // s is for string
        $stmt->bind_param("i", $age);
        $stmt->execute();
        $stmt->bind_result($age);
        $stmt->store_result();
        //Variable which shos number of rows
        $rnum = $stmt->num_rows;

        //If database is empty
        if($rnum == 0)
        {
          $stmt = $conn->prepare($INSERT);
          // s is for string
          // i is for integer
          $stmt->bind_param("ssssiisis",$firstname,$lastname,$city,$state,$zip,$phone,$gender,$age,$product_id);
          $stmt->execute();
          echo "New record inserted successfully";
        }

        //Repeat Insertion
        else
        {
          echo "Already Registered";
        }

        $stmt->close();
        $conn->close();
      }

    }

else
{
  echo "All field are required";
  die();
}

?>
