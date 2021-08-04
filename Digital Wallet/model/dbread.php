<?php 

	function Transaction($conn, $table, $category ,$to_number , $amount ,$time)
	{
		$stmt = $conn->prepare("INSERT INTO $table (category ,to_number , amount ,time) VALUES (?, ?, ?, ?)");
		$stmt -> bind_param("ssss",$category ,$to_number , $amount ,$time);
		$stmt -> execute();  
		$stmt -> close();
		return $stmt; 
	}
	
	function ShowTransaction($conn,$table)
	{
		$stmt = $conn->query("SELECT * FROM  $table");
		return $stmt;
	}

	function CloseCon($conn)
	{
		$conn -> close();
	}

 ?>