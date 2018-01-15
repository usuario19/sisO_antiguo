
<!DOCTYPE html>
<html>
<head>
	<title>fffff</title>
	{!! Html::style('plugins/botstrap/css/bootstrap.css') !!}
{!! Html::script('plugins/botstrap/js/bootstrap.min.js') !!}
</head>
<body>
	<div class="container">
		hola
	</div>
	<div class="container">
			<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			  
			  <li class="nav-item">
			    <a class="nav-link active" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="true">Profile</a>
			  </li>

			  <li class="nav-item">
			    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>

			  <li class="nav-item">
			    <a class="nav-link" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Home</a>
			  </li>
			</ul>

		<div class="tab-Content" id="pills-tabContent">

		  <div class="tab-pane fade" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">jjjjj</div>

		  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-profile-tab">hhh</div>

		  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">ggg</div>
		</div>

	</div>
</body>
</html>

