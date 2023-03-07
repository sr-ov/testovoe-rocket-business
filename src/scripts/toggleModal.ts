export const toggleModal = (targetSelector: string) => {
	const open = [...document.querySelectorAll(`[data-open="${targetSelector}"]`)]
	const target = document.querySelector(`[data-target="${targetSelector}"]`)
	const close = [
		...document.querySelectorAll(`[data-close="${targetSelector}"]`),
	].filter((el) => !open.includes(el))

	for (const elOpen of open) {
		elOpen?.addEventListener('click', () => {
			target?.classList.toggle('active')
		})
	}

	for (const elClose of close) {
		elClose?.addEventListener('click', (e) => {
			if (e.currentTarget === e.target) {
				target?.classList.remove('active')
			}
		})
	}
}
