﻿<?php
include "./includes/lastRSS.php"; 

function getFeed($feed_url) {
	
	$content = file_get_contents($feed_url);
	echo $content;
	$x = new SimpleXmlElement($content);
	
	echo "<ul id='test'>";
	
	foreach($x->channel->item as $entry) {
		echo "<li><h2>". $entry->title ."</h2>";
		echo "<div style='display:none'>".$entry->description."</div></li> ";
		}
	echo "</ul>";
}

function show_top()
{
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>西邮RSS阅读</title>
	<link rel="stylesheet" type="text/css" href="css/css.css">
	<link rel="stylesheet" type="text/css" href="css/reader.css">
	<script type="text/javascript" src="js/jquery-1.2.1.js"></script>
	<script type="text/javascript" src="js/ddaccordion.js"></script>
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

<body class="mozilla">
<div id="top">
  <div id="topBgLeft"></div><div id="topBgRight"></div>
  <ul id="topNav">
    <li class="tn-my-subscribes">
   	<a id="readTab" href="#" title="我的阅读" class="current">我的阅读</a>
    </li>
  </ul>

  <div id="topSubNav">
    <ul class="fl">
      <li><a href="http://www.xiyoulinux.cn/" target="_blank">小组首页</a></li>
      <li class="slice">|</li>
      <li><a href="#" target="_blank">小组博客</a></li>
      <li class="slice">|</li>
      <li><a id="showMoreItemsMenu" href="#" class="popmenu">更多</a></li>
    </ul>
    <ul class="fr">
	<li>Helight.Xu@Gmail.com</a></li>
    </ul>
  </div>
  <div id="topSearch">
 Logo 标志
  </div>
</div>
<?php
}

function show_list($rss)
{

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
?>	

</div>
<?php
}

function show_bottom()
{
?>

<div class="fixed" id="contentFunctionBar">

  <div class="fl">
    <div id="contentListType">
      <span class="label">显示：</span>
      <span class="selection current foolinkL" style="margin-right: 0pt;">
      <span class="foolinkR">显示全部</span>
      </span>
    </div>
    <span><a href="#">分享此订阅</a></span>
  </div>

  <div id="contetDisplayType" class="fr">
    <span class="selection foolinkL current" style="margin-right: 0pt;">
      <span class="foolinkR">标题模式</span>
    </span><span class="label">-</span>
  </div>
<!-- xxxxxxxxxxxxxxxxx -->
</div>
</ul>
	<div class="fixed" id="contentPageBar">notes</div>
</div>
</div>
</div>
    
    <div id="chcoll-main" class="_full_page_ hidden"></div>
    <div id="hotArticles" class="_full_page_ hidden"></div>
    <div id="welcomePage" class="_full_page_ hidden" style="margin-top: 65px;"></div>
   
</body></html>
<?php
}
?>