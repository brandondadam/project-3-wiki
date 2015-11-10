<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Wiki</title>
		<link rel="stylesheet" href="wiki.css">
	</head>
	<body>
		<h1>
			The coolest wiki ever!
		</h1>
		<?php
			if (file_exists('wiki.txt')) {
				$content = file_get_contents('wiki.txt');
			} else {
				$content = '(no content)';
			}
			if (isset($_GET['content'])) {
				$content = $_GET['content'];
				file_put_contents('wiki.txt', $content);
			}
			$safe_content = htmlentities($content);
			?>
			<form method="post" action="wiki.php" id="wikiForm" onKeydown="return addText(event);">
				<textarea name="content" id="type" placeholder="type a message here." rows="8" cols"80"></textarea>
			</form>
			<div id="content">
				<?php echo $safe_content; ?>
			</div>
			<script src="jquery-1.11.3.min.js"></script>
			<script>

				function addText(e){
					console.log("hello");
					var charCode = e ? (e.which ? e.which: e.keycode): window.event.keycode;
					console.log(charCode);
					if (charCode == 13){
						document.getElementById('wikiForm').submit();
						console.log("submitted");
					}
				}

				$('#content').click(function() {
					$('form').removeClass('hidden');
					$('#content').addClass('hidden');
				});
			</script>
	</body>
</html>
