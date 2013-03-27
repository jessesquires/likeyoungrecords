var PATH = "img/releases/";
var EXT = ".png";
var SEP = "-";
var BASE = "lyr";
var FULL = "full";
var THUMB = "thumb";

function foo() {
	console.log("foo");
	$.getJSON('/bootstrap-photo-grid/imageList.php', function(data) {
		console.log("Get json");
		console.log(data);
	});
}