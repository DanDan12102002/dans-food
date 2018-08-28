<?php defined('_JEXEC') or die; ?>
<?php
	global $app;
	$options = json_decode( file_get_contents('admin/data/fields.txt'), 1 );
?>
<footer>
	<div class="top-footer">
		<div class="container">
			<div class="row r1">
				<div class="col-lg-8 col-md-12 pt">
					<div class="row r1-1">
						<div class="col-md-8 col-sm-12">
							<div class="logo"><img src="<?php echo $app->baseurl; ?>/assets/images/main/logo.png" alt=""></div>
						</div>
						<div class="col-md-4 col-sm-12">
							<div class="icons">
								<div class="ic-1">
									<a href="https://www.facebook.com/profile.php?id=100017213259299"><i class="fab fa-facebook-f"></i></a>
								</div>
								<div class="ic-2">
									<a href="https://www.instagram.com/dan_prozar/"><i class="fab fa-instagram"></i></a>
								</div>
								<div class="ic-3">
									<a href="https://vk.com/dan_proz"><i class="fab fa-vk"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="t1">
						<div class="p1">
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat Duis aute irure dolor.
						</div>
					</div>
					
					<hr>
					
					<div class="r1-2 row">
						<div class="col-md-4 col-sm-12">
							<div class="media">
								<div class="img-cont align-self-center mr-3">
									<i class="fas fa-map-marker-alt"></i>
								</div>
							
								<div class="media-body">
									<div class="text">
										<div class="p1">
											Кам'янець-Подільський, Хмельницька область, Україна 32300. 
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12">
							<div class="media sev">
								<div class="img-cont align-self-center mr-3">
									<i class="fas fa-mobile"></i>
								</div>
							
								<div class="media-body">
									<div class="text">
										<div class="p1">
											<?php echo $app->getField($options,'phone'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-md-4 col-sm-12">
							<div class="media">
								<div class="img-cont align-self-center mr-3">
									<i class="fas fa-envelope"></i>
								</div>
							
								<div class="media-body">
									<div class="text">
										<div class="p1">
											<?php echo $app->getField($options,'email'); ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-12">
					<div class="box">
						<div class="poa d-block d-sm-none d-md-none d-lg-block d-xl-block">
							<img src="<?php echo $app->baseurl; ?>/assets/images/main/ramka.png" alt="">
						</div>
						<div class="poa d-none d-md-block d-sm-none d-lg-none d-xl-none">
							<img src="<?php echo $app->baseurl; ?>/assets/images/main/ramka-big.png" alt="">
						</div>
						<div class="poa d-none d-sm-block d-lg-none d-md-none d-xl-none">
							<img src="<?php echo $app->baseurl; ?>/assets/images/main/ramka-sm.png" alt="">
						</div>
						
						<div class="ramka d-block d-sm-none d-md-none d-lg-block d-xl-block">
					
							<div class="t1">
								<div class="p1">
									Години роботи
								</div>
							</div>
							
							<div class="hours">
								<div class="t2">
									<div class="p1">
										Понеділок: ....................... <span class="p1-1">7:00 - 21:00</span>
									</div>
								</div>
								<div class="t2">
									<div class="p1">
										Вівторок: .......................... <span class="p1-1">7:00 - 21:00</span>
									</div>
								</div>
								<div class="t2">
									<div class="p1">
										Середа: ............................. <span class="p1-1">7:00 - 21:00</span>
									</div>
								</div>
								<div class="t2">
									<div class="p1">
										Четвер: ............................. <span class="p1-1">7:00 - 21:00</span>
									</div>
								</div>
								<div class="t2">
									<div class="p1">
										П'ятниця: ......................... <span class="p1-1">7:00 - 21:00</span>
									</div>
								</div>
								<div class="t2">
									<div class="p1">
										Субота: ............................. <span class="p1-1">7:00 - 21:00</span>
									</div>
								</div>
								<div class="t2">
									<div class="p1">
										Неділя: .............................. <span class="p1-1">Зачинено</span>
									</div>
								</div>
							</div>
							
							<div class="t3">
								<div class="p1">
									Номер для резервування
								</div>
							</div>
							
							<div class="t4">
								<div class="p1">
									+38 (098) 854-9885
								</div>
							</div>
						</div>
						
						<div class="ramka  d-none d-md-block d-sm-block d-lg-none d-xl-none">
							<div class="row r1">
								<div class="col-sm-12 col-md-6">
									<div class="t1">
										<div class="p1">
											Години роботи
										</div>
									</div>

									<div class="hours">
										<div class="t2">
											<div class="p1">
												Понеділок: ....................... <span class="p1-1">7:00 - 21:00</span>
											</div>
										</div>
										<div class="t2">
											<div class="p1">
												Вівторок: .......................... <span class="p1-1">7:00 - 21:00</span>
											</div>
										</div>
										<div class="t2">
											<div class="p1">
												Середа: ............................. <span class="p1-1">7:00 - 21:00</span>
											</div>
										</div>
										<div class="t2">
											<div class="p1">
												Четвер: ............................. <span class="p1-1">7:00 - 21:00</span>
											</div>
										</div>
										<div class="t2">
											<div class="p1">
												П'ятниця: ......................... <span class="p1-1">7:00 - 21:00</span>
											</div>
										</div>
										<div class="t2">
											<div class="p1">
												Субота: ............................. <span class="p1-1">7:00 - 21:00</span>
											</div>
										</div>
										<div class="t2">
											<div class="p1">
												Неділя: .............................. <span class="p1-1">Зачинено</span>
											</div>
										</div>
									</div>
								</div>
							
								<div class="col-sm-12 col-md-6">
									<div class="t3">
										<div class="p1">
											Номер для резервування
										</div>
									</div>

									<div class="t4">
										<div class="p1">
											<?php echo $app->getField($options,'phone'); ?>
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
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="t1">
					<div class="p1">
						Copyright © <?php echo date('Y'); ?> - by Dan Pro
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>