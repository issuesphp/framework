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
			echo "0 results";
		}

		// return $result;



	}

	public static function chosenOne($tableName, $id)
	{ 		

		$conn = IpModel::getConnection();

		$sql = "SELECT * FROM ".$tableName." WHERE id=".$id;		

// Execute the SQL query
		$result = mysqli_query($conn, $sql);


	// Process the result set
		if (mysqli_num_rows($result) > 0) {

			$row = mysqli_fetch_assoc($result);

			return $row;

		} else {
			echo "0 results";
		}

		// return $result;
	}

	public static function getConnection()
	{ 		

		$connec = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		// Check connection
		if (!$connec) {
			die("Connection failed: " . mysqli_connect_error());
		}
		// echo "Connected successfully";

		return $connec;		

	}			
}
