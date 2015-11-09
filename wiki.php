<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Wiki</title>
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
			echo $safe_content;
			?>
			<form action="wiki.php">
				<textarea name="content" rows="8" cols"80"></textarea>
				<input type="submit" value="Save">
			</form>
			<?php
			$safe_content = htmlentities($content);
			?>
			<div id="content">
				<?php echo $safe_content; ?>
			</div>
	</body>
</html>
