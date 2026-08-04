(function() {
	let hasRun = false;
	let observer = null;
	function lockRankMathModifiedDateOnce() {
		if (hasRun) {
			return;
		}
		const label = Array.from(
			document.querySelectorAll('.components-toggle-control__label')
		).find(function(el) {
			return el.textContent.trim() === 'Lock Modified Date';
		});
		if (!label) {
			return;
		}
		const flex       = label.closest('.components-flex');
		const toggleSpan = flex ? flex.querySelector('.components-form-toggle') : null;
		const checkbox   = flex ? flex.querySelector('.components-form-toggle__input') : null;
		if (!toggleSpan || !checkbox) {
			return;
		}
		if (!toggleSpan.classList.contains('is-checked')) {
			checkbox.click();
		}
		hasRun = true;
		if (observer) {
			observer.disconnect();
		}
	}
	function startObserver() {
		if (!document.body) {
			return;
		}
		observer = new MutationObserver(lockRankMathModifiedDateOnce);
		observer.observe(document.body, {
			childList: true,
			subtree: true,
		});
		lockRankMathModifiedDateOnce();
		setTimeout(function() {
			if (observer) {
				observer.disconnect();
			}
		}, 10000);
	}
	if (document.body) {
		startObserver();
	} else {
		document.addEventListener('DOMContentLoaded', startObserver);
	}
})();
