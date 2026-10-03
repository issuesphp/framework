<?php

// namespace App\Models;

namespace Issues\Model;


use config\Connection;

// include 'MainController.php';

// include 'MainModel.php';

// include 'Models/User.php';

   // include '../app/Http/Controllers/UserController.php';

include __DIR__ . '../../../config/connection.php';

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class User extends Model
class MainModel 
{	

	// public static function test()
	public function test()
	{ 

		echo "test";

	}	
	public static function getAll($tableName)
	{ 

		$conn = Connection::getConnection();

		// return $conn; 

		// $conn = mysqli_connect('localhost', 'jonathan', '123', 'foroworkers');

		// $sql = "SELECT * FROM users";
		$sql = "SELECT * FROM ".$tableName;
// Execute the SQL query
		$result = mysqli_query($conn, $sql);

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

		mysqli_close($conn);

	}		
}
