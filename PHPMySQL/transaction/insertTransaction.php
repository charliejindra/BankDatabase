<!DOCTYPE html>
<html>

   <head>
      <title>Pig Banking - Insert Transaction</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php

    require("../tableshow.php"); 
    require("../dbconnect.php");  
    require("../insertFuncs.php");

    $sql_for_row = "SELECT COUNT('transaction_number') from transaction_history";
    $result = $conn->query($sql_for_row);
    while ($row = $result->fetch_assoc()) {
        $i_transaction_number = $row['COUNT(\'transaction_number\')'];
    }
    echo $i_transaction_number;

    $i_to_account = $_POST['i_to_account'];
    $i_from_account = $_POST['i_from_account'];
    $i_amount = $_POST['i_amount'];

    create_transaction($conn, $i_to_account, $i_from_account, $i_amount);

	show_transactions($conn);
			
    mysqli_close($conn);    

?>

   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>