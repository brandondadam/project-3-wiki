<?php
if (file_exists('wiki.txt')){
	$contnet  file_get_contents('wiki.txt');
} else {
	$content = '(no content)';
}

if (isset($_Get['content'])) {
	$content = $_Get['content'];
	file_put_contents('wiki.txt', $content)
}
safe_content = htmlentities($content);
echo $safe_content;
?>
