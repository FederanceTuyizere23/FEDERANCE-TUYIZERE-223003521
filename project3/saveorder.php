<?php
include 'db.php';

$sql="INSERT INTO orders(name,email,phone,menu,address,date)
VALUES('$_POST[name]','$_POST[email]','$_POST[phone]',
'$_POST[menu]','$_POST[address]','$_POST[date]')";

$conn->query($sql);

echo "Order Saved!";
?>