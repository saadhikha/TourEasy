<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p><a href="index.html">Click here to go to the main page cause we are lazy af!</a></p>
</html>
