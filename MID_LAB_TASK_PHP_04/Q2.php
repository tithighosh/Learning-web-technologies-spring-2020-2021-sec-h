
  <b>Question 2<br></b>
<i>
	Write a PHP script to calculate the VAT (Value Added Tax) over an amount .<br>
	Hints:VAT = 15%of the amount
</i>
<br>
<br>
<?php

$vat = 15;//VAT = 15%of the amount
$price = 100;
$vatToPay = ($price / 100) * $vat;
$totalPrice = $price+ $vatToPay;
echo "Price = ".$price. "<br />";
echo "Vat = ".$vat. "<br />";
echo "Price With Vat = ".$totalPrice

  ?>