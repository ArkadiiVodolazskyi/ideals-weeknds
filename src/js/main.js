document.addEventListener('DOMContentLoaded', () => {

	(() => {
		const merchSlider = tns({
			container: '[data-slider=merch]',
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