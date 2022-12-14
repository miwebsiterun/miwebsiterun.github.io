<?php
$to = "mohaninfinity@yahoo.com";
$subject = $_POST["form-floating-4"];
$txt = "Hello world!";
$headers = "From:". $_POST["form-floating-4"] . "webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>
