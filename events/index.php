<html>
<head>
	<title>Events</title>

	<?php
		require("../connection/index.php");
		include '../headerfile/index.php';
	?>
	<style type="text/css">
		#eventback
		{
			background-color: white;
			padding:10px 10px; 
			border-radius: 10px;
		}
	</style>
</head>
<body style="background-color: rgb(248, 248, 248);" onload=changeclass("events")>
	<?php
		include '../headerbody/index.php';
		$cn=getconnection();
		$sql="select * from events";
		$rowsquery=mysqli_query($cn,$sql);
	?>
	<div class="py-3">
		<div class="container">
			<div id="eventback" class="row">
				<div class="col-md-12">
				<h1 class="design">News & Events</h1>
				<br>
				</div>
		        <div class="col-md-12">
		        <div class="table-responsive">
		        <table class="table table-condensed table-hover">
			    <thead>
			      <tr>
			        <th>S.No</th>
			        <th>Event / Program</th>
			        <th>Period</th>
			        <th>Supported By</th>
			      </tr>
			    </thead>
			    <tbody>
			    	<?php
			    		while($row=mysqli_fetch_row($rowsquery))
			    		{
			    			echo "<tr>";
			    			echo "<td>".$row[0]."</td>";
			    			echo "<td>".$row[1]."</td>";
			    			echo "<td>".$row[2]."</td>";
			    			echo "<td>".$row[3]."</td>";
			    			echo "</tr>";
			    		}
			    		mysqli_close($cn);
			    	?>
			    </tbody>
			  </table>
			</div>
		</div>
		</div>
		</div>			
		</div>
	</div>
	<?php
		include '../js/index.php';
	?>
</body>
</html>
