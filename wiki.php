<?php
if (file_exists('wiki.txt')){
	$contnet  file_get_contents('wiki.txt');
} else {
	$content = '(no content)';
}
safe_content = htmlentities($content);
echo $safe_content;
?>
