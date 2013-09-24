$(document).ready(function() {
	$.ajax({
		type: "GET",
		url: "index.php",
		datatype: "jsonp",
		success: function(json) {
			var split = json.split("<br />");
	
		$.each(split, function(i, data) {
    
		$("#section_list").append('<li><a href="#" id="'+ i +'"><h2>' + data + ' </h2></a></li>');
		$("#section_list").listview('refresh');
			});
}
	});

});