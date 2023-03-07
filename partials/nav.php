<nav class="nav">
	<ul class="nav__list <?php echo $cls_list ?>">
		<?php foreach ($nav as $el) : ?>
			<li class="nav__item">
				<a class="nav__link" href="#">
					<span class="nav__text"><?php echo $el['text']; ?></span>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</nav>