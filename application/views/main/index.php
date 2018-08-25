<h1>Головна сторінка сайту</h1>
<?php

echo $title . '<hr>';?>




<?php foreach ($news as $val): ?>



	<p><?php echo $val['name']; ?></p>
	<p><?php echo $val['email']; ?></p>
	<p><?php echo $val['site']; ?></p>
	<p><?php echo $val['date']; ?></p>

	<hr>
<?php endforeach; ?>