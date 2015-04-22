<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Itunes Video Search</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>
		$(document).ready(function() {
			$('form').submit(function() {
				$('#video').html('<img src="/assets/images/loading.gif">');
				$.get('/tunes/index_html', function(res) {
					$('#video').html(res);
				});
				// return false;
			});
		});
	</script>
</head>
<body>
	<h1>Enter Artist's Name:</h1>
	<form action="/tunes/index_html" method="post">
		<input type="search" id="user_input" name="user_input">
		<input type="submit" value="search">
	</form>
	<div id="video"></div>
</body>
</html>