<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body><div style="margin-left: 5%; margin-right: 5%;">
	<?php foreach ($data as $value): ?>
		<?php echo $value['article_content']; ?>
	<?php endforeach ?>
	</div>
</body>
</html>