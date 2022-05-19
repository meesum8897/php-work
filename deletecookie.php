<?php 
session_start();
setcookie("name","Meesum",time()-60,"/","",0);
setcookie("city","karachi",time()-60,"/","",0);

session_destroy();
unset($_SESSION["name"]);
unset($_SESSION["pass"]);
header("Location:cookies.php");
 ?>