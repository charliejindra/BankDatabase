<!DOCTYPE html>
<html>

   <head>
      <title>Add New Record in MySQL Database</title>
   </head>

   <body>
   <div style="height:auto; background-color: lightblue;" align="center">
      
	  <br><br><br><br>

<?php
	  
	require("../tableshow.php");
    require("../dbconnect.php");
    require("../insertFuncs.php");
        
	// if(! get_magic_quotes_gpc() ) { // if magic qoutes is not set, then add escapes manually and get Posted parameters in local variables
    //     $i_name = addslashes ($_POST['i_name']);
    //     $i_dept = addslashes ($_POST['i_dept']);
    // } else {
    //     $i_name = $_POST['i_name'];
    //     $i_dept = $_POST['i_dept'];
    // }

    $i_acctNo = $_POST['i_acctNo'];
    $i_customerID = $_POST['i_customerID'];
    $i_acctType = $_POST['i_acctType'];
    $i_balance = $_POST['i_balance'];
			
	echo " <br> Instructor table before insertion <br>";
	show_account($conn);
   
    $sql = "INSERT INTO account "."(account_number, customer_ID, account_type, balance) "."VALUES ".
               "('$i_acctNo','$i_customerID','$i_acctType', '$i_balance')";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	echo " <br> Instructor table after insertion <br>";
    show_account($conn);
    
    create_transaction($conn, $i_acctNo, $i_acctNo, $i_balance);
    echo("initial deposit logged in Transactions.");
			
    mysqli_close($conn);    

?>

   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>