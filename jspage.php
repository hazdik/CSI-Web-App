<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/materialize.min.js"></script>
<script type="text/javascript">
	function changeclass(obj)
	{
		document.getElementById(obj).className="navlink act";
	}
	function checkinternetconnection()
	{
		if(navigator.onLine)
			return true;
		return false;
	}      
</script>
<script type="text/javascript">
	$(document).ready(function(){
    $('.sidenav').sidenav();
  	});
</script>

