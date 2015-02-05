<!-- Add header and sidebar -->
<?php 
	include 'header.php';  
	include 'nav.php';
?>

<div id="content" id="call-me">
	<div class="block callme">
		<h1>У вас интересный проект? Напишите мне</h1>
		<form action="/contact-process" method="POST">
			<div class="clearfix">
				<div class="left">
					<label for="cli-name">Имя</label>
					<div class="input-wrapper cli-name">
						<input id="cli-name" class="field" type="text" name="client-name" placeholder="Как к Вам обращаться">
						<div class="tooltip">Вы не ввели имя<div class="icon arrow to-right"></div></div>
					</div>
					
				</div>
				<div class="right">
					<label for="cli-mail">Email</label>
					<div class="input-wrapper cli-email">
						<input id="cli-mail" class="field" type="email" name="client-email" placeholder="Куда мне писать">	
						<div class="tooltip">Вы не ввели email<div class="icon arrow to-left"></div></div>
					</div>
					
				</div>
			</div>
			
			
			<label for="cli-mes">Сообщение</label>
			<div class="input-wrapper cli-message">
				<textarea id="cli-mes" class="field" name="client-message" placeholder="Кратко в чем суть"></textarea>	
				<div class="tooltip">Ваш вопрос<div class="icon arrow to-right"></div></div>
			</div>
			
			<label for="cli-cap" class="smaller">Введите код, указанный на картинке</label>
			<div class="clearfix capcha-row">
				<div class="left">
					<div class="capcha">
						<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image">
					</div>	
				</div>
				<div class="right">
					<div class="input-wrapper cli-capcha">
						<input id="cli-cap" class="field" type="text" placeholder="Введите код" name="captcha_code">
						<div class="tooltip">Неправильный код<div class="icon arrow to-left"></div></div>	
					</div>
					<a id="another-captcha" href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ другое изображение ]</a>
				</div>
			</div>
		
		
			<div class="clearfix btn-row">
				<div class="left">
					<input class="btn" type="submit" value="Отправить">
				</div>
				<div class="right">
					<input class="btn" type="reset" value="Очистить">
				</div>
			</div>
			
			
			<div class="info-block"></div>
			
		</form>
	</div>
</div>


<!-- Add footer -->
<?php include 'footer.php' ?>
<!-- Add cross-browser placeholder -->
<script src="js/jquery.placeholder.js"></script>
<!-- Add js-ajax validation and sending letters-->
<script src="js/contact-me.js"></script> 


