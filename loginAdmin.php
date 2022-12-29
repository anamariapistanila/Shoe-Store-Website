<html>
<head>

<style>
body {
	display: flex;
	justify-content: center;
	align-items: center;
	height: 100vh;
	flex-direction: column;
}

*{
	font-family: sans-serif;
	box-sizing: border-box;
}

form {
	width: 500px;
	border: 2px solid #ccc;
	padding: 30px;
	background: #fff;
	border-radius: 15px;
}

h2 {
	text-align: center;
	margin-bottom: 40px;
}

input {
	display: block;
	border: 2px solid #ccc;
	width: 95%;
	padding: 10px;
	margin: 10px auto;
	border-radius: 5px;
}
label {
	color: #888;
	font-size: 18px;
	padding: 10px;
}

button {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
}
button:hover{
	opacity: .7;
}
.error {
   background: #F2DEDE;
   color: #A94442;
   padding: 10px;
   width: 95%;
   border-radius: 5px;
   margin: 20px auto;
}

h1 {
	text-align: center;
	color: #fff;
}

a {
	float: right;
	background: #555;
	padding: 10px 15px;
	color: #fff;
	border-radius: 5px;
	margin-right: 10px;
	border: none;
	text-decoration: none;
}
a:hover{
	opacity: .7;
}

.tab {
  border: 1px solid #ccc;
  background-color: ÄntiqueWhite;
  position: fixed;
  top: 0;
  right: 0;

}

/* Style the buttons that are used to open the tab content */
.tab button {
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
   font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;

</style>
</head>
<body bgcolor="AntiqueWhite">
<html>
	 
	  <div class="tab">
	   <button class="tablinks" onclick="location.href='Woman.php'">Home</button>
  <button class="tablinks" onclick="location.href='Woman.php'">About us</button>
  <button class="tablinks" onclick="location.href='Woman.php'">Contact</button>

</div><br><br>
  <div class="header">
  	<h2>Login</h2>
  </div>
	 
  <form method="post" action="loginAdmin.php">
  
  	<div class="input-group">
  		<label>Admin:</label>
  		<input type="text" name="adminname" >	
  	</div>
	

	
  	<div class="input-group">
  		<label>Admin Password:</label>
  		<input type="password" name="password">
	
  	</div>
	<div class="input-group">
  		<button type="submit" class="btn" name="login_admin">Login Admin </button>
  	</div>
  
	
  
  </form>
  

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_POST['adminname'];
  $pass= $_POST['password'];
  if ($name == 'admin' && $pass == 'admin1234') {  ?>
     <a href="messageSent.php"><button type="submit" class="button" name="login_admin" >Messages</button></a>
	 <br><br>
	 <a href="emails.php"><button type="submit" class="button" name="login_admin" >Emails</button></a>
 <?php } else {
    echo "Wrong Admin Name or Password. Retry.";
  }
}
?>

<script>

 function(){
        location.href = "Woman.php";
    };

</script>
  

</body>
</html>