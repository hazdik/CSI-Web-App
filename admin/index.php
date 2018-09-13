<html>
	<head>
		<title>CSI-Admin</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="icon" href="../images/svceico.ico" type="image/x-icon">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800">
		<style type="text/css">
			#formid
			{
				width: 40%;
				margin-left: auto;
				margin-right: auto; 
				vertical-align: middle;
				background-color: white;
				border:1px solid #5d8ffc;
				padding: 20px;
				border-radius: 10px;
			}
			#panel
			{
				background-color: white;
				margin: auto 0px;
				padding: 70px 0;
				text-align: center;
				font-size: 40px;
				color: #283e4a;
				border-radius: 10px;
			}
			body
			{
				font-family:'Nunito',sans-serif;

			}

			input,botton
			{
				font-family:'Nunito',sans-serif;
			}

		</style>
	</head>
	<body style="background-color: #283e4a">
	<div class="py-2">
	<div class="container-fluid">
		<div class="row" id="panel">
			<div class="col-md-12">
				<p>CSI-SVCE ADMIN PORTAL</p>
			</div>
		</div>
	</div>		
	<div class="container" style="padding: 100px 0px">
		<div class="row" id="formid">
			<div class="col-md-12">
				<form action="checklogin.php" method="post">
					<div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control validate" name="uname" id="email" autocomplete="off" required/>
				  	</div>
				  	<div class="form-group">
				    	<label for="pass">Password:</label>
				    	<input type="password" class="form-control" name="pass" id="pass" required/>
				  	</div>
				  	<button type="submit" class="btn btn-default">Submit</button>
				  	<div>
				  		<p style="text-align:center;color: #5d8ffc;" id="errormsg"></p>
				  	</div>
				</form>
				<?php
				if(ISSET($_GET["status"]))
				{
					if($_GET["status"]==1)	
						echo "<script>document.getElementById('errormsg').innerHTML='Unauthorized Access'</script>";
					if($_GET["status"]==2)	
						echo "<script>document.getElementById('errormsg').innerHTML='Access is not Granted'</script>";
					else{
						header("location:index.php");
					}
				}
				?>
			</div>
		</div>
	</div>
	</div>
	</body>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
</html>