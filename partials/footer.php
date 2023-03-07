<footer class="footer">
	<div class="container">
		<div class="footer__content">
			<a class="footer__logo logo" href="/">
				<img src="/assets/images/logo-footer.svg" alt="логотип сайта" width="91" height="26">
			</a>

			<ul class="social">
				<?php foreach ($social as $el) : ?>
					<li class="social__item">
						<a class="social__link" href="#" target="_blank">
							<svg class="social__icon" width="35" height="35">
								<use xlink:href="#<?php echo $el['icon']; ?>"></use>
							</svg>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</footer>