
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body bgcolor="AntiqueWhite">
 <?php
$conn= mysqli_connect('localhost','root','','shoeshop');

if(!$conn)
{
	die("Nu se poate deschide");
}

  $size= $_POST['Size'];
  $color = $_POST['Color'];


$variabila ="INSERT INTO cart VALUES ('', 'CLARK','100.15','".$color."','".$size."')";
$rezultat=mysqli_query($conn,$variabila);

$conn->close();
?>
<link rel="stylesheet" href="animation.css">
</head>
<body>
    <div class="text-box">
    <span>S</span>
    <span>U</span>
    <span>C</span>
    <span>C</span>
    <span>E</span>
    <span>S</span>
    <span>S</span>
    </div>
</body>
</html>



