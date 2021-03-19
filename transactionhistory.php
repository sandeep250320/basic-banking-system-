<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body style="background-color : #525252;">

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
	
	<div id="secondhistory">
	<div id="header">
	<marquee scrollamount="15"><h1>WELCOME TO DIGITAL BANK!</h1></marquee>
	</div>
	<div >
	<center style="color:red;"><h2>Transaction History</h2>
	<div class="container">
        
       <br>
       <div class="table-responsive-sm">
    <table class="table  table-hover table-striped table-condensed table-bordered " style="background-color:lightyellow" >
        <thead style="color : black;">
            <tr>
                <th class="text-center" style="background-color:yellow">S.No.</th>
                <th class="text-center" style="background-color:yellow">Sender Name</th>
                <th class="text-center" style="background-color:yellow">Receiver Name</th>
                <th class="text-center" style="background-color:yellow">Amount</th>
                <th class="text-center" style="background-color:yellow">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

            include 'config.php';

            $sql ="select * from transaction";

            $query =mysqli_query($conn, $sql);

            while($rows = mysqli_fetch_assoc($query))
            {
        ?>

            <tr style="color : black;">
            <td class="py-2"><?php echo $rows['sno']; ?></td>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['balance']; ?> </td>
            <td class="py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
	
		
		
		
	
	</center>
	</div>
	</div>
	 

</div>
</body>
</html>