<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_cheung = "localhost";
$database_cheung = "cheung_DogStore";
$username_cheung = "cheung";
$password_cheung = "henry8160";
$cheung = mysql_pconnect($hostname_cheung, $username_cheung, $password_cheung) or trigger_error(mysql_error(),E_USER_ERROR); 
?>