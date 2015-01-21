<div id="sidebar">
	<div class="nav">
		<ul>
			<?php foreach ($menu as $item) :?>
				<li <?=$_SERVER['REQUEST_URI'] == $item[0] ? 'class="active"' : '' ?>><a href="<?=$item[0] ?>"><?=$item[1]?></a></li>
			<?endforeach;?> 
		</ul>
	</div>
	<div class="contacts">
		<div class="caption"><h2>Контакты</h2></div>
		<div class="contact mail">
			<div class="icon mail"></div>
			<span>isuzu69@gmail.com</span>
		</div>
		<div class="contact phone">
			<div class="icon phone"></div>
			<span>+70101010101</span>
		</div>
		<div class="contact skype">
			<div class="icon skype"></div>
			<span>isuzu69</span>
		</div>
	</div>
</div>