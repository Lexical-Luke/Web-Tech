<?php 
                    include ('art-data.php'); 
                    function outputCartRow($file, $product, $quantity, $price) { 
                        $price = number_format($price, 2, '.', '');
                        $amount = number_format($price * $quantity, 2, '.', '');

                        echo "<tr> <td> <img class='img-thumbnail' src=$file alt='...'> </td> <td>$product</td> <td>$quantity</td> <td>\$$price</td> <td>\$$amount</td> </tr>";
                    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prac 4 Question 1</title>

    <!-- Bootstrap core CSS 
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
    -->
    <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Prac4Q1.css" rel="stylesheet">

    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<?php 
      include ('art-header.inc.php');
?>

<body>
    <div class="container">

        <div class="page-header">
            <h2>View Cart</h2>
        </div>

        <table class="table table-condensed">
            <tr>
                <th>Image</th>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Amount</th>
            </tr>

            <?php 
                outputCartRow($file1, $product1, $quantity1, $price1);
                outputCartRow($file2, $product2, $quantity2, $price2);
            ?>
            
            <tr class="success strong">
                <td colspan="4" class="moveRight">Subtotal</td>
                <td>$<?php echo $subTotal; ?></td>
            </tr>
            <tr class="active strong">
                <td colspan="4" class="moveRight">Tax</td>
                <td>$<?php echo $tax; ?></td>
            </tr>
            <tr class="strong">
                <td colspan="4" class="moveRight">Shipping</td>
                <td>$<?php echo $shipping; ?></td>
            </tr>
            <tr class="warning strong text-danger">
                <td colspan="4" class="moveRight">Grand Total</td>
                <td>$<?php echo $grandTotal; ?></td>
            </tr>
            <tr>
                <td colspan="4" class="moveRight"><button type="button" class="btn btn-primary">Continue Shopping</button></td>
                <td><button type="button" class="btn btn-success">Checkout</button></td>
            </tr>
        </table>

    </div>

    <?php
    include ('art-footer.inc.php');
    ?>

    <!-- end container -->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
    <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script> -->
</body>

</html>