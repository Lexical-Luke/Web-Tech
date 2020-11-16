<?php
  //file1 data
  $file1 = '116010.jpg';
  $product1 = 'Artist Holding a Thistle';
  $quantity1 = 3;
  $price1 = 500;
  $amount1 = $price1*$quantity1;

  //file2 data
  $file2 = '113010.jpg';
  $product2 = 'Self-portrait in a Straw Hat';
  $quantity2 = 1;
  $price2 = 700;
  $amount2 = $price2*$quantity2;

  //totals
  $subTotal = $amount1 + $amount2;
  $tax = $subTotal * 0.10;
  if($subTotal > 2000)
  {
    $shipping = 0;
  }
  else{
    $shipping = 100;
  }

  $grandTotal = $subTotal + $tax + $shipping;

?>