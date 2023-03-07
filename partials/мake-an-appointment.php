<section class="мake-an-appointment" data-close="#мake-an-appointment" data-target="#мake-an-appointment">
	<div class="мake-an-appointment__content">
		<button class="мake-an-appointment__close" data-close="#мake-an-appointment">&times;</button>
		<form class="мake-an-appointment__form form" action="/" id="form">
			<label class="form__item">
				<input class="form__input" id="user-name" type="text" placeholder="Введите имя">
			</label>
			<label class="form__item">
				<input class="form__input" id="user-phone" type="text" placeholder="Введите телефон" data-maska="+7 (###) ###-##-##">
			</label>

			<?php template(
				'button',
				['cls' => 'form__submit', 'text' => 'Записаться на прием', 'type' => 'submit']
			); ?>
		</form>
	</div>
</section>