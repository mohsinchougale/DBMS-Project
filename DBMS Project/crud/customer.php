<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sports Store</title>
    <!-- linking icons used -->
    <script src="https://kit.fontawesome.com/0a49b85a0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- <link rel="stylesheet" href="style.css"> -->
  </head>
  <body>
    <?php require "include/navbar.php" ?>

    <main>
      <div class="container text-center">
        <!-- Adding padding in y-direction of unit 4 -->
        <!-- We have kept the background dark and the text light, with rounded edges  -->
        <h1 class="py-4 bg-dark text-light rounded">
          <!-- the i class="fas fa-running" is for the icon. -->
          <i class="fas fa-running"></i>

          MLS Stores
        </h1>

        <div class="d_flex justify-content-center">
          <form class="w-50" action="insert.php" method="post">
            <div class="py-2">
              <!-- Name -->
              <div class="form-group" ><i class="far fa-id-card"></i>
                <label for="Customer Name">Name</label>
                <div class="row">
                  <div class="col">
                    <!-- First Name -->
                    <input type="text" autocomplete="off" class="form-control" placeholder="First name" name="firstname">
                  </div>
                  <!-- Last Name -->
                  <div class="col">
                    <input type="text" autocomplete="off" class="form-control" placeholder="Last name" name="lastname">
                  </div>
                </div>
              </div>



              <!-- Address -->
              <!-- 1) City -->
              <div class="form-row">
                <div class="form-group col-md-4"><i class="fas fa-city"></i>
                  <label for="inputCity">City</label>
                  <input type="text" class="form-control" id="inputCity" name="city" >
                </div>
                <!-- 2) State -->
                <div class="form-group col-md-4">
                  <label for="inputState">State</label>
                  <input type="text" class="form-control" id="inputState" name="state" >
                </div>

                <!-- 3) Pin Code -->
                <div class="form-group col-md-2">
                  <label for="inputZip">Pin Code</label>
                  <input type="text" class="form-control" id="inputZip" name="zip">
                </div>
              </div>




              <div class="number and gender">
                <!-- Phone Number -->
                <div class="form-group col-md-6"><i class="fas fa-mobile-alt"></i>
                  <label for="cust_age">Phone Number</label>
                  <input type="text" class="form-control" id="cust_age" placeholder="+91" name="phone">
                </div>



                  <!-- Gender -->
                  <div class="form-group col-md-4"><i class="fas fa-venus-mars"></i>
                    <label for="inputGender">Gender</label>
                    <select id="inputGender" class="form-control" name="gender">
                      <option selected hidden>Choose...</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>

              </div>


                <!-- Age -->
                <div class="form-group col-md-4">
                  <label for="inputEmail4">Age</label>
                  <input type="number" class="form-control" id="cust_age" placeholder="Age" name="age" >
                </div>


                <!-- Product -->
                <div class="form-group col-md-4"><i class="far fa-futbol"></i>
                  <label for="inputGender">Product</label>
                  <select id="inputGender" class="form-control" name="product_id">
                    <option selected hidden>Choose...</option>
                    <option value="P1">Nike mercurial vapor</option>
                    <option value="P2">Arsenal FC Home Jersey</option>
                    <option value="P3">Adidas Swim shorts</option>
                    <option value="P4">Swimming goggles xbase</option>
                    <option value="P5">Nike air jordan</option>
                    <option value="P6">Adidas Adipower Vector</option>
                    <option value="P7">Puma Evopower Football</option>
                    <option value="P8">Puma Evospeed Bat</option>
                    <option value="P9">Adidas Flexilite gloves</option>
                    <option value="P10">Nike Dominate Basketball</option>

                  </select>
                </div>



              <button type="submit" class="btn btn-primary" value="Submit">Register</button>
            </div>
          </form>
      </div>
    </main>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>
