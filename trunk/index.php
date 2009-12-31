<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
	<link rel="stylesheet" href="css/default.css" />
	<script src="js/jquery-1.3.2.js" type="text/javascript"></script>
	<script src="js/myScript.js" type="text/javascript"></script>
</head>
<body>
<div align="center">

<div align="left" style="width: 980px; height:120px; text-align: center; color: #000;">

</div>


<table width=980px; border=1px; align=left;>
<tr style="border: 1px; valign:top;">
	<td width=180px align=left valign="top" >
<?php
	include "./includes/lastRSS.php"; 

	$rss = new lastRSS;
	$rss->cache_dir = './temp';
	$rss->cache_time = 1200; 
	global $rss;
	
	if ($rs = $rss->get("./xy_members.xml")) {
		echo $rs[description]."<br><br>\n";
		
		foreach ($rs['items'] as $item) {
			echo "<a href=rssfeed.php?feed_url=".$item[link]." target='rssinfo'>".$item[title]."</a><br>";
		}
		if ($rs['items_count'] <= 0) {
			echo "<li>Sorry, no items found in the RSS file :-(</li>"; 
		}
		echo "</div>\n";
	}
	else {
		echo "Sorry: It's not possible to reach RSS file $url\n<br />";
		// you will probably hide this message in a live version
	}
?>
	</td>
	
	<td>
	<iframe name="rssinfo" src="main.htm" width="800" height="500"></iframe>
	</td>
</tr>
</table>


<div style="height: 20px;"></div>
<div style=foot>
<div>2008-~ Designed by <a href="http://zhwen.org">Helight</a></div>
<div ><em>Established 2000 Xi'an, China</em></div>

</div>


</div>
</body>
</html>
