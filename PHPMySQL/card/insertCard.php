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
        
	// if(! get_magic_quotes_gpc() ) { // if magic qoutes is not set, then add escapes manually and get Posted parameters in local variables
    //     $i_name = addslashes ($_POST['i_name']);
    //     $i_dept = addslashes ($_POST['i_dept']);
    // } else {
    //     $i_name = $_POST['i_name'];
    //     $i_dept = $_POST['i_dept'];
    // }

    $i_card_number = $_POST['i_card_number'];
    $i_card_type = $_POST['i_card_type'];
    $i_account_number = $_POST['i_account_number'];
    $i_credit = $_POST['i_credit'];
			
	echo " <br> Card table before insertion <br>";
	#show_customer($conn);
   
    $sql = "INSERT INTO card "."(card_number, card_type, account_number, credit)"." VALUES "."('$i_card_number', '$i_card_type', '$i_account_number', '$i_credit')";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	show_card($conn);
			
    mysqli_close($conn);    

?>

   <hr width="50">
<a href="../Frontpage.html" style="color:red;font-weight:bold;">Home</a>
<hr width="50">
   </div>
</body>
</html>