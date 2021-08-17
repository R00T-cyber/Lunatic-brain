<?php 


	include_once 'Header.php';
?>

<?php

include('includes/dbh.inc.php');

$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query($conn,"SELECT * FROM `products` WHERE `code`='$code'");
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["shopping_cart"])) {
	$_SESSION["shopping_cart"] = $cartArray;
	$status = "<div class='box'>Product is added to your cart!</div>";
}else{
	$array_keys = array_keys($_SESSION["shopping_cart"]);
	if(in_array($code,$array_keys)) {
		$status = "<div class='box' style='color:red;'>
		Product is already added to your cart!</div>";	
	} else {
	$_SESSION["shopping_cart"] = array_merge($_SESSION["shopping_cart"],$cartArray);
	$status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Shop</title>

    
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Cart.css">
    
</head>




<body>



    <section = class="container-fluid">
        <div class= "container-fluid">
        <div class ="row">


            <!-- <?php
            // if(!empty($_SESSION["shopping_cart"])) {
            // $cart_count = count(array_keys($_SESSION["shopping_cart"]));
            ?>
        -->
            <!-- <div class="cart_div">
            <a href="Cart.php"><img src="cart-icon.png" /> Cart<span><?php// echo $cart_count; ?></span></a>
            </div> -->


            <?php
            //}

            $result = mysqli_query($conn,"SELECT * FROM `products`");
            while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='col-md-4'>
                    <div class='product_wrapper'>
                        <form method='post' action=''>
                        <input type='hidden' name='code' value=".$row['code']." />
                        <img class='image img-fluid img-thumbnail' src='".$row['image']."' />
                        <li class='name'>".$row['name']."</li>
                        <div class='price'>R".$row['price']."</div>
                        <button type='submit' class='btn btn-outline-dark'>Add to Cart</button>
                        </form>
                        </div></div>";
                    }
            mysqli_close($conn);
            ?>

            <div style="clear:both;"></div>

            <div class="message_box" style="margin:10px 0px;">
            <?php echo $status; ?>
            </div>

        </div>
        </div>
    </section>

    <script src="scripts/Lunatic_jav.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script type="bootstrap/js/popper.min.js"></script>
    <script type="bootstrap/js/jquery-3.6.0.min.js"></script> 

    <br>
    <br>
<?php 


	include_once 'Footer.php';
?>
</body>
</html>