<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body class = "bg-dark">
		<div class="card mx-auto" style="margin-top: 15%; width: 500px;" >
			<div class="card-header">
				Registro
			</div>
			<div class="card-body">
				<?php
				
					$canales = simplexml_load_string(file_get_contents('a.xml'));
					
					echo "<h2>{$canales->channel->title}</h2>";
					
					foreach($canales->channel->item as $canal){ 
					?>
							<h5><?php echo $canal->title; ?></a></h5> <a href="subscribirse.php?<?php echo $canal->id ?>" class="btn btn-info">Info</a>
					<?php
					}
					?>
			</div>
		</div>

	</body>
</html>