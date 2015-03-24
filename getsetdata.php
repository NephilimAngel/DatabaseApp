<?php 
	$site_url = "http://localhost/database/";
	$data = json_decode(file_get_contents($site_url."json/dbConfig.json"),true);

	$user = $data["username"];
	$pass = $data["password"];
	$connStr = $data["connectionString"];
	$db = $data["databaseName"];

	$conn = new mysqli($connStr,$user,$pass,$db);

	$query = "INSERT INTO standards (firstname,lastname,email,state,country) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['mail']."','".$_POST['state']."','".$_POST['country']"')";
	$conn->query($query);

	$query = "SELECT * FROM standards";
	$result = $conn->query($query);

	$tbl = "data";
	$num = 0;

	if ($result->num_rows > 0) {
	    // output data of each row

		$tbl = "<table class='table table-striped'>";
		$tbl .= "<thead><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>State</th><th>Country</th></tr></thead>";

	    while($row = $result->fetch_assoc()) {
	    	$num++;
	    	$tbl .= "<tr>";
	        $tbl .= "<td>".$num."</td>";
	        $tbl .= "<td>".$row["firstname"]."</td>";
	        $tbl .= "<td>".$row["lastname"]."</td>";
	        $tbl .= "<td>".$row["email"]."</td>";
	        $tbl .= "<td>".$row["state"]."</td>";
	        $tbl .= "<td>".$row["country"]."</td>";

	        $tbl .=	"</tr>";
	    }

	    $tbl .= "</table>";

	    echo $tbl;
	}


?>