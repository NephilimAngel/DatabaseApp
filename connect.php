<?php

	if($_POST["isTest"] == 1){
		$conn = new mysqli($_POST["connStr"],$_POST["user"],$_POST["pass"]);

		if($conn->connect_error){
			echo json_encode([

					"alert"=>"Cant Connect to the database Mate!",
					"type"=>"err"

				]);
		}else{
			echo json_encode([
				"alert"=>"Connection to database successful Cheers!",
				"type"=>"success"
			]);
		}
		$conn->close();

	}else{ 
		$data = array(
			'username' => $_POST["user"],
			'password' => $_POST["pass"],
			'connectionString' => $_POST["connStr"],
			'databaseName' => $_POST["dbName"]
		);

		$conn = new mysqli($_POST["connStr"],$_POST["user"],$_POST["pass"]);

		if($conn->connect_error){
			echo json_encode([

					"alert"=>"Cant Connect to the database Mate!",
					"type"=>"err"

				]);
		}else{

			file_put_contents('json/dbConfig.json', json_encode($data));

			$sql = "CREATE DATABASE ".$_POST["dbName"];


			if ($conn->query($sql) === TRUE) {
				$conn->close();
				
				$conn = new mysqli($_POST["connStr"],$_POST["user"],$_POST["pass"],$_POST["dbName"]);
				$sql = "CREATE TABLE standards (
							id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
							name VARCHAR(30) NOT NULL,
							fathername VARCHAR(30),
							email VARCHAR(50),
							state VARCHAR(50),
							country VARCHAR(50),
							reg_date TIMESTAMP
						)";

				if($conn->query($sql) == TRUE){
					echo json_encode([
						"alert"=>"Connection to database successful, Database Created!",
						"type"=>"success"
					]);
				}else{
					echo json_encode([
						"alert"=>"Error creating database: " . $conn->error,
						"type"=>"err"
					]);
				}	
				
			}else{
				echo json_encode([
					"alert"=>"Error creating database: " . $conn->error,
					"type"=>"err"
				]);
				
			}

			$conn->close();
			
		}
	}
?>