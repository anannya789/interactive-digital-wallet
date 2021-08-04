<?php 

    require'../model/dbconnect.php';
    require'../model/dbread.php';
	$category = $to_number = $amount = "";
	$isValid = true;
	$selectCategoryErr = $tOErr = $amoUntErr = "";
	$successfulMessage = $errorMessage = "";

	if($_SERVER['REQUEST_METHOD'] === "POST") {
		$category = $_POST['category'];
		$to_number = $_POST['to_number'];
		$amount = $_POST['amount'];
		if(empty($category)) {
			$selectCategoryErr = "Select category can not be empty!";
			$isValid = false;
		}
		if(empty($to_number)) {
			$tOErr = "To can not be empty!";
			$isValid = false;
		}
		if(empty($amount)) {
			$amoUntErr = "Amount can not be empty!";
			$isValid = false;
		}
if($isValid) {
			$successfulMessage = "Successfull";
		}
			else {
				$errorMessage = "Please fill up the fields properly";
			}
		
	}


		$time = date("Y-m-d H:i:s");
		if (!empty($_POST['category']) || !empty($_POST['to_number']) || !empty($_POST['amount']))
		{
			$connection = new db();
			$conn=$connection->OpenCon();    
			$userQuery=$connection->Transaction($conn, "transaction", $category ,$to_number , $amount ,$time); 
					
			$flag=1;
			if($flag==1)
			{
				$successfulMessage = "New Record Inserted"; 
			}
			else
			{ 
				$errorMessage = "error occurred while Inserting New Record";
			}	
			$conn->close();
		}



 ?>


