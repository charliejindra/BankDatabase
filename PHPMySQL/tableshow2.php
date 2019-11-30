<?php

// function show_account($conn) {

// 	//include "dbconnect.php";

// 	$sql = "SELECT account_number, customer_ID, account_type, balance FROM account";
// 	$result = $conn->query($sql); // object oriented execution of query

// 		if ($result->num_rows > 0) {
			
// 			echo "<br><h3> Account <h3> <br>";
			
// 			echo '<table border>';
// 			echo '<thead><tr>';
// 			echo '<th>'."account_number".'</th>'.'<th>'."customer_ID".'</th>'.'<th>'."account_type".'</th>'.'<th>'."balance".'</th>';
// 			echo '</tr></thead>';
// 			echo '<tbody>';

// 			while($row = $result->fetch_assoc()) {
// 				echo '<tr>';
// 				echo "<td>" . $row["account_number"]. "</td>";
// 				echo "<td>" . $row["customer_ID"]. "</td>";
// 				echo "<td>" . $row["account_type"]. "</td>";
// 				echo "<td>" . $row["balance"]. "</td>";
// 				echo '</tr>';
// 			}
			
// 			echo '</tbody>';
// 			echo '</table>';
			
// 			// output data of each row
			
			
// 		} 
// 		else {
// 			echo "0 results";
// 		}
// 	//$conn->close();
// }


unction show_customer($conn) {

	//include "dbconnect.php";

	$sql = "SELECT customer_ID, username, password, account_holder, Birthday, SSN, phone_number, email, address1, address2 FROM customer";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Customer Table<h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."customer_ID".'</th>'.'<th>'."username".'</th>'.'<th>'."password".'</th>'.'<th>'."account_holder".'</th>'.'<th>'."Birthday".'</th>'.'<th>'."SSN".'</th>'.'<th>'."phone_number".'</th>'.'<th>'."email".'</th>'.'<th>'."address1".'</th>'.'<th>'."address2".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["customer_ID"]. "</td>";
				echo "<td>" . $row["username"]. "</td>";
				echo "<td>" . $row["password"]. "</td>";
				echo "<td>" . $row["account_holder"]. "</td>";
				echo "<td>" . $row["Birthday"]. "</td>";
				echo "<td>" . $row["SSN"]. "</td>";
				echo "<td>" . $row["phone_number"]. "</td>";
				echo "<td>" . $row["email"]. "</td>";
				echo "<td>" . $row["address1"]. "</td>";
				echo "<td>" . $row["address2"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}



unction show_card($conn) {

	//include "dbconnect.php";

	$sql = "SELECT card_number, card_type, account_number, credit FROM card";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Cards <h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."card_number".'</th>'.'<th>'."card_type".'</th>'.'<th>'."account_number".'</th>'.'<th>'."credit".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["card_number"]. "</td>";
				echo "<td>" . $row["card_type"]. "</td>";
				echo "<td>" . $row["account_number"]. "</td>";
				echo "<td>" . $row["credit"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}




unction show_transaction($conn) {

	//include "dbconnect.php";

	$sql = "SELECT transaction_number, from_account, to_account, amount, trans_date, trans_time FROM transaction_history";
	$result = $conn->query($sql); // object oriented execution of query

		if ($result->num_rows > 0) {
			
			echo "<br><h3> Transaction History<h3> <br>";
			
			echo '<table border>';
			echo '<thead><tr>';
			echo '<th>'."transaction_number".'</th>'.'<th>'."from_account".'</th>'.'<th>'."to_account".'</th>'.'<th>'."amount".'</th>'.'<th>'."trans_date".'</th>'.'<th>'."trans_time".'</th>';
			echo '</tr></thead>';
			echo '<tbody>';

			while($row = $result->fetch_assoc()) {
				echo '<tr>';
				echo "<td>" . $row["transaction_number"]. "</td>";
				echo "<td>" . $row["from_account"]. "</td>";
				echo "<td>" . $row["to_account"]. "</td>";
				echo "<td>" . $row["amount"]. "</td>";
				echo "<td>" . $row["trans_date"]. "</td>";
				echo "<td>" . $row["trans_time"]. "</td>";
				echo '</tr>';
			}
			
			echo '</tbody>';
			echo '</table>';
			
			// output data of each row
			
			
		} 
		else {
			echo "0 results";
		}
	//$conn->close();
}



?>