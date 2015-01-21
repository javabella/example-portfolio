</div>

			<div id="contacts-bottom" class="clearfix">
				<div class="contact phone">
					<div class="icon phone"></div>
					<span>+70101010101</span>
				</div>
				<div class="contact mail">
					<div class="icon mail"></div>
					<span>isuzu69@gmail.com</span>
				</div>
				<div class="contact skype">
					<div class="icon skype"></div>
					<span>isuzu69</span>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="line clearfix">
			<div class="half-line one"></div>
			<div class="half-line two"></div>
		</div>
		<div class="layout">
			<div class="icon login"><a href="login"></a></div>
			<p class="copyright">&#169; 2015, Это мой сайт, пожалуйста, не копируйте и не воруйте его</p>
		</div>
	</div>

	<script src="js/jquery-1.11.2.min.js"></script>
	<script>

		$(document).ready(function() {
			var firstLi = $('.nav li:first-child');
			var triangle = $('.icon.arr.to-top');
			if (firstLi.hasClass('active')) {
				triangle.addClass('blue');;
			} else {
				triangle.removeClass('blue');
			}

			$('#menu').on('click', function()  {
				if ($('#pop-nav').css('display') === 'none') {
					$('#header .arr').fadeIn();
					$('#pop-nav').fadeIn();
				} else {
					$('#header .arr').fadeOut();
					$('#pop-nav').fadeOut();
				}
			});

			
		});
	</script>
</body>
</html>