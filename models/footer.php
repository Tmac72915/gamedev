<?php
// Make sure this was included from a parent file
if ( !defined( '_MAIN_PHP' ) ) {
	exit;
}
?>

	<footer id="footer" class="container">
		<nav>
			<a href="http://www.codecademy.com/groups/html5-game-development" title="Group Page" target="_blank">Codecademy Group Page</a>
		</nav>
		&copy; <?php echo date( 'Y' ); ?>
		HTML5 Game Development Group
		
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="<?php echo JS; ?>main.js"></script>
