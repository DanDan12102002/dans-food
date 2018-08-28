<?php defined('_JEXEC') or die; ?>
<?php
	global $app;
	
	require_once('admin/library/Models/Review.php');
	require_once('admin/library/Models/Menu.php');
	require_once('admin/library/Models/Article.php');

	$ReviewModel = new ReviewModel();
	$ReviewItems = json_decode( file_get_contents('admin/data/reviews.txt'), 1 );
	$reviews = $ReviewModel->sortItems( $ReviewItems );

	$MenuModel = new MenuModel();
	$MenuItems = json_decode( file_get_contents('admin/data/menu.txt'), 1 );
	$menus = $MenuModel->sortItems( $MenuItems );

	$ArticleModel = new ArticleModel();
	$ArticleItems = json_decode( file_get_contents('admin/data/articles.txt'), 1 );
	$articles = $ArticleModel->sortItems( $ArticleItems );
	
	$options = json_decode( file_get_contents('admin/data/fields.txt'), 1 );
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include 'blocks/head.php'; ?>
	</head>

	<body class="home">
		<?php include 'blocks/scripts.php'; ?>
		<div class="section-1">
			<?php include 'blocks/header.php'; ?>
			<div class="container">
				<div class="sec-1">
					<div class="top wow fadeInUp" data-wow-delay="0.3s">
						<img src="<?php echo $app->baseurl; ?>/assets/images/main/top.png" alt="">
					</div>
					<div class="t1 wow fadeInUp" data-wow-delay="0.7s" data-wow-duration="1s">
						<div class="p1">
							РЕСТОРАН DAN'S FOOD
						</div>
					</div>
					<div class="t2 wow fadeInUp" data-wow-delay="1s" data-wow-duration="1s">
						<div class="p1">
							Смачно. Вишукано. Гарно
						</div>
					</div>
					<div class="line wow fadeInUp" data-wow-delay="1.5s" data-wow-duration="1s"></div>
				</div>
			</div>
		</div>
		<div class="section-2">
			<div class="container">
				<div class="row r1">
					<div class="col-md-6">
						<img class="wow bounceIn" data-wow-delay="" data-wow-duration="0.5s" src="<?php echo $app->baseurl; ?>/assets/images/main/story.jpg" alt="">
					</div>
					<div class="col-md-6">
						<div class="t1">
							<div class="p1">
								ДІЗНАЙСЯ
							</div>
						</div>
						<div class="t2">
							<div class="p1">
								Нашу Iсторію
							</div>
						</div>
						<div class="t3">
							<div class="p1">
								МИ ПИШАЄМОСЬ НАШИМ РЕСТОРАНОМ
							</div>
						</div>
						<div class="t4">
							<div class="p1">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi utm aliquip ex ea commodo.
							</div>
						</div>

						<div class="bat">
							<a href="about">ПРО НАС</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-3">
			<div class="container">
				<div class="row r1">
					<div class="col-md-8">
						<div class="t1">
							<div class="p1">
								БРОНЮВАННЯ
							</div>
						</div>
						<div class="t2">
							<div class="p1">
								Ви можете зателефонувати нам за номером <span class="orange">888-88888</span>
							</div>
						</div>
						<div class="box">
							<form method="post">
								<div class="row r2">
									<div class="col-md-6">
										<div class="input-group  in-4">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon4"><i class="fas fa-envelope"></i></span>
											</div>
											<input type="email" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="basic-addon4" name="email" required />
										</div>
										<div class="input-group date" id="datetimepicker1" data-target-input="nearest">
											<div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
												<div class="input-group-text"><i class="fa fa-calendar"></i></div>
											</div>
											<input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" required placeholder="Дата" />
										</div>
									</div>
									<div class="col-md-6">
										<div class="input-group in-5">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect01"><i class="fas fa-male"></i></label>
											</div>
											<select class="custom-select" name="people" id="inputGroupSelect01" required />
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
								<div class="row r3">
									<div class="textblock">
										<textarea name="coment" id="" cols="30" rows="10" required></textarea>
									</div>
								</div>
								<div class="bat"><button class="btn1" type="submit">Забронювати столик</button></div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section-4">
			<div class="container">
				<div class="t1">
					<div class="p1">
						НАШЕ МЕНЮ
					</div>
				</div>
				<div class="t2">
					<div class="p1">
						Смачна і гарна ціна
					</div>
				</div>

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
		<div class="section-5">
			<div class="container">
				<div class="t1">
					<div class="p1">
						ВІДГУКИ
					</div>
				</div>
				<div class="t2">
					<div class="p1">
						Наші гості говорять
					</div>
				</div>
				<hr>
				<div class="car">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
						</ol>
						<div class="carousel-inner">
							<div class="carousel-inner">
								<?php foreach ( $reviews as $key => $review ) : ?>
								<div class="carousel-item <?php echo ($key == 0) ? 'active' : ''; ?>">
								<div class="t3">
									<div class="p1">
										<?php echo $review['fields']['intro']; ?>
									</div>
								</div>
								<div class="whom">
									<div class="p1">
										<?php echo $review['fields']['title']; ?>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
					</div>
					<a class="con carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							<span aria-hidden="true"><i class="fas fa-long-arrow-alt-left"></i></span>
						</a>
					<a class="con carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							<span aria-hidden="true"><i class="fas fa-long-arrow-alt-right"></i></span>
						</a>
				</div>
			</div>
			<hr>
		</div>
		</div>

		<?php
				$photos = glob('admin/media/source/Gallery/*');
			?>

			<div class="section-6">
				<div class="container-fluid">
					<div class="t1">
						<div class="p1">
							ВИШУКАНІ СТРАВИ
						</div>
					</div>
					<div class="t2">
						<div class="p1">
							НАША ГАЛЕРЕЯ
						</div>
					</div>
					<div class="gallery row p0">
						<div class="fotorama d-xl-none" data-nav="thumbs" data-width="513" data-height="288" data-ratio="16/9">
							<?php foreach ( $photos as $key => $photo ) : ?>
							<a href="./<?php echo $photo; ?>">
						<img src="./<?php echo $photo; ?>" alt="">
						</a>
						<?php endforeach; ?>
					</div>

					<div class="fotorama d-none d-xl-block" data-nav="thumbs" data-width="1001" data-height="563" data-ratio="16/9">
						<?php foreach ( $photos as $key => $photo ) : ?>
						<a href="./<?php echo $photo; ?>">
					<img src="<?php echo $app->baseurl; ?>/<?php echo $photo; ?>" alt="">
					</a>
					<?php endforeach; ?>
				</div>
			</div>
			</div>
			</div>

			<?php
				$photos = glob('admin/media/source/Blog/*');
			?>
				<div class="section-7 wow fadeInUp" data-wow-duration="1s">
					<div class="container">
						<div class="t1">
							<div class="p1">
								НОВИНИ
							</div>
						</div>
						<div class="t2">
							<div class="p1">
								Наш популярний блог
							</div>

						</div>

						<div class="row r1">
							<div class="col-sm-10 col-lg-8">
								<?php foreach( $articles as $key => $article ) : ?>
								<?php 
									$date = $article['fields']['date']; 
									setlocale(LC_ALL, 'uk_UA.utf8');
									$_monthsList = array(
									"1"=>"Січня","2"=>"Лютого","3"=>"Березня",
									"4"=>"Квітня","5"=>"Травня", "6"=>"Червня",
									"7"=>"Липня","8"=>"Серпня","9"=>"Вересня",
									"10"=>"Жовтня","11"=>"Листопада","12"=>"Грудня");

									$month = $_monthsList[date("n")];
								?>
								<?php
									if ( $key > 0 ) :
										break;
									endif;
								?>
									<div class="blog-box">
										<div class="white d-flex d-sm-none align-self-center">
											<div class="flex">
												<div class="post-by fl">
													<div class="p1">
														Опублікував <span class="orange"><?php echo $article['fields']['author']; ?></span>
													</div>
												</div>
											</div>
											<div class="t d-none d-sm-block">
												<div class="p1">
													<a href="<?php echo $app->baseurl; ?>/blog/article-<?php echo $key+1; ?>"><?php echo $article['fields']['title']; ?></a>
												</div>
											</div>
										</div>
										<div class="img-blog">
											<img src="<?php echo $app->baseurl; ?>/admin/<?php echo $article['fields']['photo-1']; ?>" alt="">
										</div>
										<div class="titles">
											<div class="media">
												<div class="when">
													<div class="p1">
														<span class="num">
														<?php echo date("d", strtotime($date)); ?>
													</span> <br>
														<?php  echo date("$month", strtotime($date)); ?>
													</div>
												</div>
												<div class="media-body d-none d-sm-block align-self-center">
													<div class="flex">
														<div class="post-by fl">
															<div class="p1">
																Опублікував <span class="orange"><?php echo $article['fields']['author']; ?></span>
															</div>
														</div>
													</div>
													<div class="t d-none d-sm-block">
														<div class="p1">
															<a href="<?php echo $app->baseurl; ?>/blog/article-<?php echo $key+1; ?>"><?php echo $article['fields']['title']; ?></a>
														</div>
													</div>
												</div>

											</div>
										</div>

										<div class="title d-block d-sm-none">
											<div class="p1">
												<a href="<?php echo $app->baseurl; ?>/blog/article-<?php echo $key+1; ?>"><?php echo $article['fields']['title']; ?></a>
											</div>
										</div>
										<div class="text">
											<div class="p1">
												<?php echo $article['fields']['intro']; ?>
											</div>
										</div>

										<div class="read-more"><a class="more" href="<?php echo $app->baseurl; ?>/blog/article-<?php echo $key+1; ?>">Читати далі<i class="fas fa-angle-double-right"></i></a></div>
									</div>

									<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div>

				<div class="up go-to-block" data-target=".home"><i class="fas fa-angle-double-up"></i></div>
				<?php include 'blocks/footer.php'; ?>
				<?php include 'blocks/modals.php'; ?>

	</body>

	</html>