function renderDigitalSeries() {
	console.log("Reading CSV data...");
	$.getJSON('./digitalseries-csv-data.php', function(csvData) {
		csvData.reverse();
		buildHTMLWithDigitalSeriesData(csvData);
	});
}

function buildHTMLWithDigitalSeriesData(csvRecords) {
	console.log("Building HTML...\n");
	var ul = $('#digitalseries-list');

	for(var i = 0; i < csvRecords.length; i++) {
		var rec = JSON.parse(JSON.stringify(csvRecords[i]));

		ul.append('<li>' + rec.release + ": " + rec.artist + " / " +
					'<a href="' + rec.url + '" target="_blank">' +
					rec.album + '</a></li>');
	}
}