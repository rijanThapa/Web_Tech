<?php

setcookie('user_id', '', time() - 3600, '/');
setcookie('username', '', time() - 3600, '/');
setcookie('email', '', time() - 3600, '/');
setcookie('address', '', time() - 3600, '/');
setcookie('phone_number', '', time() - 3600, '/');


header('Location: login.php');
exit();
?>
