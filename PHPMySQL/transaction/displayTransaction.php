<!DOCTYPE html>
<html> 
<title>Pig Banking - Display Transactions</title>
<body >
<div style="height:900px; background-color: lightblue;" align="center">
<br><br><br><br>


<?php
require("../dbconnect.php");
require("../tableshow.php");
show_transactions($conn);
?>



<br><br><br><br>
<hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
</div>
</body> </html>
