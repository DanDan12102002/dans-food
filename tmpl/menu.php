<?php defined('_JEXEC') or die; ?>
<?php
	global $app;

	require_once('admin/library/Models/Menu.php');

	$MenuModel = new MenuModel();
	$MenuItems = json_decode( file_get_contents('admin/data/menu.txt'), 1 );
	$menus = $MenuModel->sortItems( $MenuItems );
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include 'blocks/head.php'; ?>
	</head>

	<body class="menu">

		<?php include 'blocks/scripts.php'; ?>
		<?php include 'blocks/header-black.php'; ?>

		<div class="menu-section-1">
			<div class="container">
				<div class="t1">
					<div class="p1">
						МЕНЮ
					</div>
				</div>
				<div class="decor">
					<img src="<?php echo $app->baseurl; ?>/assets/images/main/decor.png" alt="">
				</div>
				<div class="t2">
					<div class="p1">
						Різноманітні страви чекають того, щоб ви ними насолодилися.
					</div>
				</div>
			</div>
		</div>

		<div class="menu-section-2">
			<div class="container">
				<div class="tab d-none d-sm-block">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							<?php foreach ( $menus as $key => $menu ) : ?>
							<a class="nav-item nav-link i<?php echo $key; ?> <?php echo ($key == 0) ? 'active' : ''; ?>" href="#nav-i<?php echo $key; ?>" role="tab" id="nav-i<?php echo $key; ?>-tab" data-toggle="tab" aria-controls="nav-<?php echo $key; ?>" aria-selected="<?php echo ($key == 0) ? 'true' : 'false'; ?>">
								<?php echo $menu["fields"]["title"]; ?>
							</a>
							<?php endforeach; ?>
						</div>
					</nav>
					<div class="tab-content " id="nav-tabContent">
						<?php foreach ( $menus as $key => $items ) : ?>
						<div class="tab-pane i<?php echo $key; ?> fade <?php echo ($key == 0) ? 'show' : ''; ?> <?php echo ($key == 0) ? 'active' : ''; ?>" id="nav-i<?php echo $key; ?>" role="tabpanel" aria-labelledby="nav-i<?php echo $key; ?>-tab">

							<div class="row r1">
								<div class="col-sm-10 mb">

									<img src="<?php echo $app->baseurl; ?>/admin/<?php echo $items["fields"]["photo-1"];?>" alt="">
								</div>

								<div class="col-sm-10">

									<?php foreach ( $items["menu"] as $key => $item ) : ?>

									<?php if($item["price"] == ""): ?>
									<?php else: ?>
									<div class="item row">
										<div class="col-sm-8 col-7">
											<div class="title">
												<div class="p1">
													<?php echo $item["name"]; ?>
												</div>
											</div>
											<div class="description">
												<div class="p1">
													<?php echo $item["composition"]; ?>
												</div>
											</div>
										</div>
										<div class="col-sm-2 col-2 p0">
											<div class="gram">
												<div class="p1">
													<?php echo $item["weight"]; ?> gr
												</div>
											</div>
										</div>
										<div class="col-sm-2 col-3">
											<div class="price">
												<div class="p1">
													<?php echo $item["price"]; ?> грн.
												</div>
											</div>
										</div>
									</div>
									<?php endif; ?>
									<?php endforeach; ?>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="tab slick d-block d-sm-none">
					<?php foreach ( $menus as $key => $menu ) : ?>
					<div class="item-slid">
						<div class="name">
							<div class="p1">
								<?php echo $menu["fields"]["title"]; ?>
							</div>
						</div>
						<hr>
						<div class="content">

							<div class="i<?php echo $key; ?>">
								<div class="row r1">
									<div class="col-sm-10 mb">
										<img src="<?php echo $app->baseurl; ?>/admin/<?php echo $menu["fields"]["photo-1"];?>">
									</div>
									<div class="col-sm-10">
										<?php foreach ( $menu["menu"] as $key => $item ) : ?>
										<?php if($item["price"] == ""): ?>
										<?php else: ?>
										<div class="item row">
											<div class="col-sm-8 col-7">
												<div class="title">
													<div class="p1">
														<?php echo $item["name"]; ?>
													</div>
												</div>
												<div class="description">
													<div class="p1">
														<?php echo $item["composition"]; ?>
													</div>
												</div>
											</div>
											<div class="col-sm-2 col-2 p0">
												<div class="gram">
													<div class="p1">
														<?php echo $item["weight"]; ?> ml
													</div>
												</div>
											</div>
											<div class="col-sm-2 col-3">
												<div class="price">
													<div class="p1">
														<?php echo $item["price"]; ?> грн.
													</div>
												</div>
											</div>
										</div>
										<?php endif; ?>
										<?php endforeach; ?>
									</div>
								</div>
							</div>

						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<div class="up go-to-block" data-target=".menu"><i class="fas fa-angle-double-up"></i></div>
		<?php include 'blocks/footer.php'; ?>
		<?php include 'blocks/modals.php'; ?>
	</body>

	</html>