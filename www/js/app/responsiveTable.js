!function(){
	[].forEach.call(
		document.querySelectorAll('.mdl-tabs__panel > table'),
		function(table){
			var parentNode = table.parentNode;
			var childNode = document.createElement('div');
			[].forEach.call(
				table.querySelectorAll('tr'),
				function(row){
					var node = document.createElement('div');
					node.classList.add('mdl-card', 'text-box');
					var data = document.createElement('div');
					data.classList.add('mdl-card__supporting-text');
					[].forEach.call(
						row.querySelectorAll('td'),
						function(col){
							data.innerHTML += '<div class="nowrap"><strong>' + col.getAttribute('data-label') + ':</strong> ' + col.innerHTML + '</div>';
						}
					);
					if(data.hasChildNodes()){
						node.appendChild(data);
						childNode.appendChild(node);
					}
				}
			);
			table.classList.add('mdl-cell--hide-phone');
			childNode.classList.add('mdl-shadow--2dp', 'mdl-cell--hide-tablet', 'mdl-cell--hide-desktop');
			parentNode.appendChild(childNode);
		}
	)
}();