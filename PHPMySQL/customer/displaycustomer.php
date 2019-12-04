<!DOCTYPE html>
<html> 
<body >
<title>Pig Banking - Display Customer</title>
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>


<?php
require("../dbconnect.php");
require("../tableshow.php");
show_customer($conn);
?>



<br><br><br><br>
<hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
