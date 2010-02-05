<?php
	include "./func.php";
	$feed_url=$_GET['feed_url'];
	//begining
	show_top();
?>
<div class="mainwindow">
<?php
	show_list();
	ShowOneRSS($feed_url);
?>
</div><!-- end of mainwindow -->
<?php
	show_bottom();
?>
