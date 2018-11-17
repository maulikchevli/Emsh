<nav class="navbar navbar-light navbar-expand-sm">
	<div class="navbar-brand">
		<a class="navbar-brand" href="index.html.php">Emsh</a>
	</div>

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<form method="get">
		<input type="input" name="q" value="<?php echo $_GET['q']; ?>" class="form-control"/>
	</form>
	
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#">A</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Z</a>
			</li>
		</ul>
	</div>
</nav>
