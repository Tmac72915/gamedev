<?php
require_once( 'main.php' );

define( 'NAV_ID', 'learn' );

include_once( VIEWS . 'head.php' );
?>
<body>

<?php
include_once( VIEWS . 'header.php' );
?>

	<div class="container tm30 well">
		<header class="header">
			Want to learn how to make HTML5 games?
		</header>
		<header class="title">
			2D Track
		</header>
		<ol class="track">
			<li>
				<a href="http://www.codecademy.com/courses/web-beginner-en-SWM11/0/3?curriculum_id=50b91eda28c2fb212300039e" target="_blank">
					Draw with JavaScript
					<p>by Eric Weinstein</p>
				</a>
			</li>
			<li>
				<a href="http://www.codecademy.com/courses/web-intermediate-en-CkOwl" target="_blank">
					HTML5 Games: Getting Started
					<p>by Logan Ralston with Tommy Copeland and William Van Rensselaer</p>
				</a>
			</li>
			<li>
				<a href="http://www.codecademy.com/courses/web-beginner-en-Hdmch" target="_blank">
					HTML5 Games: Physics
					<p>by William Van Rensselaer with Logan Ralston</p>
				</a>
			</li>
			<li>
				<a href="http://www.codecademy.com/courses/web-intermediate-en-5LH5k" target="_blank">
					HTML5 Games: Getting Input
					<p>by Logan Ralston with William Van Rensselaer, SungRim Huh, Tommy Copeland, and Graeme</p>
				</a>
			</li>
		</ol>
		<header class="title tm30">
			3D Track
		</header>
		<ol class="track">
			<li>
				<a href="http://www.codecademy.com/courses/web-advanced-en-wQkx9" target="_blank">
					Drawing 3D in Three.js
					<p>by Tommy Copeland</p>
				</a>
			</li>
		</ol>
	</div>

<?php
include_once( VIEWS . 'footer.php' );
?>

</body>
</html>
