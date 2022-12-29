<html>
<head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<h1 align="center">YOUR CART</h1>
<BODY bgcolor="AntiqueWhite">
<br><br>
<style>
.flex-parent { display: flex; } 
.jc-center { justify-content: center; } 
button.margin-right { margin-right: 40px; }


table.GeneratedTable {
  width: 80%;
  background-color: #fdf3e7;
border-collapse: separate;
  border-width: 3px;
  border-color: #a7d2d7;
  border-style: ridge;
  color: #000000;
}

 

table.GeneratedTable td, table.GeneratedTable th {
  border-width: 3px;
  border-color: #a7d2d7;
  border-style: ridge;
  padding: 15px;
}

 

table.GeneratedTable thead {
  background-color: #dbfdff;
}
</style><br><br><br><br><br><br><br>
<table class="GeneratedTable" align="center">
  <thead>
    <tr>
      <th>Product Name</th>
      <th>Price</th>
      <th>Color</th>
      <th>Size</th>
	  <th></th>
    </tr>
  </thead>

</head>

 <?php
$conn= mysqli_connect('localhost','root','','shoeshop');

if(!$conn)
{
	die("Nu se poate deschide");
}
$i=3;
$variabila ="DELETE  FROM cart WHERE Product='ELISE 266'";
$variabila1 ="SELECT Product,Price,Color,Size FROM cart";

$result=mysqli_query($conn,$variabila);
$result1=mysqli_query($conn,$variabila1);

if($result1->num_rows>0) {

while($row = $result1->fetch_assoc()) {
echo "<tr>";
        echo "<td>" . $row['Product'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "<td>" . $row['Color'] . "</td>";
        echo "<td>" . $row['Size'] . "</td>";
       	 echo "<td>" . '<a href="'.$i.'delete.php">DELETE</a>' . "</td>";
		$i++;
  echo "</tr>";
  }
    echo "</table>";

	}
$conn->close();
?>
<br><br><br><br><br><br><br><br><br>
<div class="flex-parent jc-center">
<p><button class="green margin-right w3-black w3-padding-large w3-large w3-button"><a href="Woman.php" type="submit" >HOME</a></p></button>
<p><button class="magenta w3-black w3-padding-large w3-large w3-button"><a href="comenzi.php" type="submit" class="magenta">PLACE YOUR ORDER</a></p></button>
</div>
</html>
