<?php

function create_transaction($conn, $to, $from, $amount) {

    //require("tableshow.php"); 
	require("dbconnect.php");            
        
	// if(! get_magic_quotes_gpc() ) { // if magic qoutes is not set, then add escapes manually and get Posted parameters in local variables
    //     $i_name = addslashes ($_POST['i_name']);
    //     $i_dept = addslashes ($_POST['i_dept']);
    // } else {
    //     $i_name = $_POST['i_name'];
    //     $i_dept = $_POST['i_dept'];
    // }

    $sql_for_row = "SELECT COUNT('transaction_number') from transaction_history";
    $result = $conn->query($sql_for_row);
    while ($row = $result->fetch_assoc()) {
        $i_transaction_number = $row['COUNT(\'transaction_number\')'];
    }
    echo $i_transaction_number;

    $i_to_account = $to;
    $i_from_account = $from;
    $i_amount = $amount;
    $i_date = date('mdY');
    $i_time = date('His');
			
	echo " <br> Instructor table before insertion <br>";
	#show_customer($conn);
   
    $sql = "INSERT INTO transaction_history "."(transaction_number, to_account, from_account, amount, trans_date, trans_time)"." VALUES "."('$i_transaction_number', '$i_to_account', '$i_from_account', '$i_amount', '$i_date', '$i_time')";
            
			//mysqli_select_db($conn,'university');
    $retval = mysqli_query($conn, $sql); // procedural execution of query
         
    if(! $retval ) {
        die('Could not enter data: ' . mysqli_error($conn));
    }
         
    echo "Entered data successfully\n";
			
	echo " <br> Transaction table after insertion <br>";
	//show_transactions($conn);
			
    mysqli_close($conn);    

}

?>