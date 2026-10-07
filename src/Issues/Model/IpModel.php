<?php

namespace Issues\Model;

use Issues\Model\ConnectionInterface;

require __DIR__ . '../../../config/Database.php';

include 'ConnectionInterface.php';


class IpModel implements ConnectionInterface  
{

	public $conn;


	function __construct()
	{
		ini_set('display_errors', 1);
		ini_set('display_startup_errors', 1);

		error_reporting(E_ALL);

	}	

	// public static function test()
	public function test()
	{ 

		echo "test";

	}	
	public static function chosenAll($tableName)
	{ 

		// echo HOST;

		// print_r($this->conn);

		// exit; 

		// // return $conn; 

		// // echo "s";

		// // exit;

		// // $conn = Connection::getConnection();

		// $conn = Connection::getConnection($host, $username, $password, $database);



		// return $conn; 

		// $conn = mysqli_connect('localhost', 'jonathan', '123', 'foroworkers');

		// $this->conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		// $conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		$conn = IpModel::getConnection();

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName;
// Execute the SQL query
		$result = mysqli_query($conn, $sql);

		// $result = mysqli_query($this->conn, $sql);

		// Process the result set
		if (mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			return $row;
  
		} else {
			// echo "0 results";
		}

		// return $result;

// Process the result set
// 		if (mysqli_num_rows($result) > 0) {
  // // Output data of each row
// 			while($row = mysqli_fetch_assoc($result)) {
// 				// echo "email: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
// 				// echo "email: " . $row["email"];
// 				return $row["email"];
// 			}
// 		} else {
// 			echo "0 results";
// 		}

// 		mysqli_close($this->conn);

	}

	public static function chosenOne($tableName, $id)
	{ 

		

		$conn = IpModel::getConnection();

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName." WHERE id=".$id;
			// $sql = "SELECT * FROM '{$tableName}' WHERE id='{$id}'";
		// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";

// Execute the SQL query
		$result = mysqli_query($conn, $sql);


	// Process the result set
		if (mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			return $row;
  
		} else {
			// echo "0 results";
		}

		// return $result;

	// Process the result set
// 		if (mysqli_num_rows($result) > 0) {
  // // Output data of each row
// 			while($row = mysqli_fetch_assoc($result)) {
// 				echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
// 			}
// 		} else {
// 			echo "0 results";
// 		}

// 		mysqli_close($conn);

	}

	public static function chosenOrLost($tableName, $id)
	{ 

		

		$conn = IpModel::getConnection();

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName." WHERE id=".$id;
			// $sql = "SELECT * FROM '{$tableName}' WHERE id='{$id}'";
		// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";

// Execute the SQL query
		$result = mysqli_query($conn, $sql);


	// Process the result set
		if (mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			return $row;
  
		} else {
			// echo "0 results";
			header("HTTP/1.1 404 Not Found");
		$error = shell_exec('php resources/views/errors/error_404_querys.php');
		echo $error;
		}

		// return $result;

	// Process the result set
// 		if (mysqli_num_rows($result) > 0) {
  // // Output data of each row
// 			while($row = mysqli_fetch_assoc($result)) {
// 				echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
// 			}
// 		} else {
// 			echo "0 results";
// 		}

// 		mysqli_close($conn);

	}

	public static function getConnection()
	{ 

		// ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);

		// error_reporting(E_ALL);

		// echo HOST;

		// exit;

		$connec = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		// Check connection
		if (!$connec) {
			die("Connection failed: " . mysqli_connect_error());
		}
		// echo "Connected successfully";

		return $connec;

		// if (empty($connec)) {

		// 	// $connec = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		// 	// return $connec;
		// 	die("Connection failed: " . mysqli_connect_error());

		// } else {

		// 	die("Connection failed: " . mysqli_connect_error());

		// }
		

		// // Check connection
		// if (!$conn) {
		// 	die("Connection failed: " . mysqli_connect_error());
		// }else
		// echo "Connected successfully";

		// return $connec;

		// exit; 

		

	}			
}
