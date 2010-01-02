<?php
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
	<link rel="stylesheet" type="text/css" href="css/reader.css">
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.accordion.js"></script>
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
<style type="text/css">
.arrowlistmenu{
width: 240px; /*width of accordion menu*/
}

.arrowlistmenu .menuheader{ /*CSS class for menu headers in general (expanding or not!)*/
font: bold 14px Arial;
color: black;
background: #aaa url(titlebar.png) repeat-x center left;
margin-bottom: 10px; /*bottom spacing between header and rest of content*/
text-transform: uppercase;
padding: 4px 0 4px 10px; /*header text is indented 10px*/
cursor: hand;
cursor: pointer;
}

.arrowlistmenu .openheader{ /*CSS class to apply to expandable header when it's expanded*/
background-image: url(titlebar-active.png);
}

.arrowlistmenu ul{ /*CSS for UL of each sub menu*/
list-style-type: none;
margin: 0;
padding: 0;
margin-bottom: 8px; /*bottom spacing between each UL and rest of content*/
}

.arrowlistmenu ul li{
padding-bottom: 2px; /*bottom spacing between menu items*/
}

.arrowlistmenu ul li a{
color: #A70303;
background: url(arrowbullet.png) no-repeat center left; /*custom bullet list image*/
display: block;
padding: 2px 0;
padding-left: 19px; /*link text is indented 19px*/
text-decoration: none;
font-weight: bold;
border-bottom: 1px solid #dadada;
font-size: 90%;
}

.arrowlistmenu ul li a:visited{
color: #A70303;
}

.arrowlistmenu ul li a:hover{ /*hover state CSS*/
color: #A70303;
background-color: #F3F3F3;
}
</style>

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
?>
<div class="arrowlistmenu">

<h3 class="menuheader expandable">06级成员</h3>
<ul class="categoryitems">
<?php
	if ($rs = $rss->get("./xy_members.xml")) {

	foreach ($rs['items'] as $item) {
		echo "<li><a title='".$item[title]."' href='?feed_url=".$item[link]."'>";
		echo "<strong>".$item[title]."</strong></a></li>";
	}
	if ($rs['items_count'] <= 0) {
		echo "<li>Sorry, no items found in the RSS file :-(</li>"; 
	}

	} else {
		echo "<li>Sorry: It's not possible to reach RSS file $url\n</li>";
	}
?>
</ul>
<h3 class="menuheader expandable">05级成员</h3>
<ul class="categoryitems">
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
</ul>

<h3 class="menuheader expandable">04级及以往</h3>
<ul class="categoryitems">
<li><a href="#" >测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
</ul>

<h3 class="menuheader expandable">04级及以往</h3>
<ul class="categoryitems">
<li><a href="#" >测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
<li><a href="#">测试标签</a></li>
</ul>
</div>
<?php
}

function show_bottom()
{
?>
</div>
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
