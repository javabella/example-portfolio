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

	<title>
	<?php foreach ($menu as $item) :?>
		<?=$_SERVER['REQUEST_URI'] == $item[0] ? ($item[1].' '.$item[2].'  ') : ' ' ?>
	<?endforeach;?> 

	  Lena - pro-verstalka</title>

	<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32">
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<link rel="icon" type="image/x-icon" href="favicon.ico">

	<meta name="msapplication-TileColor" content="#da532c">

	<link rel="stylesheet" type="text/css" href="css/style.css">


</head>
<body>
	<div class="wrapper">
		<div id="header">
			<div class="layout clearfix">
				<div class="left">
					<div class="logo"></div>
				</div>
				<div class="right">
					<ul class="socials"> 
						<li class="icon vk"><a href="/"></a></li> 
						<li class="icon tw"><a href="/"></a></li>
						<li class="icon fb"><a href="/"></a></li> 
						<li class="icon git"><a href="/"></a></li>
					</ul>
					<div class="icon menu" id="menu"></div>	
					<div class="icon arr to-top"></div>
					<div id="pop-nav">
						<div class="nav">
							<ul>
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
				