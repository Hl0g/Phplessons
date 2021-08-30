<?php
setcookie ('token','token', time()-1);
header('Location: /index.php'); 
?>
