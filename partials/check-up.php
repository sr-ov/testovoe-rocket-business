<section class="check-up">
	<div class="container">
		<div class="blaze-slider check-up-slider">
			<div class="blaze-container">
				<div class="blaze-track-container">
					<div class="blaze-track">
						<?php $checkups = getCheckups($db); ?>
						<?php foreach ($checkups as $checkup) : ?>
							<div class="check-up-slider__slide slide">
								<div class="slide__text">
									<h4 class="slide__title">Check-UP</h4>
									<p class="slide__subtitle">
										для <?php echo $checkup['sex'] === 'men' ? 'мужчин' : 'женщин'; ?>
									</p>

									<ul class="slide__list">
										<?php foreach ($checkup['services'] as $service) : ?>
											<li class="slide__item">
												<?php echo $service['title']; ?>
											</li>
										<?php endforeach; ?>
									</ul>

									<div class="slide__price">
										Всего <?php echo $checkup['price'] ?>₽
										<span class="slide__price-old"><?php echo $checkup['old_price'] ?>₽</span>
									</div>

									<div class="slide__buttons">
										<?php
										template(
											'button',
											['cls' => 'slide__button', 'text' => 'Записаться', 'attrs' => 'data-open="#мake-an-appointment"']
										);
										template(
											'button',
											['cls' => 'slide__button button--outline', 'text' => 'Подробнее']
										);
										?>
									</div>
								</div>

								<div class="slide__img">
									<img src="/assets/images/slider/1.jpg" alt="Врач пишет">
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="check-up-slider__nav-pagination slider-nav-pagination">
					<button class="slider-nav-pagination__button slider-nav-pagination__button blaze-prev" id="prev">
						<svg class="slider-nav-pagination__icon" width="34" height="34">
							<use xlink:href="#slider-arrow"></use>
						</svg>
					</button>
					<div class="slider-nav-pagination__fractions">
						<span class="slider-nav-pagination__fraction-active" id="active-slide">1</span>/<span class="slider-nav-pagination__fraction-count" id="count-slides">2</span>
					</div>
					<button class="slider-nav-pagination__button slider-nav-pagination__button--next blaze-next" id="next">
						<svg class="slider-nav-pagination__icon" width="34" height="34">
							<use xlink:href="#slider-arrow"></use>
						</svg>
					</button>
				</div>
			</div>
		</div>
	</div>
</section>