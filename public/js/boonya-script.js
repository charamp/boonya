
var AmuletList = (function () {
	'use strict';

	append: function (data) {
      var rowElement = createRowElement(data);
      $containerElement.append(rowElement);
      filter(rowElement);
    },
});

var AmuletManager = (function (AmuletList) {
	'use strict';
	var loading = false;

	function loadAmulet(category_id) {
		if(loading) return;
		loading = true;

	    $.get('/loadamuletcategory', { category_id : category_id }, function (data) {
	      var context = {};
	      runner(context, function () {
	        AmuletList.append(data.shift());
	        context.finished = !data.length;
	      });
	      loading = false;
	    });
	}
});


$(document).ready(function() {
	$('select').material_select();

	$('.collection-item').click(function() {
		$('.collection-item').removeClass('active');
		$(this).addClass('active');
		console.log($(this).attr('id'));
		loadAmulet($(this).attr('id'));
	});
});