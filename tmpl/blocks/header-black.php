<header class="black">
	<div class="container d-none d-sm-block">
		<div class="row menu_web ">
			<div class="col-lg-5 col-sm-3 col-md-3">
				<div class="logo">
					<a href="<?php echo $app->baseurl; ?>">Dan's Food</a>
				</div>
			</div>
			<div class="col-lg-7 col-sm-9 col-md-9">
				<div class="menu menu_dark row">
					<nav class="flex">
						<li><a href="<?php echo $app->baseurl; ?>">Головна</a></li>
						<li><a href="<?php echo $app->baseurl; ?>/about">Про нас</a></li>
						<li><a href="<?php echo $app->baseurl; ?>/reservation">Бронювання</a></li>
						<li><a href="<?php echo $app->baseurl; ?>/menu">Меню</a></li>
						<li><a href="<?php echo $app->baseurl; ?>/blog">Блог</a></li>
						<li><a href="<?php echo $app->baseurl; ?>/contact">Контакти</a></li>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<div class="container d-block d-sm-none">
		<div class="row r2">
			<div class="col-2 ml-a">
				<div class="ham " data-toggle="collapse" href="#collapseExampleMenu" role="button" aria-expanded="false" aria-controls="collapseExampleMenu">
					<i class="fas fa-bars"></i>
				</div>
			</div>

			<div class="col-10">
				<div class="logo">
					<a href="<?php echo $app->baseurl; ?>">Dan's Food</a>
				</div>
			</div>
		</div>
		
			<div class="block menu collapse" id="collapseExampleMenu">

				<div class="col">
					<a href="<?php echo $app->baseurl; ?>">Головна</a>
				</div>

				<div class="col">
					<a href="about">Про нас</a>
				</div>

				<div class="col ">
					<a href="reservation">Бронювання</a>
				</div>

				<div class="col col1">
					<a href="menu">Меню</a>
				</div>

				<div class="col ">
					<a href="blog">Блог</a>
				</div>
				
				<div class="col scsc">
					<a href="contact">Контакти</a>
				</div>
			</div>
	</div>
</header>