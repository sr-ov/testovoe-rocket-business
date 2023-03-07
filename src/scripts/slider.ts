import BlazeSlider from 'blaze-slider'
import 'blaze-slider/dist/blaze.css'

function setSlider() {
	const $countSlides = document.querySelector<HTMLSpanElement>('#count-slides')
	const $activeSlide = document.querySelector<HTMLSpanElement>('#active-slide')
	const $slider = document.querySelector<HTMLDivElement>('.blaze-slider')

	if (!($slider && $countSlides && $activeSlide)) {
		return
	}

	const slider = new BlazeSlider($slider, {
		all: {
			loop: false,
			slideGap: '0px',
		},
	})
	slider.onSlide((page: number) => {
		$activeSlide.innerText = String(page + 1)
	})
	$countSlides.innerText = String(slider.totalSlides)
}
setSlider()
