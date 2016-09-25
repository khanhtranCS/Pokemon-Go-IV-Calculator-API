console.log(properties);
window.onload = function() {
	processData();
}

function processData() {
	$.ajax({
		type: "GET",
		url: 'ivcal.php',
		data: {data1: 'something'},
		success: function(data) {
			console.log("fetch succ");
			console.log(data);
		}
	});
}