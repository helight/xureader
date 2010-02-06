<?php
	include "./func.php";
	$feed_url=$_GET['feed_url'];
?>
<!-- begin of RSS show -->
<?php
	show_top();
?>
<div class="mainwindow">
	<div class="arrowlistmenu">	<!-- begin of list show -->
<?php
	show_list();
?>
	</div>				<!-- end of list show -->
	<div class="contentWrapper">	<!-- begin of contentWrapper -->
<?php
	ShowOneRSS($feed_url);
?>
	</div>				<!-- end of contentWrapper -->
</div>					<!-- end of mainwindow -->

<!-- begin of bottom show -->
<?php
	show_bottom();
?>
