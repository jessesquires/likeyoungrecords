<!DOCTYPE html>
<?php $thisPage="releases"; ?>
<html lang="en">
	<head>
		<title>LYR | Digital Series</title>
		<?php include('../includes/head.php'); ?>
	</head>
	<body onload="renderDigitalSeries()">
		<?php include('../includes/banner.php'); ?>
		<?php include('../includes/menu.php'); ?>
		
		<div class="row">
			<div id="digitalseries">
				<h3>Digital Series</h3><br />
				<ul id="digitalseries-list">
				</ul> <!-- digitalseries list -->
			</div> <!-- digitalseries -->
		</div> <!-- row -->

		<?php include('../includes/footer.php'); ?>
		<script src="./digitalseries.js" type="text/javascript"></script>
	</body>
</html>