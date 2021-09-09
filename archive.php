<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Блог, место где вам расскажут о купальниках, их качестве и производителе</title>
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
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="js/jquery1111.min.js" type="text/javascript"></script>
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
		<div class="zerogrid">
			<div class="wrap-container clearfix">
				<div id="main-content">
					<div class="wrap-content">
						<div class="crumbs">
							<ul>
								<li><a href="index.php">Главная</a></li>
								<li><a href="archive.php">Блог</a></li>
							</ul>
						</div>
						<article>
							<div class="col-1-2">
								<div class="art-header">
									<img src="images/11.jpg"/>
								</div>
							</div>
							<div class="col-1-2">
								<div class="art-content t-center">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
									<a class="button" href="single.html">Read More</a>
								</div>
							</div>
						</article>
						<article>
							<div class="col-1-2 f-right ">
								<div class="art-header">
									<img src="images/12.jpg"/>
								</div>
							</div>
							<div class="col-1-2">
								<div class="art-content t-center">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
									<a class="button" href="single.html">Read More</a>
								</div>
							</div>
						</article>
						<article>
							<div class="col-1-2">
								<div class="art-header">
									<img src="images/13.jpg"/>
								</div>
							</div>
							<div class="col-1-2">
								<div class="art-content t-center">
									<h3>The title on the article</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia. Morbi rutrum vulputate est sed faucibus.consectetur adipiscing elit. Aliquam viverra convallis auctor. Sed accumsan libero quis mi commodo et suscipit enim lacinia.</p>
									<a class="button" href="single.html">Read More</a>
								</div>
							</div>
						</article>
					</div>
				</div>
				<hr class="line">
			</div>
		</div>
	</section>

<!--////////////////////////////////////Footer-->
<? require 'footer.php' ?>


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
