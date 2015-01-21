<?php 
	include 'header.php';  
	include 'nav.php';
?>

<div id="content" id="my-works">
	<div class="block works">
		<h1>Мои работы</h1>
		<div>
			<div class="project">
				<div class="preview">
					<img src="img/ss.JPG" alt="">
					<span><span>Lorem ipsum dolor sit</span></span>
				</div>

				<a href="">www.site.ru</a>	
				<p>Информаця о проекте 1 превью 2 строки...</p>
			</div>
			<div class="project">
				<div class="preview">
					<img src="img/ss.JPG" alt="">
					<span><span>название</span></span>
				</div>
				<a href="">www.site.ru</a>	
				<p>Информаця о проекте 1 превью 2 строки...</p>
			</div>
			<div class="project">
				<div class="preview">
					<img src="img/ss.JPG" alt="">
					<span><span>www.site.ru</span></span>
				</div>
				<a href="">www.site.ru</a>	
				<p>Информаця о проекте 1 превью 2 строки...</p>
			</div>
			<div class="project">
				<div class="preview">
					<img src="img/ss.JPG" alt="">
					<span><span>www.site.ru</span></span>
				</div>
				<a href="">www.site.ru</a>	
				<p>Информаця о проекте 1 превью 2 строки...</p>
			</div>
			<div id="add-btn" class="project">
				<div class="preview-add">
					<div class="icon addproj"></div>
					<p>Добавить проект</p>
				</div>
			</div>	
		</div>
	</div>
</div>

<?php include 'footer.php' ?>

<div id="mask"></div>
	
<div id="add-project" class="block">
	<h1>Добавление проекта</h1>
	<div class="icon close"></div>
	<form>
		<div class="alert" id="add-error">
			<div class="icon close-red"></div>
			<h1>Ошибка!</h1>
			<p>Невозможно добавить проект.</p>		
		</div>

		<p class="proname">Название проекта</p>
		<div class="input-wrapper name">
			<input id="error" type="text" name="proj-name" placeholder="Введите название" required>
			<div class="tooltip">введите название<div class="icon arrow to-right"></div></div>
		</div>

		<p>Картинка проекта</p>
		<div class="input-wrapper-file" id="error">
			<span id="file-name">Загрузите изображение</span>
			<label for="file"><div class="icon load"></div></label>
			<input id="file" type="file" name="proj-img" accept="image/*" placeholder="Загрузите изображение">
			<div class="tooltip">изображение<div class="icon arrow to-right"></div></div>
		</div>

		<p>URL проекта</p>
		<div class="input-wrapper url">
			<input id="error" type="text" name="proj-url" placeholder="Добавьте ссылку" required>
			<div class="tooltip">ссылка на проект<div class="icon arrow to-right"></div></div>
		</div>
		
		<p>Описание</p>
		<div class="input-wrapper descrip">
			<textarea id="error" type="text" name="proj-descrip" placeholder="Пара слов о Вашем проекте" required></textarea>	
			<div class="tooltip">описание проекта<div class="icon arrow to-right"></div></div>
		</div>
		<input class="btn" type="submit" value="Добавить">	
	</form>
	
</div>

<div id="alert-added" class="block">
	<div class="alert">
		<div class="icon close-green"></div>
		<h1>Ура!</h1>
		<p>Проект успешно добавлен.</p>		
	</div>
</div>

<script src="js/app.js"></script>