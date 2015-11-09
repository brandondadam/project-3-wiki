<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>Wiki</title>
		<link rel="stylesheet" href="wiki.css">
	</head>
	<body>
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
			<div id="content">
				<?php echo $safe_content; ?>
			</div>
			<form action="wiki.php" method="post">
				<textarea name="content" rows="8" cols"80"></textarea>
				<input type="submit" name="go" value="Save">
			</form>
			<script
				$('#content').click(function() {
					$('form').removeClass('hidden');
					$('#content').addClass('hidden');
				});
			></script>
	</body>
</html>
