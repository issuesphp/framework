<?php

namespace Issues\Model;

require __DIR__ . '../../../config/Database.php';


class MainModel  
{

	public $conn;

	public static function getAll($tableName)
	{ 	

		$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName;
// Execute the SQL query
		$result = mysqli_query($conn, $sql);

		// $result = mysqli_query($this->conn, $sql);

		return $result;

// Process the result set
		if (mysqli_num_rows($result) > 0) {
  // Output data of each row
			while($row = mysqli_fetch_assoc($result)) {
				// echo "email: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				// echo "email: " . $row["email"];
				return $row["email"];
			}
		} else {
			echo "0 results";
		}

		mysqli_close($this->conn);

	}
			
}
