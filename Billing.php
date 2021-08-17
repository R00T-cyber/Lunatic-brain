

<?php

include_once 'Header.php';

?>


<!DOCTYPE html>
<html>
<head>

  <title>Billing</title>
  <link rel="stylesheet" type="text/css" href="Billing.css">

</head>

<body>

<div class="row container-fluid">

<form class = "col-8" action="includes/Billing.inc.php" method="post">

  <div class=" Location row">   
  <h2 class="Billingh2s"style ="padding-bottom: 50px;">Customer Information</h2>

  <h1 style="color:black;">Billing Address</h1>
  </div>
  <hr width="850">

  <div class="row Location">
    <div class="form-group col-md-6">
      <label for="inputEmail4">First Name</label>
      <input type="text" name ="BillFirst" class="form-control" id="inputEmail4" placeholder="First Name">
    </div>

    <div class="form-group col-md-6">
      <label for="inputPassword4">Last Name</label>
      <input type="text" name ="BillLast" class="form-control" id="inputPassword4" placeholder="Last Name">
    </div>
  </div>

 <div class="row Location">

  <div class="form-group col-md-6">
    <label for="inputAddress">Address Line 1</label>
    <input type="text" name ="AddressLine1"class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="form-group col-md-6">
    <label for="inputAddress2">Address Line 2</label>
    <input type="text" name = "AddressLine2" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
</div>
 
  <div class="row Location">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" name = "City" class="form-control" id="inputCity">
    </div>

    <div class="form-group col-md-4">
      <label for="inputState">Province</label>
      <select name = "Provinces" id="inputState" class="form-control">

        <option>Eastern Cape</option>
        <option>Free State</option>
        <option>Gauteng</option>
        <option>Kwa-Zulu Natal</option>
        <option>Limpopo</option>
        <option>Mpumalanga</option>
        <option>Northern Cape</option>
        <option>North West</option>
        <option>Western Cape</option>
      </select>

    </div>

    <div class="form-group col-md-2">
      <label for="inputZip">Zip Code</label>
      <input name = "ZipCode" type="text" class="form-control" id="inputZip">
    </div>

    <?php 
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "emptyinput") {
        echo "<p style='color:blue;'>Fill in all fields</p>";
      }
    }
    ?>
 
  </div>
  <hr width="850">
  <div class="form-group-col-md-1">
    <a href="Cart.php"style="color:black;">Return To Cart</a>
 
    <a><button  name = "submit" class= "btn btn-dark" style="float:right;">Continue to Checkout</button></a>
  </div>

</form>

<form class = "col-4 flex-row">
  <div class="Location d-flex flex-column">
 
    <div class="p-2">
      <h2>Summary(<?php $var_items = $_SESSION['items'];

        echo "$var_items items";

    ?>)</h2>
    </div>
  
    <div class="p-2">
      <p style="color:black;">Subtotal -----------------  <?php  $var_value = $_SESSION['total'];

       echo "R".$var_value;

       ?> </p>    
    </div>

    <div class="p-2">
      <p>Shipping(PAXI)</p>
    </div>

    <hr width="300">

    <div class="p-2">
      <p>Total ---------------------  <?php echo "R".$var_value; ?></p>
    </div>

  </div>
</form>

</div>

<br>
<br>

 <?php

        include_once 'Footer.php';

    ?>

</body>

    <script src="scripts/Lunatic_jav.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="bootstrap/js/popper.min.js"></script>
    <script type="bootstrap/js/jquery-3.6.0.min.js"></script>
</html>