!function(){
	'use strict';
	document.querySelector('.mdh-toggle-search').addEventListener('click', function(){
		if(this.querySelector('i').innerText == 'search'){
			this.querySelector('i').innerText = 'cancel';
			this.classList.remove('mdl-cell--hide-tablet', 'mdl-cell--hide-desktop');
			[].forEach.call(
				document.querySelectorAll('.mdl-layout__drawer-button, .mdl-layout-title, .mdl-badge, .nav-button, .mdl-layout-spacer'), 
			  	function(elem){
					elem.style.display = 'none';
			  	}
			);
			document.querySelector('.mdl-layout__header-row').style.paddingLeft = '16px';
			var expSearch = document.querySelector('.mdh-expandable-search');
			expSearch.classList.remove('mdl-cell--hide-phone');
			expSearch.style.margin = '0 16px 0 0';
		}
		else{
			this.querySelector('i').innerText = 'search';
			this.classList.add('mdl-cell--hide-tablet', 'mdl-cell--hide-desktop');
			[].forEach.call(
				document.querySelectorAll('.mdl-layout__drawer-button, .mdl-layout-title, .mdl-badge, .nav-button, .mdl-layout-spacer'), 
			  	function(elem){
					elem.style.display = 'block';
			  	}
			);
			document.querySelector('.mdl-layout__header-row').style.paddingLeft = '';
			var expSearch = document.querySelector('.mdh-expandable-search');
			expSearch.classList.add('mdl-cell--hide-phone');
			expSearch.style.margin = '0 50px';
		}
	});
}();
