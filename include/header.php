<header class="header stricky">
	<div class="containerFull">
		<div class="inlineHeader">
			<div class="leftLogo">
				<a href="index.php">
					<picture>
						<source srcset="images/logo.webp" type="image/webp" />
						<img src="images/logo.jpg" />
					</picture>
				</a>
			</div>
			<div class="rightMenu">
				<ul class="d-none d-md-flex	">
					<li class="<?php if ($page == 'about') {
									echo 'active';
								} ?>"><a href="about.php">About</a></li>
					<li class="<?php if ($page == 'team') {
									echo 'active';
								} ?>"><a href="team.php">Departments</a></li>
					<li class="<?php if ($page == 'practices') {
									echo 'active';
								} ?>"><a href="practices.php">Practice Areas</a></li>
					<li class="<?php if ($page == 'contact') {
									echo 'active';
								} ?>"><a href="contact.php">Contact Us</a></li>
					<!--<li><a href="/">Blog</a></li>
					<!--<li><a href="/">Podcast</a></li>-->
				</ul>


			</div>
			<button class="btnMenu d-block d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>
		</div>
	</div>
</header>





<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
	<div class="offcanvas-header">
		<div class="leftLogo ">
			<a href="index.php">
				<picture>
						<source srcset="images/logo.webp" type="image/webp" />
						<img src="images/logo.jpg" />
					</picture>
			</a>
		</div>
		<h5 id="offcanvasRightLabel">&nbsp;</h5>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body">
		<div class="d-md-none">
			<ul>
				<li><a href="about.php">About</a></li>
				<li><a href="team.php">Departments</a></li>
				<li><a href="practices.php">Expertise</a></li>
				<li><a href="contact.php">Contact Us</a></li>
				<!--<li><a href="/">Blog</a></li>-->
				<!--<li><a href="/">Podcast</a></li>-->
			</ul>
			<hr>
		</div>

	</div>
</div>