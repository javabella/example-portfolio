<!-- Add header and sidebar -->
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

<!-- Add footer -->
<?php include 'footer.php' ?>

<div id="mask"></div>
	
<div id="add-project" class="block">
	<h2>Добавление проекта</h2>
	<div class="icon close"></div>
	<form>
		<div class="alert" id="add-error">
			<div class="icon close-red"></div>
			<h1>Ошибка!</h1>
			<p>Невозможно добавить проект.</p>		
		</div>

		<label for="p-name" class="proname">Название проекта</label>
		<div class="input-wrapper name">
			<input id="p-name" class="field" type="text" name="proj-name" placeholder="Введите название" >
			<div class="tooltip">введите название<div class="icon arrow to-right"></div></div>
		</div>

		<label>Картинка проекта</label>
		<div class="input-wrapper-file" id="file">
			<span id="file-name">Загрузите изображение</span>
			<label id="lab" for="file-inp"><div class="icon load"></div></label>
			<input class="field-file" id="file-inp" type="file" name="proj-img" accept="image/*" placeholder="Загрузите изображение" value="">
			<div class="tooltip">изображение<div class="icon arrow to-right"></div></div>
		</div>

		<label for="p-url" >URL проекта</label>
		<div class="input-wrapper url">
			<input id="p-url" class="field"  type="text" name="proj-url" placeholder="Добавьте ссылку">
			<div class="tooltip">ссылка на проект<div class="icon arrow to-right"></div></div>
		</div>
		
		<label for="p-desc">Описание</label>
		<div class="input-wrapper descrip">
			<textarea id="p-desc" class="field" type="text" name="proj-descrip" placeholder="Пара слов о Вашем проекте"></textarea>	
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

<!-- Add cross-browser placeholder -->
<script src="js/jquery.placeholder.js"></script>
<!-- Add modal handler and validation -->
<script src="js/modal.js"></script>
<script src="js/valid.js"></script>

