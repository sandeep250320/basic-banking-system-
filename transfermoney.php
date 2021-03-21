<!DOCTYPE html>
<html>
<head>

    <style type="text/css">
      button{
        transition: 1.5s;
      }
      button:hover{
        background-color:#616C6F;
        color: white;
      }
    </style>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="background-color :lightyellow;">

<?php
    include 'config.php';
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($conn,$sql);
?>

<div id="outer">
<div id="menuparent">
	<div id="iconbar"><h1 style="color:white;padding-left:30px;">DIGITAL BANK<span class="glyphicon glyphicon-home"></h1></div>
	<div id="menubar">
	<ul>
<li class="menu"><a href="banking.php" >HOME<span class="glyphicon glyphicon-home"></span></a></li>
		<li class="menu"><a href="transfermoney.php">Transfer Money</a></li>
		<li class="menu"><a href="transactionhistory.php">TRANSACTION HISTORY</a></li>
		<li class="menu"><a href="register.php">Create user<span class="glyphicon glyphicon-user"></span></a></li>
	</ul>
	</div></div>
	
	<div id="secondabout">
	<div id="header">
	<marquee scrollamount="15"><h1>WELCOME TO DIGITAL BANK!</h1></marquee>
	</div>
		<center style="color:red;"><h2>Transfer Money</h2></center></br>
		<div class="container">
        <br>
            <div class="row">
                <div class="col">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-condensed table-bordered" style="border-color:black; background-color:lightyrey">
                        
                            <tr>
                            <th scope="col" class="text-center py-2" style="background-color:yellow">Id</th>
                            <th scope="col" class="text-center py-2" style="background-color:yellow">Name</th>
                            <th scope="col" class="text-center py-2" style="background-color:yellow">E-Mail</th>
                            <th scope="col" class="text-center py-2" style="background-color:yellow">Balance</th>
                            <th scope="col" class="text-center py-2" style="background-color:yellow">Operation</th>
                            </tr>

                        <tbody>
                <?php 
                    while($rows=mysqli_fetch_assoc($result)){
                ?>
                    <tr style="color : black;">
                        <td class="py-2"><?php echo $rows['id'] ?></td>
                        <td class="py-2"><?php echo $rows['name']?></td>
                        <td class="py-2"><?php echo $rows['email']?></td>
                        <td class="py-2"><?php echo $rows['balance']?></td>
                        <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn" style="background-color : green;">Transact</button></a></td> 
                    </tr>
                <?php
                    }
                ?>
            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
         </div>
		
		
	</div>
	</div>
	 
</div>
</body>
</html>