<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
	<link rel="stylesheet" href="css/default.css" />
	<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
	<script src="js/myScript.js" type="text/javascript"></script>
</head>
<body>
<?php
include "./includes/lastRSS.php"; 

$rss = new lastRSS;
$rss->cache_dir = './temp';
$rss->cache_time = 1200; 

function ShowOneRSS($url) {
	global $rss;
	if ($rs = $rss->get($url)) {
		echo "<h1><b><a href=".$rs[link].">".$rs[title]."</a></b></h1>";
		echo $rs[description]."\n";

		echo "<div id='main_list'>\n";
		foreach ($rs['items'] as $item) {
			echo "\t<div id='tt'><h3>".$item[title]."</h3>";
			$out = strtr($item[description], array('<![CDATA['=>'', ']]>'=>''));
			echo "<span style='display: none; width:600px;'><h3>".$out."<h3><br><br>";
			echo "<a href=".$item[link].">阅读更多...</a></span></div>\n";
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
} 

	$feed_url=$_GET['feed_url']; 
	if ($feed_url != '') {
		ShowOneRSS($feed_url);
	} else {
	}
?>
</body>
</html>
<script type="text/javascript">
	var myList=document.getElementById("main_list");
	var tit=myList.getElementsByTagName("div");
	
	for(var i=0;i<tit.length;i++){
		var _h=tit[i].getElementsByTagName("h3")[0];
		
		_h.onclick=function(){
			var sspan = this.nextSibling;
			sspan.style.display = sspan.style.display == "none"?"block":"none";

		}
	}
</script>

