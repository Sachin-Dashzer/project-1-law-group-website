<header class="header stricky">
	<div class="containerFull">
		<div class="inlineHeader">
			<div class="leftLogo">
				<a href="/">
					<picture>
						<source srcset="images/logo.webp" type="image/webp" />
						<img src="images/logo.jpg" />
					</picture>
				</a>
			</div>
			<div class="rightMenu">
				<ul>
					<li class="<?php if ($page == 'about') {
									echo 'active';
								} ?>"><a href="about.php">About</a></li>
					<li class="<?php if ($page == 'team') {
									echo 'active';
								} ?>"><a href="team.php">Our Team</a></li>
					<li class="<?php if ($page == 'contact') {
									echo 'active';
								} ?>"><a href="contact.php">Contact Us</a></li>
					<li><a href="/">Blog</a></li>
					<li><a href="/">Podcast</a></li>
				</ul>
			</div>
		</div>
	</div>
</header>