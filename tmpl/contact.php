<?php defined('_JEXEC') or die; ?>
<?php
	global $app;

	$options = json_decode( file_get_contents('admin/data/fields.txt'), 1 );
	
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include 'blocks/head.php'; ?>
	</head>

	<body class="contact">

		<?php include 'blocks/scripts.php'; ?>
		<?php include 'blocks/header-black.php'; ?>

		<div class="contact-section-1">
			<div class="container">
				<div class="t1">
					<div class="p1">
						Контакти
					</div>
				</div>
				<div class="decor">
					<img src="<?php echo $app->baseurl; ?>/assets/images/main/decor.png" alt="">
				</div>
				<div class="t2">
					<div class="p1">
						Дайте нам знати, якщо у вас є запитання щодо нашого меню, послуги або іншої інформації, яку ви хочете знати.
					</div>
				</div>
			</div>
		</div>
		<div class="contact-section-2">
			<div class="container">
				<div class="row r1">
					<div class="col-lg-8 col-md-6">
						<div class="t1">
							<div class="p1">
								Будь на зв'язку
							</div>
						</div>
						<div class="line">
							<img src="<?php echo $app->baseurl; ?>/assets/images/main/contact-line.png" alt="">
						</div>
						<div class="box">
							<form method="post">
								<div class="row r2">
									<div class="col-md-12">
										<div class="input-group in-1">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
											</div>
											<input type="text" class="form-control" placeholder="Ім'я користувача" aria-label="Username" aria-describedby="basic-addon1" name="name" required />
										</div>
										<div class="input-group in-4">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon4"><i class="fas fa-envelope"></i></span>
											</div>
											<input type="email" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="basic-addon4" name="email" required />
										</div>
										<div class="input-group in-2">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon2"><i class="fas fa-mobile-alt"></i></i></span>
											</div>
											<input type="text" class="form-control" placeholder="Номер телефону" aria-label="Phone" aria-describedby="basic-addon2" name="phone" required />
										</div>
										<div class="textblock">
											<textarea name="coment" id="" cols="30" rows="10" required></textarea>
										</div>
									</div>
								</div>
								<div class="bat"><button class="btn1" type="submit">Забронювати столик</button></div>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="t1 cont">
							<div class="p1">
								Контакти
							</div>
						</div>
						<div class="line">
							<img src="<?php echo $app->baseurl; ?>/assets/images/main/contact-line.png" alt="">
						</div>

						<div class="row mapp">
							<div class="col-md-12 col-sm-6">
								<div class="map">
									<div class="media">
										<div class="cir align-self-center">
											<i class="fas fa-map-marker"></i>
										</div>
										<div class="media-body">
											<div class="t2">
												<div class="p1">
													Перший ресторан
												</div>
											</div>
											<div class="t3">
												<div class="p1">
													158 White Oak Drive Kansas City
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<div class="map">
									<div class="media">
										<div class="cir align-self-center">
											<i class="fas fa-map-marker"></i>
										</div>
										<div class="media-body">
											<div class="t2">
												<div class="p1">
													Другий ресторан
												</div>
											</div>
											<div class="t3">
												<div class="p1">
													158 White Oak Drive Kansas City
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<div class="map">
									<div class="media">
										<div class="cir align-self-center">
											<i class="fas fa-mobile-alt"></i>
										</div>
										<div class="media-body">
											<div class="t2">
												<div class="p1">
													Номер телефону
												</div>
											</div>
											<div class="t3">
												<div class="p1">
													<?php echo $app->getField($options,'phone'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="col-md-12 col-sm-6">
								<div class="map">
									<div class="media">
										<div class="cir align-self-center">
											<i class="fas fa-envelope"></i>
										</div>
										<div class="media-body">
											<div class="t2">
												<div class="p1">
													Email
												</div>
											</div>
											<div class="t3">
												<div class="p1">
													<?php echo $app->getField($options,'email'); ?>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="contact-section-3">
			<div class="container-fluid p0">
				<div class="frame">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d84279.90020395692!2d26.509964905732808!3d48.69120387288715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4733b873f87ab577%3A0x82ac3b42e4f75137!2z0JrQsNC80LXQvdC10YYt0J_QvtC00L7Qu9GM0YHQutC40LksINCl0LzQtdC70YzQvdC40YbQutCw0Y8g0L7QsdC70LDRgdGC0Yw!5e0!3m2!1sru!2sua!4v1527161282431" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

		<div class="up go-to-block" data-target=".contact"><i class="fas fa-angle-double-up"></i></div>
		<?php include 'blocks/footer.php'; ?>
		<?php include 'blocks/modals.php'; ?>
	</body>

	</html>