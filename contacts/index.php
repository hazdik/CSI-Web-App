<html>
	<head>
		<title>CSI-Home</title>
		<?php
			include '../headerfile/index.php';
		?>
		<style type="text/css">
			#divback
			{
				background-color: white;
				padding:10px 10px;
			}
		</style>
	</head>
	<body style="background-color: rgb(248, 248, 248);" onload=changeclass("contacts")>
		<?php
			include '../headerbody/index.php';
		?>
		<div class="py-3">
			<div class="container">
				<div id="divback" class="row">
					<div class="col-md-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.7610888899926!2d79.97088895063443!3d12.987126890800726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a528cd1a35744dd%3A0xc7a7db1c8c0349e2!2sSVCE+IT+Dept!5e0!3m2!1sen!2sin!4v1533991187759" width="100%" 
						height="450" frameborder="1" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div id="divback" class="row">
					<form class="col s12">
				      	<div class="row">
				        	<div class="input-field col s6">
				          		<input placeholder="Placeholder" id="first_name" type="text" class="validate">
				          		<label for="first_name">First Name</label>
				        	</div>
				        	<div class="input-field col s6">
				          		<input id="last_name" type="text" class="validate">
				          		<label for="last_name">Last Name</label>
				        	</div>
				      	</div>
			      		<div class="row">
			        		<div class="input-field col s12">
			          			<input id="email" type="email" class="validate">
			          			<label for="email">Email</label>
			        		</div>
			      		</div>
				    </form>
				</div>
				</div>
			</div>
		</div>
		<?php
			include '../js/index.php';
		?>
	</body>
</html>