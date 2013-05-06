<?php
require_once( 'main.php' );

define( 'NAV_ID', 'games' );

include_once( VIEWS . 'head.php' );
?>
<body>

<?php
include_once( VIEWS . 'header.php' );
?>

	<div class="container tm30">
		<header class="header">
			Try one of these awesome HTML5 games!
		</header>
		<div class="tm20">
			<a href="#" class="cell well">
				<h3>Vilify</h3>
				<img src="http://placehold.it/270x170">
			</a><!--
			--><a href="#" class="cell well">
				<h3>Game 2</h3>
				<img src="http://placehold.it/270x170">
			</a><!--
			--><a href="#" class="cell well">
				<h3>Game 3</h3>
				<img src="http://placehold.it/270x170">
			</a>
		</div>
	</div>

<?php
include_once( VIEWS . 'footer.php' );
?>

</body>
</html>
