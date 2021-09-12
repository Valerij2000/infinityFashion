<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Галлерея женской одежды и спортивных женских купальников</title>
	<meta name="description" content="">
	<meta name="author" content="https://vk.com/codermind">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

	<script src="js/jquery1111.min.js" type="text/javascript"></script>
  <!-- Fotorama from CDNJS, 19 KB -->
  <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
	<script src="js/script.js"></script>

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<? require 'header.php' ?>

<section id="container">
	<div class="wrap-container">
		<div class="crumbs zerogrid">
			<ul>
				<li><a href="index.php">Главная</a></li>
				<li><a href="sport_swim.php">Спортивные купальники</a></li>
			</ul>
		</div>
		<section class="content-box box-gallery"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
                <div class="fotorama img_swim_sport" data-nav="thumbs">
                  <img src="images/catalog/sport_swim/1.png" alt="">
                  <img src="images/catalog/sport_swim/2.png" alt="">
                  <img src="images/catalog/sport_swim/3.png" alt="">
                </div>
							</div>
						</div>
					</div>
          <div class="col-1-3">
            <div class="wrap-col">
              <div class="item">
                <div class="fotorama img_swim_sport" data-nav="thumbs">
                  <img src="images/catalog/sport_swim/4.png" alt="">
                  <img src="images/catalog/sport_swim/5.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-1-3">
            <div class="wrap-col">
              <div class="item">
                <div class="fotorama img_swim_sport" data-nav="thumbs">
                  <img src="images/catalog/sport_swim/8.png" alt="">
                  <img src="images/catalog/sport_swim/9.png" alt="">
                </div>
              </div>
            </div>
          </div>
				</div>
        <div class="row">
					<div class="col-1-3">
						<div class="wrap-col">
							<div class="item">
                <div class="fotorama img_swim_sport" data-nav="thumbs">
                  <img src="images/catalog/sport_swim/10.png" alt="">
                  <img src="images/catalog/sport_swim/11.png" alt="">
                </div>
							</div>
						</div>
					</div>
          <div class="col-1-3">
            <div class="wrap-col">
              <div class="item">
                <div class="fotorama img_swim_sport" data-nav="thumbs">
                  <img src="images/catalog/sport_swim/13.png" alt="">
                  <img src="images/catalog/sport_swim/14.png" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-1-3">
            <div class="wrap-col">
              <div class="item">
                <div class="fotorama img_swim_sport" data-nav="thumbs">
                  <img src="images/catalog/sport_swim/15.png" alt="">
                  <img src="images/catalog/sport_swim/16.png" alt="">
                </div>
              </div>
            </div>
          </div>
				</div>
			</div>
		</section>
		<hr class="line">
	</div>
</section>
<? require 'footer.php' ?>

<script src="js/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');
    });
</script>


</div>
</body></html>
