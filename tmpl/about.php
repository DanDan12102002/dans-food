<?php defined('_JEXEC') or die; ?>
<?php
	global $app;
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include 'blocks/head.php'; ?>
	</head>

	<body class="about">
		<?php include 'blocks/scripts.php'; ?>

		<?php include 'blocks/header-black.php'; ?>

		<div class="about-section-1">
			<div class="container">
				<div class="t1">
					<div class="p1">
						ПРО НАС
					</div>
				</div>
				<div class="decor">
					<img src="<?php echo $app->baseurl; ?>/assets/images/main/decor.png" alt="">
				</div>
				<div class="t2">
					<div class="p1">
						Ми принесемо вам незабутню хвилину з нашими вишуканими стравами.
					</div>
				</div>
			</div>
		</div>
		<div class="about-section-2">
			<div class="container">
				<div class="t1">
					<div class="p1">
						Історія ресторану Dan's Food
					</div>
				</div>
				<div class="line"><img src="<?php echo $app->baseurl; ?>/assets/images/main/un-line.png" alt=""></div>
				<div class="t2">
					<div class="p1">
						З чого починалась історія ресторану
					</div>
				</div>
				<div class="t3">
					<div class="p1">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nosrud lorem exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.Accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore.
					</div>
				</div>

			</div>
			<hr>
		</div>
		<div class="reserv-section-2 about-section-3">
			<div class="container">
				<div class="t1">
					<div class="p1">
						Бланк бронювання
					</div>
				</div>
				<div class="line"><img src="<?php echo $app->baseurl; ?>/assets/images/main/un-line.png" alt=""></div>

				<div class="box">
					<div class="t2">
						<div class="p1">
							Ми готові допомогти вам забронювати місце онлайн, щоб заощадити ваш час і гроші, або ви можете зателефонувати нам безпосередньо через гарячу лінію служби підтримки клієнтів: <span class="orange"><a href="tel::888888888">88-888-8888</a></span>
						</div>
					</div>
					<form method="post">
						<div class="row r1">
							<div class="col-md-6">
								<div class="input-group  in-1">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon1"><i class="fas fa-user-alt"></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Ім'я користувача" aria-label="Username" aria-describedby="basic-addon1" name="name" required />
								</div>
								<div class="input-group  in-2">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon2"><i class="fas fa-mobile-alt"></i></i></span>
									</div>
									<input type="text" class="form-control" placeholder="Номер телефону" aria-label="Phone" aria-describedby="basic-addon2" name="phone" required />
								</div>
								<div class="input-group date" id="datetimepicker1" data-target-input="nearest">
									<div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
										<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
									<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" required placeholder="Дата" />
								</div>
							</div>

							<div class="col-md-6">
								<div class="input-group  in-4">
									<div class="input-group-prepend">
										<span class="input-group-text" id="basic-addon4"><i class="fas fa-envelope"></i></span>
									</div>
									<input type="email" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="basic-addon4" name="email" required />
								</div>
								<div class="input-group in-5">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-male"></i></label>
									</div>
									<select class="custom-select" name="people" id="inputGroupSelect01" required>
										<option value="" selected>Скільки людей</option>
										<option value="1">1 людина</option>
										<option value="2">2 людини</option>
										<option value="3">3 людини</option>
										<option value="4">4 людини</option>
										<option value="5">5 людей</option>
										<option value="6">6 людей</option>
										<option value="7">7 людей</option>
										<option value="8">8 людей</option>
										<option value="9">9 людей</option>
										<option value="10">10 людей</option>
									</select>
								</div>
								<div class="input-group in-6">
									<div class="input-group-prepend">
										<label class="input-group-text" for="inputGroupSelect"><i class="fas fa-clock"></i></label>
									</div>
									<select class="custom-select" name="hours" id="inputGroupSelect" required />
									<option value="" selected>На яку годину</option>
									<option value="7">7:00</option>
									<option value="8">8:00</option>
									<option value="9">9:00</option>
									<option value="10">10:00</option>
									<option value="11">11:00</option>
									<option value="12">12:00</option>
									<option value="13">13:00</option>
									<option value="14">14:00</option>
									<option value="15">15:00</option>
									<option value="16">16:00</option>
									<option value="17">17:00</option>
									<option value="18">18:00</option>
									<option value="19">19:00</option>
									<option value="20">20:00</option>
									<option value="21">21:00</option>
									<option value="22">22:00</option>
									<option value="23">23:00</option>
									</select>
								</div>
							</div>
						</div>
						<div class="row r2">
							<div class="textblock">
								<textarea name="coment" id="" cols="30" rows="10" required></textarea>
							</div>
						</div>
						<div class="bat"><button class="btn1" type="submit">Забронювати столик</button></div>
					</form>
				</div>
			</div>
		</div>

		<div class="up go-to-block" data-target=".about"><i class="fas fa-angle-double-up"></i></div>
		<?php include 'blocks/footer.php'; ?>
		<?php include 'blocks/modals.php'; ?>

	</body>

	</html>