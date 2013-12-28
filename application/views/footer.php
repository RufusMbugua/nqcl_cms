<script src='assets/scripts/jquery-1.10.2.min.js' type="text/javascript"></script>
<script src='assets/scripts/bootstrap/bootstrap.min.js' type="text/javascript"></script>
<script src='assets/scripts/modernizr.js'></script>
<script>
	$(document).ready(function() {
		$(".myLi").click(function() {
			$(".myLi").removeClass("active");
			id = $(this).attr("id");
			$("#" + id).addClass("active");
			//$(".main").moveTo(id);
		});
$('.carousel').carousel({
  interval: 2000
});
	}); 
</script>

<div class="row">
	<div class="col-md-4">
		<div class="inner"><h4>Links</h4></div>
	</div>
	<div class="col-md-4">
		<div class="inner"><h4>Links</h4></div>
	</div>
	<div class="col-md-4">
		<div class="inner"><h4>Links</h4></div>
	</div>
</div>