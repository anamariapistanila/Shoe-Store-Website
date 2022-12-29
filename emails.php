<html>
<head>
<h1 align="center">NEW CLIENTS</h1>
<BODY bgcolor="AntiqueWhite">
<br><br>
<style>
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
      <th>E-mail</th>
    </tr>
  </thead>

</head>
</html>
 <?php
$conn= mysqli_connect('localhost','root','','shoeshop');

if(!$conn)
{
	die("Nu se poate deschide");
}


$variabila1 ="SELECT email FROM emails";
$result1=mysqli_query($conn,$variabila1);

if($result1->num_rows>0) {

while($row = $result1->fetch_assoc()) {
echo "<tr>";
        echo "<td>" . $row['email'] . "</td>";
  echo "</tr>";
  }
    echo "</table>";

	}
$conn->close();
?>
