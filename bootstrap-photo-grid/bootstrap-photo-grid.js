var PATH = "../img/releases/";
var MAX_COLS = 4;

function render() {
	console.log("Getting image list...");
	$.getJSON('/bootstrap-photo-grid/imageList.php', function(imageData) {
		
		console.log("Getting CSV data...");
		$.getJSON('/bootstrap-photo-grid/csvData.php', function(csvData) {
			buildHTML(imageData, csvData);
		});
	});
}

function buildHTML(imageList, csvRecords) {
	console.log("Building html...\n");
	console.log("Image List = " + JSON.stringify(imageList) + "\n");
	console.log("CSV Records = " + JSON.stringify(csvRecords) + "\n");
	var div = $('#releases');

	var rows = imageList.length / MAX_COLS;
	for(var i = 0; i < rows; i++) {
		div.append('<div class="row image-row">' +
				   		'<div id="row-' + i + '" class="span9">' +
				   		'</div> <!-- span -->' +
				   '</div> <!-- row -->');

		for(var j = 0; j < MAX_COLS; j++) {
			var index = j + (i * MAX_COLS);

			if(index < imageList.length) {
				var img = JSON.parse(JSON.stringify(imageList[index]));
				var rec = JSON.parse(JSON.stringify(csvRecords[index]));
				appendImageWithInfoToDiv(img, rec, '#row-' + i);
				appendModalDivWithImageAndInfoToDiv(img, rec, '#row-' + i);
			}
		}
	}
}

function appendImageWithInfoToDiv(image, info, div) {
	console.log("Adding " + info.release + "\n" + info.artist + ", " + info.album + "(" + image.thumb + ")...");
	var title = info.release + ": " + info.album;

	$(div).append('<div class="span2">' + 
				  	'<a data-toggle="modal" href="#' + info.release + '">' +
				  		'<img src="' + PATH + image.thumb + '" class="img-polaroid thumb" alt="' + title + '" title="' + title + '"/>' + 
				  	'</a>' +
				  '</div>');
}

function appendModalDivWithImageAndInfoToDiv(image, info, div) {
	console.log("Adding modal " + info.release + "\n" + info.artist + ", " + info.album + "(" + image.full + ")...");
	var label = info.release + "-modal";
	var storeLink = "http://store.likeyoungrecords.com";
	var title = info.release + ": " + info.album;

	$(div).append('<div id="' + info.release + '" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="' + label + '" aria-hidden="true">' +
				  	'<div class="modal-header">' +
				  		'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>' +
				  		'<h3 id="' + label + '" class="text-left">' + 
				  			'<a href="' + info.url + '" target="_blank">' + info.artist + '</a> <small>' + info.album + '</small>' + 
				  		'</h3>' +
				  	'</div> <!-- header -->' +
				  	'<div class="modal-body">' +
				  		'<img src="' + PATH + image.full + '" class="img-polaroid full" alt="' + title + '" title="' + title + '"/>' +
				  	'</div> <!-- body -->' +
				  	'<div class="modal-footer">' +
				  		'<h3 class="text-center">' + 
				  			'<a href="' + storeLink + '" target="_blank">' + info.release + '</a> <small>' + info.details + '</small>' + 
				  		'</h3>' +
				  	'</div> <!-- footer -->' +
				  '</div> <!-- modal -->');
}