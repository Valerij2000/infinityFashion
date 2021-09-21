<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Контакты, информация фирмы m~InfinityFashion</title>
	<meta name="description" content="Контактная форма для связи с магазином женской одежды InfinityFashion">
	<meta name="author" content="https://www.instagram.com/nikonomarin">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>
<div class="wrap-body">
<? require 'header.php' ?>
<section id="container">
	<div class="zerogrid">
		<div class="wrap-container clearfix">
			<div id="main-content">
				<div class="wrap-content">
					<div class="crumbs">
						<ul>
							<li><a href="index.php">Главная</a></li>
							<li><a href="contact-page.php">Контакты</a></li>
						</ul>
					</div>
					<h1 class="entry-title">Как нас найти ?</h1>
					<article>
						<div class="art-header">
							<div class="embed-container maps">
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2389.340019467268!2d50.26926486871782!3d53.21175154484899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x41661b9511f4ca4b%3A0xb6afc735474ac2ed!2z0JzQvtC5IC0g0JrQuNGA0L7QstGB0LrQuNC5INCy0LXRidC10LLQvtC5INGA0YvQvdC-0Lo!5e0!3m2!1sru!2sru!4v1631194853871!5m2!1sru!2sru" width="100%" height="380" allowfullscreen="" loading="lazy"></iframe>
							</div>
						</div>
						<div class="art-content">
							<div class="row">
								<div class="col-1-3">
									<div class="wrap-col">
										<h3>Контактные данные</h3>
										<span style="color: #eee;">Отправьте письмо администрации, и мы ответим вам в течении нескольких минут.</span>
										<p>Ваше письмо очень важно для нас, администратор постарается ответить на все, интересующие вас, вопросы.</p>
										<p>Мы находимся г. Самара тк "Мой Кировский Вещевой Рынок" ряд 4, место 943<br></p>
									 	<div class="block_info">
											<span class="phone"><a href="tel:+7(927)263-13-10"> +7 (927) 263-13-10</a></span>
	 										<div class="block_icons">
												<a href="https://ok.ru/profile/556104770132" target="https://ok.ru/profile/556104770132"><i class="fa fa-search"></i></a>
		 										<a href="https://vk.com/id320255311" target="https://vk.com/id320255311"><i class="fa fa-vk"></i></a>
												<a href="https://www.instagram.com/nikonomarin/" target="https://www.instagram.com/nikonomarin/"><i class="fa fa-instagram"></i></a>
	 										</div>
									 	</div>
									</div>
								</div>
								<div class="col-2-3">
									<div class="wrap-col">
										<h3>Контактная форма</h3>
										<div class="contact">
											<div id="contact_form">
												<form name="form1" id="ff" method="post" action="telegram.php">
													<label class="row">
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="text" name="name" id="name" placeholder="Введите имя" required="required" />
															</div>
														</div>
														<div class="col-1-2">
															<div class="wrap-col">
																<input type="email" name="email" id="email" placeholder="Введите email" />
															</div>
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<input type="tel" name="subject" id="subject" placeholder="Номер телефона" required="required" />
														</div>
													</label>
													<label class="row">
														<div class="wrap-col">
															<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
															placeholder="Сообщение"></textarea>
														</div>
													</label>
													<center><input class="sendButton" type="submit" name="submitcontact" value="Отправить"></center>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
			<hr class="line">
		</div>
	</div>
</section>
<? require 'footer.php' ?>
</div>
<script src="js/jquery1111.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">$(function() {$("#subject").mask("8(999) 999-99-99");});</script>
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PZHSFKE4LV"></script>
<script type="text/javascript" src="js/googleAnalytics.js"></script>
<script src="js/script.js"></script>
</body></html>
