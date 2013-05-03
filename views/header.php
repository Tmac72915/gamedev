<?php
// Make sure this was included from a parent file
if ( !defined( '_MAIN_PHP' ) ) {
	exit;
}

// Make sure NAV_ID is defined
if ( !defined( 'NAV_ID' ) ) {
	define( 'NAV_ID', '' );
}
?>

	<header id="header">
		<div class="container">
			<nav class="navbar">
				<a href="<?php echo S_ROOT; ?>" id="logo"><img src="<?php echo IMG; ?>logo.png"></a>
				<a href="#"<?php if ( NAV_ID === 'games' ) { echo ' class="active"'; } ?>>Games</a>
				<a href="#"<?php if ( NAV_ID === 'ideas' ) { echo ' class="active"'; } ?>>Ideas</a>
				<a href="learn.php"<?php if ( NAV_ID === 'learn' ) { echo ' class="active"'; } ?>>Learn</a>
				<a href="#"<?php if ( NAV_ID === 'create' ) { echo ' class="active"'; } ?>>Create</a>
			</nav>
			<nav class="navbar pull-right">
				<a id="signin">Log in</a>
			</nav>
		</div>
	</header>
