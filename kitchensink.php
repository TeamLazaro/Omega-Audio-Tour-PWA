<?php

	// :: ONLY DURING DEVELOPMENT ::
	// debugging
	ini_set( "display_errors", "On" );
	ini_set( "error_reporting", E_ALL );

	/*
	 * Versioning Assets to invalidate the browser cache
	 */
	$ver = '?v=20181126';

	// included external php files with functions.
	require ('inc/head.php');
	require ('inc/lazaro.php'); /* -- Lazaro disclaimer and footer -- */

?>

<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
	prefix="og: http://ogp.me/ns# fb: http://www.facebook.com/2008/fbml">

<head>


	<!-- Nothing Above This -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Page Title | Page Name -->
	<title>Page Title</title>

	<?php echo gethead(); ?>

</head>

<body id="body" class="body">

<!--  ★  MARKUP GOES HERE  ★  -->





<!-- Always shows a header, even in smaller screens. -->
<div class="app-layout mdl-layout mdl-js-layout mdl-layout--fixed-header">
	<header class="app-header mdl-layout__header">
		<div class="mdl-layout__header-row">
			<!-- Title -->
			<span class="mdl-layout-title">Island 3BHK</span>
			<!-- Add spacer, to align navigation to the right -->
			<div class="mdl-layout-spacer"></div>
			<!-- Right aligned menu below button -->
			<button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
				<i class="material-icons">more_vert</i>
			</button>
			<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
				<li class="mdl-menu__item">Some Action</li>
				<li class="mdl-menu__item">Another Action</li>
				<li disabled class="mdl-menu__item">Disabled Action</li>
				<li class="mdl-menu__item">Yet Another Action</li>
			</ul>
		</div>
	</header>
	<div class="playlist-navigation mdl-layout__drawer">
		<span class="title mdl-layout-title mdl-color--indigo-500 mdl-color-text--white">
			<img src="/media/brand/nav-thumbnail.jpg">
		</span>
		<nav class="mdl-navigation">
			<div class="subtitle mdl-color--grey-200">
				<small>Building Tour</small>
			</div>
			<a class="mdl-navigation__link" href="">
				<!-- <i class="material-icons">lens</i> -->
				<strong class="mdl-color-text--indigo-500">Klassik Landmark</strong>
			</a>
			<div class="subtitle mdl-color--grey-200">
				<small>Apartment Tour</small>
			</div>
			<a class="mdl-navigation__link" href="">
				<strong class="mdl-color-text--indigo-500">Island 3BHK</strong><br>
				<small>2035 SQFT | West Facing</small>
			</a>
			<a class="mdl-navigation__link" href="">
				<strong class="mdl-color-text--indigo-500">Plush 3BHK</strong><br>
				<small>2035 SQFT | East Facing</small>
			</a>
			<a class="mdl-navigation__link" href="">
				<strong class="mdl-color-text--indigo-500">Elevate 3BHK</strong><br>
				<small>2035 SQFT | West Facing</small>
			</a>
		</nav>
	</div>
	<main class="mdl-layout__content">
		<!-- Your content goes here -->
		<div class="page-content">
			<div class="mdl-grid playlist-subhead">
				<div class="playlist-meta mdl-cell mdl-cell--12-col">
					<small class="mdl-color-text--white">2035 SQFT</small>
					<small class="mdl-color-text--white">West Facing</small>
					<small class="mdl-color-text--white">B - 13A</small>
				</div>
			</div>		
			<div class="mdl-grid playlist">
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
					<div class="clip-card mdl-card mdl-shadow--2dp">
						<div class="card-title mdl-card__title" style="background-image: url('/media/tour/1.png');">
							<h4 class="playlist-index mdl-card__title-text">1</h4>
						</div>
						<div class="mdl-card__supporting-text">
							Super Retina. The beauty of OLED. On a whole new scale.
						</div>
						<!-- Simple MDL Progress Bar -->
						<div id="p1" class="mdl-progress mdl-js-progress"></div>
						<script>
						  document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
						    this.MaterialProgress.setProgress(99);
						  });
						</script>
						<div class="mdl-card__actions mdl-card--border">
							<button class="playback-button mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								<span>Replay</span>
								<i class="material-icons">replay</i>
							</button>
						</div>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
					<div class="clip-card mdl-card mdl-shadow--2dp">
						<div class="card-title mdl-card__title" style="background-image: url('/media/tour/2.png');">
							<h4 class="playlist-index mdl-card__title-text">2</h4>
						</div>
						<div class="mdl-card__supporting-text">
							A new level of water resistance.
						</div>
						<!-- Simple MDL Progress Bar -->
						<div id="p2" class="mdl-progress mdl-js-progress"></div>
						<script>
						  document.querySelector('#p2').addEventListener('mdl-componentupgraded', function() {
						    this.MaterialProgress.setProgress(44);
						  });
						</script>
						<div class="mdl-card__actions mdl-card--border">
							<button class="playback-button mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								<span>Pause</span>
								<i class="material-icons">pause</i>
							</button>
						</div>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
					<div class="clip-card mdl-card mdl-shadow--2dp">
						<div class="card-title mdl-card__title" style="background-image: url('/media/tour/3.png');">
							<h4 class="playlist-index mdl-card__title-text">3</h4>
						</div>
						<div class="mdl-card__supporting-text">
							Face ID. Your face is your password.
						</div>
						<!-- Simple MDL Progress Bar -->
						<div id="p3" class="mdl-progress mdl-js-progress"></div>
						<script>
						  document.querySelector('#p3').addEventListener('mdl-componentupgraded', function() {
						    this.MaterialProgress.setProgress(1);
						  });
						</script>
						<div class="mdl-card__actions mdl-card--border">
							<button class="playback-button mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								<span>Listen</span>
								<i class="material-icons">play_arrow</i>
							</button>
						</div>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
					<div class="clip-card mdl-card mdl-shadow--2dp">
						<div class="card-title mdl-card__title" style="background-image: url('/media/tour/4.png');">
							<h4 class="playlist-index mdl-card__title-text">4</h4>
						</div>
						<div class="mdl-card__supporting-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</div>
						<!-- Simple MDL Progress Bar -->
						<div id="p4" class="mdl-progress mdl-js-progress"></div>
						<script>
						  document.querySelector('#p4').addEventListener('mdl-componentupgraded', function() {
						    this.MaterialProgress.setProgress(1);
						  });
						</script>
						<div class="mdl-card__actions mdl-card--border">
							<button class="playback-button mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								<span>Listen</span>
								<i class="material-icons">play_arrow</i>
							</button>
						</div>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
					<div class="clip-card mdl-card mdl-shadow--2dp">
						<div class="card-title mdl-card__title">
							<h4 class="playlist-index mdl-card__title-text">5</h4>
						</div>
						<div class="mdl-card__supporting-text">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit.
						</div>
						<!-- Simple MDL Progress Bar -->
						<div id="p5" class="mdl-progress mdl-js-progress"></div>
						<script>
						  document.querySelector('#p5').addEventListener('mdl-componentupgraded', function() {
						    this.MaterialProgress.setProgress(1);
						  });
						</script>
						<div class="mdl-card__actions mdl-card--border">
							<button class="playback-button mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								<span>Listen</span>
								<i class="material-icons">play_arrow</i>
							</button>
						</div>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone">
					<div class="clip-card mdl-card mdl-shadow--2dp">
						<div class="card-title mdl-card__title">
							<h4 class="playlist-index mdl-card__title-text">6</h4>
						</div>
						<div class="mdl-card__supporting-text">
							<div class="description">A12 Bionic. The smartest, most powerful chip in a smartphone.</div>
						</div>
						<!-- Simple MDL Progress Bar -->
						<div id="p6" class="mdl-progress mdl-js-progress"></div>
						<script>
						  document.querySelector('#p6').addEventListener('mdl-componentupgraded', function() {
						    this.MaterialProgress.setProgress(1);
						  });
						</script>
						<div class="mdl-card__actions mdl-card--border">
							<button class="playback-button mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
								<span>Listen</span>
								<i class="material-icons">play_arrow</i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="mdl-grid playlist-snack-test">
				<button id="demo-show-snackbar" class="mdl-button mdl-js-button mdl-button--raised" type="button">Show Snackbar</button>
			</div>
			<div class="mdl-grid playlist-snack">
				<div class="playlist-snack">
					<div id="demo-snackbar-example" class="mdl-js-snackbar mdl-snackbar">
					  <div class="mdl-snackbar__text"></div>
					  <button class="mdl-snackbar__action" type="button"></button>
					</div>
					<script>
					(function() {
					  'use strict';
					  var snackbarContainer = document.querySelector('#demo-snackbar-example');
					  var showSnackbarButton = document.querySelector('#demo-show-snackbar');
					  var handler = function(event) {
					    showSnackbarButton.style.backgroundColor = '';
					  };
					  showSnackbarButton.addEventListener('click', function() {
					    'use strict';
					    showSnackbarButton.style.backgroundColor = '#' +
					        Math.floor(Math.random() * 0xFFFFFF).toString(16);
					    var data = {
					      message: 'Button color changed.',
					      timeout: 2000,
					      actionHandler: handler,
					      actionText: 'Undo'
					    };
					    snackbarContainer.MaterialSnackbar.showSnackbar(data);
					  });
					}());
					</script>
				</div>
			</div>
		</div>
	</main>
	<footer class="app-footer">
		<div class="playlist-playhead">
			<input class="mdl-slider mdl-js-slider" type="range" min="0" max="100" value="25" tabindex="0">
		</div>
		<div class="mdl-grid playlist-footer">
			<div class="playlist-status mdl-cell mdl-cell--10-col mdl-cell--6-col-tablet mdl-cell--3-col-phone mdl-color-text--indigo-500">
				<i class="material-icons">volume_up</i>
				<span class="status-text"><strong>Now Playing</strong> (2) A new level of water resistance.</span>
			</div>
			<div class="playlist-autoplay mdl-cell mdl-cell--2-col mdl-cell--2-col-tablet mdl-cell--1-col-phone">
				<strong>Autoplay</strong>
				<label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="switch-1">
				  <input type="checkbox" id="switch-1" class="mdl-switch__input" checked>
				  <span class="mdl-switch__label"></span>
				</label>
			</div>
		</div>	
	</footer>
</div>







<!--  ☠  MARKUP ENDS HERE  ☠  -->

<!-- JS Modules -->
<script type="text/javascript">

// JAVASCRIPT GOES HERE
$(document).ready(function(){
});

</script>

<!-- Other Modules -->
<?php // require __DIR__ . '/inc/can-user-hover.php' ?>


</body>

</html>
