<?php defined('_JEXEC') or die; ?>
<?php
	global $app;
	
	require_once('admin/library/Models/Article.php');
	
	$ArticleModel = new ArticleModel();
	$ArticleItems = json_decode( file_get_contents('admin/data/articles.txt'), 1 );
	$articles = $ArticleModel->sortItems( $ArticleItems );
?>
	<!DOCTYPE html>
	<html>

	<head>
		<?php include 'blocks/head.php'; ?>
	</head>

	<body class="blog">
		<?php include 'blocks/scripts.php'; ?>

		<?php include 'blocks/header-black.php'; ?>

		<div class="blog-section-1">
			<div class="container">
				<div class="t1">
					<div class="p1">
						БЛОГ
					</div>
				</div>
				<div class="decor">
					<img src="<?php echo $app->baseurl; ?>/assets/images/main/decor.png" alt="">
				</div>
				<div class="t2">
					<div class="p1">
						Вся інформація та історії з нашого блогу допоможуть вам скуштувати найкращі страви.
					</div>
				</div>
			</div>
		</div>
		<div class="blog-section-2">
			<div class="container">
				<div class="row r1">
					<div class="col-sm-10 col-lg-8 r1-1">
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
								<!--?php print_r($article); ?-->
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

		<div class="up go-to-block" data-target=".blog"><i class="fas fa-angle-double-up"></i></div>
		<?php include 'blocks/footer.php'; ?>
		<?php include 'blocks/modals.php'; ?>

	</body>

	</html>