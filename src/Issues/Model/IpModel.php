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

	public static function chosenAll($tableName)
	{ 

		// echo "a";

		// exit;


		$conn = IpModel::getConnection();

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName;
// Execute the SQL query
		// $result = mysqli_query($conn, $sql);

		$result = $conn->query($sql);


		// $result = mysqli_query($this->conn, $sql);

		// Process the result set
		if ($result->rowCount() > 0) {

			// $row = $result->fetch();

			$row = $result->setFetchMode(PDO::FETCH_NUM);

			return $row;

		} else {

			// echo "0 results";

		}	



	}

	public static function chosenOne($tableName, $id)
	{ 

		

		$conn = IpModel::getConnection();

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName." WHERE id=".$id;
			// $sql = "SELECT * FROM '{$tableName}' WHERE id='{$id}'";
		// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";

// Execute the SQL query
		// $result = mysqli_query($conn, $sql);

		$result = $conn->query($sql);

		// $result = mysqli_query($this->conn, $sql);

		if ($result->rowCount() > 0) {

			$row = $result->fetch();

			return $row;

		} else {

			// echo "0 results";
			
		}



	}

	public static function chosenOrLost($tableName, $id)
	{ 

		

		$conn = IpModel::getConnection();

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName." WHERE id=".$id;
			// $sql = "SELECT * FROM '{$tableName}' WHERE id='{$id}'";
		// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";

// Execute the SQL query
		// $result = mysqli_query($conn, $sql);

		$result = $conn->query($sql);

		// $result = mysqli_query($this->conn, $sql);

		// Process the result set
		if ($result->rowCount() > 0) {

			$row = $result->fetch();

			return $row;

		} else {

			// echo "0 results";
			header("HTTP/1.1 404 Not Found");
			$error = shell_exec('php resources/views/errors/error_404_querys.php');
			echo $error;
			
		}

	}
	

	

	public static function getConnection()
	{ 


		switch (DB_DRIVER) {
			case "mysql":

			// echo "aqui";
			// exit;

			$servername = DB_HOST;

			$username = DB_USERNAME;

			$password = DB_PASSWORD;

			$dbname = DB_DATABASE;

			try {
				$connec = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

				$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo "Connected successfully";

				return $connec;	

			} catch(PDOException $e) {
				echo "Connection failed: " . $e->getMessage();
			}			
				

			break;		
			case "mysqli":	

			echo "mysqli";

			// $connec = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

			// if (!$connec) {
			// 	die("Connection failed: " . mysqli_connect_error());
			// }


			// return $connec;

			break;

			case "pgsql":	

			echo "pgsql";	

			break;

			case "sqlite":	

			echo "sqlite";	

			break;
			default:

			echo "No driver Found";							
		}

			

		

	}							
}
