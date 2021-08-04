<?php include "../controller/Home.php";?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<script src="./js/validation.js"></script>
</head>
<body>
<h1> Page 1 [Home] </h1>

<h3>Digital Wallet</h3>

<p>1.<a href="../view/Home.php">Home</a> 2.<a href="../view/transaction-history.php">Transaction History</a></p>



 <form action="../controller/Home.php" method="GET" name="mFrom" onsubmit="getData(this); return false;">">
 	
<h3>Fund Transfer:</h3>

<label for="select category">Select Category : 
<span style="color: red;">*</span>: </label>
		<select id="" name="category">
			<option value="">Select a value</option>
			<option value="Merchant Pay">Merchant Pay</option>
			<option value="Mobile Recharge ">Mobile Recharge </option>
			<option value="Send Money">Send Money</option>
			<span style="color: red;"> <?php echo $selectCategoryErr; ?> </span>
		</select>
			<br><br>

			<label for="to">To: <span style="color: red;">*</span>:</label>
			<input type="text" name="to_number" id="to">
			<span style="color:red"><?php echo $tOErr; ?></span>

			<br><br>

			<label for="amount">Amount:
			<span style="color: red;">*</span>:</label>
			<input type="text" name="amount" id="amount">
			<span style="color:red"><?php echo $amoUntErr; ?></span>
			<br><br>

			<input type="submit" name="submit" value="Submit">
 </form>

 <p style="color:green;"><?php echo $successfulMessage; ?></p>
	<p style="color:red;"><?php echo $errorMessage; ?></p>
	<br>
	
	<script>
		function isValid()
	{
		var flag = true;
		var selectCategoryErr = document.getElementById("selectCategoryErr");
		var tOErr = document.getElementById("tOErr");
		var amoUntErr = document.getElementById("amoUntErr");
		var selectcategory = document.forms["mFrom"]["selectcategory"].value;
		var to = document.forms["mFrom"]["to"].value;
		var amount = document.forms["mFrom"]["amount"].value;

		if(selectcategory === ""){

			flag = false;
			selectCategoryErr.innerHTML = "please fill up the selectcategory";
		}

		if(to === ""){

			flag = false;
			tOErr.innerHTML = "please fill up the to";
		}
		if(amount === ""){

			flag = false;
			amoUntErr.innerHTML = "please fill up the amount";
		}
			return flag;
		}
	</script>


</body>
</html>