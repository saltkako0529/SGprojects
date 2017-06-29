$(function() {
	"use strict";
	$(':checkbox').radiocheck('check');
	
	//　カレンダーの年月を取得
	$('#chang_calender').click( function(){
		var year = $('#c_year').val();
		var month = $('#c_month').val();
		$('#chang_calender').attr('href', '/hours/calender/' + year + '/' + month );
	});
	
});
