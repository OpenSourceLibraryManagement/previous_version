!function(){
	'use strict';
	var mainContent = document.querySelector('main');
	var openContent = document.querySelector('#Welcome');
	[].forEach.call(
		document.querySelectorAll('.mdl-navigation__link'), 
		function(navItem){
			navItem.addEventListener('click', function(){
				var curContent = mainContent.querySelector('#'+ this.innerText);
				if(curContent != openContent){
					if(openContent){
						openContent.style.display = "none";
					}
					curContent.style.display = "inherit";
					openContent = curContent;
				}
				document.querySelector('.mdl-layout').MaterialLayout.toggleDrawer();
			});
		}
	);
}();