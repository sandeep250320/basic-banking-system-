<?php
if(isset($_POST['name'])){
	
	
$server="localhost";
$username="root";
$password="";

$conn = mysqli_connect($server,$username,$password);
if(!$conn){
	die("Connection to this data failed due to ".mysqli_connect_error());
}

$name=$_POST['name'];
$email=$_POST['email'];
$balance=$_POST['balance'];

$sql="INSERT INTO `banking_system`.`user` (`name`, `email`, `balance`) VALUES ( '$name', '$email', '$balance');";
if($conn->query($sql)==true){
   
   
               echo "<script> alert('Dear customer!Your account is successfully created.');
                               window.location='transfermoney.php';
                     </script>";
                  
    }
	
	
	else {
		echo "error: $sql <br> $conn->error";	
	}
	$conn->close();
	}
?>

<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="background-color :lightyellow">

<div id="outer">
<div id="menuparent">
	<div id="iconbar"><h1 style="color:white;padding-left:30px;">DIGITAL BANK<span class="glyphicon glyphicon-home"></h1></div>
	<div id="menubar">
	<ul>
		<li class="menu"><a href="banking.php" >HOME<span class="glyphicon glyphicon-home"></span></a></li>
		<li class="menu"><a href="transfermoney.php">Transfer Money</a></li>
		<li class="menu"><a href="transactionhistory.php">Transaction History</a></li>
		<li class="menu"><a href="register.php">Create user<span class="glyphicon glyphicon-user"></span></a></li>
	</ul>
	</div></div>
	
	<div id="secondlogin">
	<div id="header">
	<marquee scrollamount="15"><h1>WELCOME TO DIGITAL BANK!</h1></marquee>
	</div>
	<center><div id="register"><br>
		<center style="color:black;"><h2 style="border:1px auto; ">Create User</h2></br>

		</br>
		<form action="register.php" method="post" >
		<h3>
			<li >ENTER NAME &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : 
			<input type="text" name="name" placeholder="name" required="true" autocomplete="off"/></li><br>
			<li>EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; :
			<input type="email" name="email" placeholder="email" required="true" autocomplete="off"/></li><br>
			<li >Balance &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;:
			<input type="number" name="balance" placeholder="balance" required="true" autocomplete="off"/></li><br>
			
			<input type="submit" name="Submit" >
		</h3>
		</form>
		</center>
	</div></center>
	</div>
	

</div>
</body>
</html>