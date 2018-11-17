<!DOCTYPE html>
<html land="en">
<head>
	<title>Emsh</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	
	<!-- custom css -->
	<link rel="stylesheet" href="css/main.css">

	<style>
		body {
			font-family:"futura-pt-condensed","trebuchet ms";
		}
		p {
			margin:0px;
		}
		li {
			margin-top:20px;
		}
	</style>
</head>

<body>
	<header>
		<nav class="navbar navbar-light navbar-expand-sm">
			<div class="navbar-brand">
				<a class="navbar-brand" href="index.html.php">Emsh</a>
			</div>

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<form method="get" class="w-100">
				<input type="input" name="q" value="<?php echo $_GET['q']; ?>" class="form-control"/>
			</form>
			
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="#">A</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">-</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Z</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main class="container">

		<?php
		set_time_limit(0);
		define('INDEXLOCATION','../index/');
		define('DOCUMENTLOCATION','../documents/');

		include_once('../classes/indexer.class.php');
		include_once('../classes/search.class.php');
		include_once('../classes/multifolderindex.class.php');
		include_once('../classes/multifolderdocumentstore.class.php');
		include_once('../classes/ranker.class.php');

		$index = new multifolderindex();
		$docstore = new multifolderdocumentstore();
		$ranker = new ranker();
		$indexer = new indexer($index,$docstore,$ranker);
		$search = new search($index,$docstore,$ranker);


		echo '<ul style="list-style:none;">';

		// The regex in the below just removes non ASCII characters since the whole thing
		// isn't unicode aware.
		foreach($search->dosearch($_GET['q']) as $result) {
			?>
				<li>
					<a href="<?php echo $result[0]; ?>"><?php echo preg_replace('/[^(\x20-\x7F)]*/','',$result[1]); ?></a> <small>Rank: <?php echo $result[3]; ?></small><br>
					<a style="color:#093; text-decoration:none;" href="<?php echo $result[0]; ?>"><?php echo $result[0]; ?></a>
					<p><?php echo preg_replace('/[^(\x20-\x7F)]*/','',$result[2]); ?></p>
				</li>

			<?php
		}
		echo '</ul>';
		?>
	</main>
</body>
</html>

