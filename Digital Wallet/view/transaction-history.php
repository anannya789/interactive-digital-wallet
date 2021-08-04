
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  	<title>transaction-history</title>
    <script src="./js/search.js"></script>
</head>
<body>

	<h1> Page 2 [Transaction History] </h1>

<h3>Digital Wallet</h3>

<p>1.<a href="../view/Home.php">Home</a> 2.<a href="../view/transaction-history.php">Transaction History</a></p>

 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">	

<h2>Total Records:</h2>

<?php

    //Db connect";
    $connection = new db();
    $conn=$connection->OpenCon();
    $userQuery=$connection->ShowTransaction($conn,"transaction");     

    //$conn->query($sql);
    echo "<table border='1' style='width:100%'>
    <tr>
    <th>ID</th>
    <th>Transaction Category</th>
    <th>To</th>
    <th>Amount</th>
    <th>Transferred On</th>
  </tr>";

    if($userQuery->num_rows > 0)
    {
      while($row=$userQuery->fetch_assoc())
      {    
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['category'] . "</td>";
        echo "<td>" . $row['to_number'] . "</td>";
        echo "<td>" . $row['amount'] . "</td>";
        echo "<td>" . $row['time']. "</td>";
        echo "</tr>";
      }
      echo "</table>";
      $conn->close();
    }
  ?>

</form>
</body>
</html>