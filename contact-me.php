<?php session_start(); ?>

<?php 
	include 'header.php';  
	include 'nav.php';
	
	include_once $_SERVER['DOCUMENT_ROOT'] . '/securimage/securimage.php';
    $securimage = new Securimage();

?>

<div id="content" id="call-me">
	<div class="block callme">
		<h1>У вас интересный проект? Напишите мне</h1>
		<form action="action.php" method="POST">
			<div class="clearfix">
				<div class="left">
					<p>Имя</p> 
					<div class="input-wrapper cli-name">
						<input type="text" name="client-name" placeholder="Как к Вам обращаться">
						<div class="tooltip">Вы не ввели имя<div class="icon arrow to-right"></div></div>
					</div>
					
				</div>
				<div class="right">
					<p>Email</p>
					<div class="input-wrapper cli-email">
						<input type="email" name="client-email" placeholder="Куда мне писать">	
						<div class="tooltip">Вы не ввели email<div class="icon arrow to-left"></div></div>
					</div>
					
				</div>
			</div>
			
			<p>Сообщение</p>
			<div class="input-wrapper cli-message">
				<textarea name="client-message" placeholder="Кратко в чем суть"></textarea>	
				<div class="tooltip">Ваш вопрос<div class="icon arrow to-right"></div></div>
			</div>
			

			<p class="smaller">Введите код, указанный на картинке</p>
			<div class="clearfix capcha-row">
				<div class="left">
					<div class="capcha">
						<img id="captcha" src="securimage/securimage_show.php" alt="CAPTCHA Image">
					</div>	
				</div>
				<div class="right">
					<div class="input-wrapper cli-capcha">
						<input type="text" placeholder="Введите код" name="captcha_code">
						<div class="tooltip one">Вы не ввели код<div class="icon arrow to-left"></div></div>
						<div class="tooltip two">Неправильный код<div class="icon arrow to-left"></div></div>	
					</div>
					<a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">[ другое изображение ]</a>
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
			
			
			
		</form>
	</div>
</div>



<?php include 'footer.php' ?>
<script src="js/valid.js"></script>

