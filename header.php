<!-- Create array of titles -->
<?php
$menu = array(
                0 => array(0 => '/', 1=> 'Обо мне', 2 => '@_@'),
                1 => array(0 => '/portfolio', 1=> 'Мои работы', 2 => '$_$'),
                2 => array(0 => '/contact-me', 1=> 'Связаться со мной', 2 => '*щ*')
            );
?>


<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Insert title depending on link -->
	<title>
		<?php foreach ($menu as $item) :?>
			<?=$_SERVER['REQUEST_URI'] == $item[0] ? ($item[1].' '.$item[2].'  ') : ' ' ?>
		<?endforeach;?> 

		Lena - pro-verstalka
	</title>

	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<meta name="msapplication-TileColor" content="#da532c">

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--[if lt IE 9]>
      <script src="js/respond.min.js"></script>
    <![endif]-->

    <!--[if (gte IE 6)&(lte IE 8)]>
	  <script type="text/javascript" src="js/selectivizr-min.js"></script>
	  <style>
			#add-project,
		    #alert-added {
		        margin-top: 1%;
		    }		
	  </style>
	<![endif]-->


</head>

<body>
	<div class="wrapper">
		<div id="header">
			<div class="layout clearfix">
				<div class="left">
					<div class="logo" title="Главная страница"><a href="/">pro-verstalka.ru</a></div>
				</div>
				<div class="right">
					<ul class="socials"> 
						<li class="icon vk" title="Я в VKontakte!! Нажимай быстрее"><a href="https://vk.com" target="_blank">я в Вконтакте</a></li> 
						<li class="icon tw" title="Я в Twitter!! Нажимай быстрее"><a href="/">я в Твитере</a></li>
						<li class="icon fb" title="Я в Facebook!! Нажимай быстрее"><a href="/">я в Фейсбуке</a></li> 
						<li class="icon git" title="Я на GitHub!! Нажимай быстрее"><a href="https://github.com" target="_blank">Я в Гитхабе</a></li>
					</ul>
					<div class="icon menu" id="menu"></div>	
					<div class="icon arr to-top"></div>
					<div id="pop-nav">
						<div class="nav">
							<ul>
								<!-- Creation of menu items, determination of active link and insertion hrefs -->
								<?php foreach ($menu as $item) :?>
									<li <?=$_SERVER['REQUEST_URI'] == $item[0] ? 'class="active"' : '' ?>><a href="<?=$item[0] ?>"><?=$item[1]?></a></li>
								<?endforeach;?> 
							</ul>
						</div>
					</div>
				</div>	
			</div>
			<div class="line clearfix">
				<div class="half-line one"></div>
				<div class="half-line two"></div>
			</div>
		</div>
	
		<div id="main">
			<div class="layout clearfix">
				