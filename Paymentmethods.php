
<?php

include_once 'Header.php';

?>


<!DOCTYPE html>
<html>
<head>





<link rel="stylesheet" type="text/css" href="Pay.css">
<title>Ship and Pay</title>

</head>

<body>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<div class="row container-fluid">
<form class = "col-8">

     <p><h2>Payment Process</h2></p>

      <article class="card">
        <div class="card-body p-5">
          <ul class="nav bg-light nav-pills rounded nav-fill mb-3" role="tablist">
            <li class="nav-item">
              <a>Bank Transfer</a>
            </li>
          </ul>
              <p>Bank accaunt details</p>
              <dl class="param">
                <dt>BANK:</dt>
                <dd>Capitec</dd>
              </dl>
              <dl class="param">
                <dt>Account number:</dt>
                <dd>1658903275</dd>
              </dl>
              <dl class="param">
                <dt>Name:</dt>
                <dd>Takatso Masilela</dd>
              </dl>
              <dl class="param">
                <dt>BRANCH CODE: </dt>
                <dd>470 010</dd>
              </dl>
              <p><strong>Note:</strong> Please make sure you upload the correct document and check if the you used the correct account number.</p>
              <form action="upload.php" method="post" enctype="multipart/form-data">
                Please upload the proof of payment:
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload file" name="submit">
              </form>
  
      </article>

</form>
<form class = "col-4 flex-row">
  <div class="Location d-flex flex-column">
 
    <div class=" p-2">
      <h2>Summary(<?php $var_items = $_SESSION['items'];

        echo "$var_items items";

    ?>)</h2>
    </div>

    <div class="p-2">
      <p style="color:black;">Subtotal ----------------- <?php  $var_value = $_SESSION['total'];

       echo "R".$var_value;

       ?></p>    
    </div>

    <div class="p-2">
      <p>Shipping(PAXI)-----------  R100</p>
    </div>

    <hr width="300">

    <div class="p-2">
      <p>Total ---------------------  <?php 

      $all_total = 100 + $var_value;

      echo "R".$all_total; ?></p>

    </div>

  </div>


</form>
</div>

  <br>

    <?php

        include_once 'Footer.php';

    ?>

    

</body>
</html>
