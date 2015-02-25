<div id="sidebar">
	<div class="nav">
		<ul>
			<!-- Creation of menu items, determination of active link and insertion hrefs -->
			<?php foreach ($menu as $item) :?>
				<li <?=$_SERVER['REQUEST_URI'] == $item[0] ? 'class="active"' : '' ?>><a href="<?=$item[0] ?>"><?=$item[1]?></a></li>
			<?endforeach;?> 
		</ul>
	</div>
	<div class="contacts">
		<div class="caption"><h2>Контакты</h2></div>
		<div class="contact mail">
			<div class="icon mail"></div>
			<span><a href="mailto:trololo@gmail.com">trololo@gmail.com</a></span>
		</div>
		<div class="contact phone">
			<div class="icon phone"></div>
			<span><a href="tel:+70101010101">+70101010101</a></span>
		</div>
		<div class="contact skype">
			<div class="icon skype"></div>
			<span><a href="skype:trololo">trololo</a></span>
		</div>
	</div>
</div>