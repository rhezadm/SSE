<?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: The server time is: {$time}\n\n";
flush();
//or you can add the query for your data here

// require_once("connecting_fone.php");
// or
//     $servername = "";
//     $username = "";
//     $password = "";
//     $dbname = "";

//     // Create connection
//     $conn = new mysqli($servername, $username, $password, $dbname);

//     // Check connection
//     if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }  

// $sql = "your favorite query";
// $result = $conn->query($sql);
// $arrayName = array();
// if($result->num_rows > 0) {
// 			while($rows = $result->fetch_assoc()) {
// 				echo 'data: ' . json_encode($rows) . "\n\n";
// 			}
// } else {
// 	echo "data: 0 results";
// }

// $conn->close();
// flush();
?>
