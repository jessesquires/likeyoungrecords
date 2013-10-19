var IMG_PATH = "../img/releases/";
var IMG_BASE = "lyr";
var IMG_SEP = "-";
var IMG_EXT = ".jpg";
var IMG_THUMB = "thumb";

var MAX_COLS = ($(window).width() < 768) ? 3 : 4;

function renderReleases() {
	console.log("Reading CSV data...");
	$.getJSON('/bootstrap-photo-grid/releases-csv-data.php', function(csvData) {
		csvData.reverse();
		buildHTML(csvData);

		console.log("Begin fade in...");
		fadeInGrid(0, csvData);
	});
}

function fadeInGrid(n, csvRecords) {
	if(n >= csvRecords.length / MAX_COLS) {
		console.log("Fade Done! Yay for recursion!");
		return;
	}
	else {
		console.log("Fading row : " + n);
		var imgRowDiv = $('#row-' + n);
		
		setTimeout(function() {	
			imgRowDiv.fadeIn(500, function() {
				fadeInGrid(n + 1, csvRecords);
			});	
		}, 0);
	}
}

function buildHTML(csvRecords) {
	console.log("Building html...\n");
	var div = $('#releases');

	var rows = csvRecords.length / MAX_COLS;
	for(var i = 0; i < rows; i++) {
		div.append('<div id="row-' + i + '" class="row image-row" style="display: none;">' +
					'</div> <!-- image row' + i + ' -->');

		for(var j = 0; j < MAX_COLS; j++) {
			var index = j + (i * MAX_COLS);

			if(index < csvRecords.length) {
				var rec = JSON.parse(JSON.stringify(csvRecords[index]));
				appendThumbnailHTMLForRecordToDiv(rec, '#row-' + i, i);
				appendModalHTMLForRecordToDiv(rec, '#row-' + i);
			}
		}
	}
}

function imageForRecord(rec, isThumbnail) {
	var releaseNumber = parseInt(rec.release.substring(2));
	var thumb = isThumbnail ? (IMG_SEP + IMG_THUMB) : "";
	return IMG_PATH + IMG_BASE + IMG_SEP + releaseNumber + thumb + IMG_EXT;
}

function appendThumbnailHTMLForRecordToDiv(rec, div, i) {
	console.log("Adding thumbnail : " + rec.release);

	var title = rec.release + ": " + rec.album;

	$(div).append('<div id="' + rec.release + '-span" class="col-md-3 col-sm-3 col-xs-4">' + 
						'<a data-toggle="modal" href="#' + rec.release + '">' +
							'<img src="' + imageForRecord(rec, true) + '" class="img-thumbnail img-responsive" alt="' + title + '" title="' + title + '"/>' + 
						'</a>' +
					'</div>');
}

function appendModalHTMLForRecordToDiv(rec, div) {
	console.log("Adding modal : " + rec.release);

	var label = rec.release + "-modal";
	var storeLink = "http://store.likeyoungrecords.com";
	var title = rec.release + ": " + rec.album;

	$(div).append('<div id="' + rec.release + '" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="' + label + '" aria-hidden="true">' +
					'<div class="modal-dialog">' + 
						'<div class="modal-content">' +
							'<div class="modal-header">' +
								'<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>' +
								'<h3 class="modal-title" id="' + label + '" class="text-left">' + 
									'<a href="' + rec.url + '" target="_blank">' + rec.artist + '</a> <small>' + rec.album + '</small>' + 
								'</h3>' +
							'</div> <!-- header -->' +
							'<div class="modal-body">' +
								'<img src="' + imageForRecord(rec, false)  + '" class="img-thumbnail img-responsive" alt="' + title + '" title="' + title + '"/>' +
							'</div> <!-- body -->' +
							'<div class="modal-footer">' +
								'<h3 class="text-left">' + 
									'<a href="' + storeLink + '" target="_blank">' + rec.release + '</a> <small>' + rec.details + '</small>' + 
								'</h3>' +
							'</div> <!-- footer -->' +
						'</div> <!-- modal content -->' +
					'</div> <!-- modal-dialog -->' +
				'</div> <!-- modal -->');
}