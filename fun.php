<?php
	include "./includes/lastRSS.php"; 
	$rss = new lastRSS;
	$rss->cache_dir = './temp';
	$rss->cache_time = 1200; 
	$rss2 = new lastRSS;
	$rss2->cache_dir = './temp';
	$rss2->cache_time = 1200; 

function show_top()
{
?>
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>西邮RSS阅读</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<script type="text/javascript" src="js/jquery-1.2.1.js"></script>
	<script type="text/javascript" src="js/ddaccordion.js"></script>
	<link rel="stylesheet" type="text/css" href="css/toggleElements.css" />
	<script type="text/javascript" src="js/jquery.toggleElements.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('div.toggler1').toggleElements( );
	});
	
function doOnClick() {
	alert('callback: onClick');
}
function doOnHide() {
	alert('callback: onHide');
}
function doOnShow() {
	alert('callback: onShow');
}
</script>
</head>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "expandable", 
	contentclass: "categoryitems", 
	revealtype: "click", 
	mouseoverdelay: 100, 
	collapseprev: true, 
	defaultexpanded: [0],
	onemustopen: false, 
	animatedefault: false, 
	persiststate: true, 
	toggleclass: ["", "openheader"], 
	togglehtml: ["prefix", "", ""], 
	animatespeed: "fast",
	oninit:function(headers, expandedindices){ 
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ 
		//do nothing
	}
})
</script>
<body >
<div id="top">
   	<a id="readTab" href="#" title="我的阅读" class="current">我的阅读</a>
</div>
<?php
}
?>

<?php
function show_bottom()
{
?>
<div>
note!!!
</div>   
</body></html>
<?php
}
?>
<!-- function show_list() -->
<?php
function show_list()
{
	global $rss;
	echo "<div class=\"arrowlistmenu\">";
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
	echo "</div>";//<!-- end of list show -->
}
?>
<!-- function ShowOneRSS($url) -->
<?php
function ShowOneRSS($url) {
	global $rss2;

	echo "<div class=\"contentWrapper\">";

	if (($rs = $rss2->get($url)) && ($url != '')) {
	echo "<div class=\"bloginfo\">";
	echo "<span class=\"blogtitle\"><a target='_blank' ";
	echo "href='".$rs[link]."' id='titleSourceLink'>".$rs[title]."</a></span>";
	echo "<span class=\"blogdesc\">".$rs[description]."</span>";
	echo "</div>";

	echo "<div>";	//<!-- begin show rss-->
	foreach ($rs['items'] as $item) {
	//<!-- one item -->	
	echo "<div class=\"toggler1\" title=".$item[title].">";
	echo "<div class=\"rsscontent\">";
	echo "<div class='rtitle'><a target='_blank' title='到原网页查看全文' ";
	echo "href='".$item[link]."'>".$item[title]."<img src='img/icon_go.gif' border=0></a>";
	echo "<span class='stat'> 作者：helight 发表时间：Time</span></div>";
	echo "<div><br>";		
		$out = strtr($item[description], array('<![CDATA['=>'', ']]>'=>''));
		echo "<div>".$out."</div>";
	echo "</div><br>";
	echo "<div class=\"addrssto\">加入收藏其他</div>";
	echo "</div>";
	echo "</div>";		//<!-- end one item -->
	}
	echo "</div>";		//<!-- end show rss-->
	}
	echo "</div>";		//<!-- end of contentWrapper -->
}
?>
<!-- end of function -->
