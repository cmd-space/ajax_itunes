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
				$.post($(this).attr('action'), $(this).serialize(), function(res) {
					var html_string = '';
					if(res.results.length !== 0) {
						html_string = "<video controls src='"+res.results[0].previewUrl+"'><\/video>";
					}
					else {
						html_string = 'Not Found';
					}
					$('#video').html(html_string);
				}, 'json');
				return false;
			});
		});
	</script>
	<style>
		form {
			margin-bottom: 1em;
		}
	</style>
</head>
<body>
	<h1>Enter Artist's Name:</h1>
	<form action="/tunes/get_movie" method="post">
		<input type="search" id="user_input" name="user_input">
		<input type="submit" value="search">
	</form>
	<div id="video"></div>
</body>
</html>