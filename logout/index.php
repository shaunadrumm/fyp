<?php 
$cookie_name1 = 'ID_my_site';
$cookie_name2 = 'Key_my_site';
unset($_COOKIE[$cookie_name1]);
unset($_COOKIE[$cookie_name2]);
// empty value and expiration one hour before
$res1 = setcookie($cookie_name1, '', time() - 3600);
$res2 = setcookie($cookie_name2, '', time() - 3600);
header("Location: ../login/");
 ?> 
