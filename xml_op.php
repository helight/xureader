<?php
//	include "./includes/lastRSS.php"; 
	$rss = new lastRSS;
	$rss->cache_dir = './temp';
	$rss->cache_time = 1200; 
?>

<!-- function show_list() -->
<?php
function show_list()
{
	global $rss;

	if ($rs = $rss->get("./xy_members.xml")) {

	$c4 = 0;
	$c5 = 0;
	$c6 = 0;
	$c7 = 0;
	
	foreach($rs['items'] as $item) {
		if($item[category] == 07) {
			$category7title[$c7] = $item[title];
			$category7link[$c7] = $item[link];
			$c7++; 
		}
		else if($item[category] == 06) {
			$category6title[$c6] = $item[title];
			$category6link[$c6] = $item[link];
			$c6++; 
		}
		else if($item[category] == 05) {
			$category5title[$c5] = $item[title];
			$category5link[$c5] = $item[link];
			$c5++;
		}
		else if($item[category] <= 04) {
			$category4title[$c4] = $item[title];
			$category4link[$c4] = $item[link];
			$c4++; 
		}		
	}

	if ($rs['items_count'] <= 0) {
		echo "<li>Sorry, no items found in the RSS file :-(</li>"; 
	}

	} else {
		echo "<li>Sorry: It's not possible to reach RSS file $url\n</li>";
	}

	echo "<h3 class=\"menuheader expandable\">07级成员</h3>";
	echo "<ul class=\"categoryitems\">";
	for($i = 0; $i < $c7; $i++) {
		echo "<li><a title='".$category7title[$i]."' href='?feed_url=".$category7link[$i]."'>";
		echo "<strong>".$category7title[$i]."</strong></a></li>";
	}
	echo "</ul>";
	
	echo "<h3 class=\"menuheader expandable\">06级成员</h3>";
	echo "<ul class=\"categoryitems\">";
	for($i = 0; $i < $c6; $i++) {
		echo "<li><a title='".$category6title[$i]."' href='?feed_url=".$category6link[$i]."'>";
		echo "<strong>".$category6title[$i]."</strong></a></li>";
	}
	echo "</ul>";

	echo "<h3 class=\"menuheader expandable\">05级成员</h3>";
	echo "<ul class=\"categoryitems\">";
	for($i = 0; $i < $c5; $i++) {
		echo "<li><a title='".$category5title[$i]."' href='?feed_url=".$category5link[$i]."'>";
		echo "<strong>".$category5title[$i]."</strong></a></li>";
	}
	echo "</ul>";

	echo "<h3 class=\"menuheader expandable\">04级成员及以往</h3>";
	echo "<ul class=\"categoryitems\">";
	for($i = 0; $i < $c4; $i++) {
		echo "<li><a title='".$category4title[$i]."' href='?feed_url=".$category4link[$i]."'>";
		echo "<strong>".$category4title[$i]."</strong></a></li>";
	}
	echo "</ul>";
}
?>

