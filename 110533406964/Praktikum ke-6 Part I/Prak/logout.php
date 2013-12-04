<?php 

session_start();

session_destroy();
echo "Anda Logout <br />";
echo " <a href='login.php'> << Back </a>";
?>