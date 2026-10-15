<?php

namespace Issues\Model;

use Issues\Model\ConnectionInterface;

// require __DIR__ . '../../../config/Database.php';

// require __DIR__ . '../../../config/App.php';

// include 'ConnectionInterface.php';

use App\Config\Database;

use PDO;


class IpModel implements ConnectionInterface  
{

	public $conn;


	function __construct()
	{
		// ini_set('display_errors', 1);
		// ini_set('display_startup_errors', 1);

		// error_reporting(E_ALL);

		// return $this->getDebug(APP_STATE);		

	}		

	public static function chosenAll($tableName,$dbNumber = null)
	{ 

		// echo "a";

		// exit;


		// $conn = IpModel::getConnection();

		$conn = self::getConnection($dbNumber);

		// $conn = $this->getConnection();

		// $conn = $this->conn;

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName;
// Execute the SQL query
		// $result = mysqli_query($conn, $sql);

		$result = $conn->query($sql);


		// $result = mysqli_query($this->conn, $sql);

		// Process the result set
		if ($result->rowCount() > 0) {

			// $row = $result->fetch();

			// $row = $result->setFetchMode(PDO::FETCH_NUM);

			$row = $result->fetch(\PDO::FETCH_OBJ);

			// return $result->setFetchMode(PDO::FETCH_NUM);

			return $row;

		} else {

			// echo "0 results";

		}	



	}

	public static function chosenOne($tableName, $id,$dbNumber = null)
	{ 

		

		// $conn = IpModel::getConnection();

		$conn = self::getConnection($dbNumber);

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName." WHERE id=".$id;
			// $sql = "SELECT * FROM '{$tableName}' WHERE id='{$id}'";
		// $sql = "SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Doe'";

// Execute the SQL query
		// $result = mysqli_query($conn, $sql);

		$result = $conn->query($sql);

		// $result = mysqli_query($this->conn, $sql);

		if ($result->rowCount() > 0) {

			// $row = $result->fetch();

			$row = $result->fetch(\PDO::FETCH_OBJ);

			return $row;

		} else {

			// echo "0 results";
			
		}



	}

	public static function chosenOrLost($tableName, $id,$dbNumber = null)
	{ 

		

		// $conn = IpModel::getConnection();

		$conn = self::getConnection($dbNumber);

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

			// $row = $result->fetch();

			$row = $result->fetch(\PDO::FETCH_OBJ);

			return $row;

		} else {

			// echo "0 results";
			header("HTTP/1.1 404 Not Found");
			$error = shell_exec('php resources/views/errors/error_404_querys.php');
			echo $error;
			
		}

	}

	public static function slipk($tableName, $id,$dbNumber = null)
	{ 

		

		// $conn = IpModel::getConnection();

		$conn = self::getConnection($dbNumber);

		// $sql = "SELECT * FROM users";
		$sql = "DELETE FROM ".$tableName." WHERE id=".$id;			

		$result = $conn->query($sql);

		// if (empty($result)) {

		// 	// echo "0 results";
		// 	header("HTTP/1.1 404 Not Found");
		// 	$error = shell_exec('php resources/views/errors/error_404_querys.php');
		// 	echo $error;

		// } 



	}
	

	

	public static function getConnection($dbNumber = null)
	// public function getConnection5()
	{ 


		switch (DATABASE::DB_DRIVER) {
			case "mysql":

			switch ($dbNumber) {
				case 1:

				// $conn = self::getPdo(DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD);
				$conn = self::getPdo(DATABASE::DB_HOST, DATABASE::DB_DATABASE, DATABASE::DB_USERNAME, DATABASE::DB_PASSWORD);


				return $conn;
				
				break;		
				case 2:	

				// $conn = self::getPdo(DB_SECOND_HOST, DB_SECOND_DATABASE, DB_SECOND_USERNAME, DB_SECOND_PASSWORD);

				$conn = self::getPdo(DATABASE::DB_SECOND_HOST, DATABASE::DB_SECOND_DATABASE, DATABASE::DB_SECOND_USERNAME, DATABASE::DB_SECOND_PASSWORD);

				return $conn;	

				break;

				default:

				// echo "Limit Connection";

				// $conn = self::getPdo(DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD);
				$conn = self::getPdo(DATABASE::DB_HOST, DATABASE::DB_DATABASE, DATABASE::DB_USERNAME, DATABASE::DB_PASSWORD);

				return $conn;							
			}

			
			// $conn = self::getPdo(DB_HOST, DB_DATABASE, DB_USERNAME, DB_PASSWORD);

			// return $conn;			


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

	public static function getpdo($servername, $dbname, $username, $password) 
	{

		// echo "test";

		try {
			$connec = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

			$connec->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				// echo "Connected successfully";

			return $connec;	

		} catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		}	


	}

	public function getDebug($appState) 
	{

		// echo "test";

		if ($appState = 'development') {

			ini_set('display_errors', 1);
			ini_set('display_startup_errors', 1);

			error_reporting(E_ALL);	

		} else {
			
			ini_set('display_errors', 0);
			ini_set('display_startup_errors', 0);

		}		


	}    							
}
