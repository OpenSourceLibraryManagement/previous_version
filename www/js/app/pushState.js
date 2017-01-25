//import {ajaxCall} from "ajaxCall";
require('./ajaxCall.js')

!function(){
	[].forEach.call(
		document.querySelectorAll('mdl-navigation > mdl-navigation__link'),
		function(a){
			a.addEventListener('click', function(evt){
				document.querySelector('#loading').classList.add('is-active')
				href = this.getAttribute("href")
				loadContent(href)
				history.pushstate('', title(href), href)
				evt.preventDefault()
			})
		}
	)
	window.onpopstate = function(evt){
		document.querySelector('#loading').classList.add('is-active')
		loadContent(location.pathname)
	}
}();

function title(href){
	
}

function callback(data){

}

function loadContent(url){
	ajaxCall('', url, 'POST', callback)
}