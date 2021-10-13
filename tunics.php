<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Туники и платья, производство Польша и Беларусь</title>
	<meta name="description" content="Платья и туники производства Беларусь и Польши, высокого качества. Скидки на покупки через контактную форму сайта до 15%. Женские туники на любой вкус и выбор покупателя, качественные трикатажные платья подойдут для изысканной леди.">
	<meta name="author" content="https://www.instagram.com/nikonomarin">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="wrap-body">
<? require 'header.php' ?>
<section id="container">
	<div id="button-up">
		<i class="fa fa-chevron-up"></i>
	</div>
	<div class="wrap-container">
		<div class="crumbs zerogrid">
			<ul>
				<li><a href="index.php">Главная</a></li>
				<li><a href="tunics.php">Туники, платья</a></li>
			</ul>
		</div>
		<section class="content-box box-gallery"><!--Start Box-->
			<div class="zerogrid">
        <div class="row">
          <?php for ($i = 1; $i <= 12; $i++) { ?>
  					<div class="col-1-3">
  						<div class="wrap-col ">
  							<div class="item">
  								<a class="example-image-link" href="images/tunics/<?php echo $i.'.jpg'; ?>" data-lightbox="example-set" data-title="Кликните вправо или влево, чтобы увидеть больше фотографий.">
  									<div class="zoom-container">
  										<div class="zoom-caption">
  											<div class="caption-inner">
  												<div class="caption-inner1">
  													<i class="fa fa-eye"></i>
  												</div>
  											</div>
  										</div>
  										<img class="example-image lozad" src="images/tunics/<?php echo $i.'.jpg'; ?>" alt=""/>
  									</div>
  								</a>
  							</div>
  						</div>
  					</div>
          <?php } ?>
				</div>
			</div>
		</section>
		<hr class="line">
	</div>
</section>
<? require 'footer.php' ?>
</div>
<script src="js/jquery1111.min.js" type="text/javascript"></script>
<!-- Modal cards -->
<script src="js/lightbox-plus-jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});
		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');
    });
</script>
<!-- button-to-top -->
<script type="text/javascript" src="js/buttonToTop.js"></script>
<!-- lazy load js -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script type="text/javascript" src="js/lazyLoad.js"></script>
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PZHSFKE4LV"></script>
<script type="text/javascript" src="js/googleAnalytics.js"></script>
<script src="js/script.js"></script>
</body></html>
