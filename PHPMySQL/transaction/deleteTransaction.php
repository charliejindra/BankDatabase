<!DOCTYPE html>
<html>

   <head>
      <title>Delete Transaction History</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php
	  
	require("../tableshow.php"); 
	require("../dbconnect.php");            
        
    $transaction_number = $_POST['transaction_number'];
			
	echo " <br> transaction_history table before delete <br>";
	show_transactions($conn);
   
    $sql = "DELETE FROM transaction_history WHERE transaction_number = $transaction_number";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	echo " <br> transaction_history table after delete <br>";
	show_transactions($conn);
			
    mysqli_close($conn);    

?>
   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>