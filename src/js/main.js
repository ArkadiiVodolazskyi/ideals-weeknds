document.addEventListener('DOMContentLoaded', () => {

	(() => {
		const merchSliderNode = document.querySelector('[data-slider=merch]');
		if (!merchSliderNode) { return; }
		const merchSlider = tns({
			container: merchSliderNode,
			controlsPosition: 'bottom',
			controlsText: ['', ''],
			controlsContainer: '.slider-buttons',
			navContainer: '.slider-dots',
			mouseDrag: true,
			swipeAngle: 30,
			loop: false
		});
	})();

	(() => {
		const searchBox = document.querySelector('.search');
		searchBox?.addEventListener('click', e => {
			const searchBtn = e.target.closest('.search-button');
			if (!searchBtn) { return; }
			searchBox.toggleAttribute('data-active');
		});
	})();

}, true);

window.addEventListener('load', () => {

	const headerMain = document.querySelector('[data-watch=scroll]');

	(() => {
		window.addEventListener('scroll', () => {
			const scroll = window.scrollY;
			if (scroll > 0) {
				headerMain.toggleAttribute('data-scroll', true);
			} else {
				headerMain.toggleAttribute('data-scroll', false);
			}
		});
	})();

}, true);