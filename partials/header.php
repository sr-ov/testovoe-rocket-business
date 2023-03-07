<header class="header" data-target="nav-mobile-menu">
	<div class="header__top">
		<div class="container">
			<div class="header__content header__content--top">
				<button class="burger" aria-label="Открыть меню" aria-expanded="false" data-open="nav-mobile-menu" data-close="nav-mobile-menu">
					<svg class="burger__icon burger__icon--open" width="37" height="26">
						<use xlink:href="#burger"></use>
					</svg>
					<svg class="burger__icon burger__icon--close" width="30" height="30">
						<use xlink:href="#close"></use>
					</svg>
				</button>

				<a class="header__logo logo" href="/">
					<img src="/assets/images/logo-header.svg" alt="логотип сайта" width="91" height="26">
				</a>

				<div class="header__wrapper">
					<div class="header__address address">
						<svg class="address__icon" width="20" height="20">
							<use xlink:href="#pin"></use>
						</svg>
						<div class="address__top">Ростов-на-Дону</div>
						<div class="address__btm">ул. Ленина, 2Б</div>
					</div>
					<a class="header__phone phone" href="tel:+78630000000">
						<svg class="phone__icon" width="28" height="28">
							<use xlink:href="#whatsapp-sm"></use>
						</svg>
						+7(863) 000 00 00
					</a>
				</div>

				<?php
				template(
					'button',
					['cls' => 'header__btn header__btn--top', 'text' => 'Записаться на прием', 'attrs' => 'id="мake-an-appointment-btn" data-open="#мake-an-appointment"']
				);
				?>

			</div>
		</div>
	</div>

	<div class="header__btm">
		<div class="container">
			<div class="header__content header__content--btm">
				<?php
				template(
					'nav',
					['cls_list' => 'header__nav-list', 'nav' => $nav]
				);
				?>

				<?php
				template(
					'button',
					['cls' => 'header__btn header__btn--btm', 'text' => 'Записаться на прием']
				);
				?>
			</div>
		</div>
	</div>
</header>