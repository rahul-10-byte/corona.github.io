
<!DOCTYPE html>
<html>
<head>
	<title>Corona</title>
	<?php include 'links.php' ?>
 	<?php include 'style.php' ?>

</head>
<body onload="fetch()">


<nav class="navbar navbar-expand-lg nav_style p-3 sticky-top">
  <a class="navbar-brand pl-5"  href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="index1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indiacorona.php">India Corona Live</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
      
     
    </ul>
   
  </div>
</nav>





<section class="corona_update container-fluid">
	<div class="my-5">
		<h3 class="text-uppercase text-center">covid-19 updates India </h3>	
	</div>
	<div class="table-responsive">
		<table class="table table-bordered table-striped text-center">
			<tr>
				<th class="text-capitalize">Last Update Time</th>
				<th class="text-capitalize">State</th>
				<th class="text-capitalize">Confirmed</th>
				<th class="text-capitalize">Active</th>
				<th class="text-capitalize">Recovered</th>
				<th class="text-capitalize">Deaths</th>
				

			</tr>

			<?php

				$data = file_get_contents('https://api.covid19india.org/data.json');
				$coronalive = json_decode($data, true);

		//		echo "<pre>";

		//		print_r($coronalive);

		//		echo "</pre>";

				$statescount = count($coronalive['statewise']) ;

				$i = 1;
				while ($i < $statescount ) {

					?>

					<tr>
						<td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime'] ?> </td>
						<td> <?php echo $coronalive['statewise'][$i]['state'] ?> </td>
						<td> <?php echo $coronalive['statewise'][$i]['confirmed'] ?> </td>
						<td> <?php echo $coronalive['statewise'][$i]['active'] ?> </td>
						<td> <?php echo $coronalive['statewise'][$i]['recovered'] ?> </td>
						<td> <?php echo $coronalive['statewise'][$i]['deaths'] ?> </td>

					</tr>


	<!--				echo $coronalive['statewise'][$i]['lastupdatedtime'] . "<br>";
					echo $coronalive['statewise'][$i]['state'] . "<br>";
					echo $coronalive['statewise'][$i]['confirmed'] . "<br>";
					echo $coronalive['statewise'][$i]['active'] . "<br>";
					echo $coronalive['statewise'][$i]['recovered'] . "<br>";
					echo $coronalive['statewise'][$i]['deaths'] . "<br>";
	-->

					<?php

					$i++;

				}

			?>
		</table>
	</div>
</section>


















<!--/////////////////Top cursor\\\\\\\\\\\\\\\\\\-->
<a id="button"></a>





<footer class="mt-5">
	<div class="footer_style text-center text-white container-fluid">
		<p> COPYRIGHTS by RahulKalyankarProductions</p>
	</div>
</footer>



<script type="text/javascript">




var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});




</script>


</body>
</html>