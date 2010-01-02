<?php
	include "./functions.php";
	$rss = new lastRSS;
	$rss->cache_dir = './temp';
	$rss->cache_time = 1200; 
	global $rss;

function ShowOneRSS($url) {
	global $rss;
	if (($rs = $rss->get($url)) && ($url != '')) {
?>
<div id="content">
	<div id="contentTitle" class="fixed clear">
	<span class="subscribe-title">
<?php
	echo "<a target='_blank' href='".$rs[link]."' id='titleSourceLink'>".$rs[title]."</a></span>";
	echo "<span class='foolinkR'>".$rs[description]."</span>";
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
</div>

<script type="text/javascript">
	$(function() {
		$("#list_rss").accordion();
	});
</script>

<ul style="height: 580px;" id="contentView" class="scrolled source-hided">
<!-- xxxxxxxxxxxxxxxxx -->
<div id="list_rss">
<?php
	foreach ($rs['items'] as $item) {
?>
<!-- xxxxxxxxxxxxxxxxx -->
<div class="cast-clip">
	<div class="cast-clip-icon">
		<span class="sprite fav-star" title="加入/取消收藏(s)"></span>
	</div>
	<div class="cast-clip-main">
	<div class="cast-clip-container">
<?php
	echo "<span class='cast-clip-date'>发表时间：Time</span>";
	echo "<span title='title' class='cast-clip-author'>".$item[title]."</span>";
	echo "<h2 title='".$item[title]."'>".$item[title]." </h2>";
	echo "<span class='cast-clip-content'>描述2</span>";
?>
	</div>
	</div>
</div>
<div id="current-read" class="cast readed expanded">
<div class="cast-wrapper">
<div class="cast-container">
	<div class="cast-title">
<?php
	echo "<h2><a target='_blank' title='到原网页查看全文' href='".$item[link]."'>".$item[title]."<img src='img/icon-go.gif'></a></h2>";
	echo "<div class='stat'>";
	echo "<span class='author'> 作者：helight</span>";
	echo "<span class='date'> 发表时间：Time</span>";
	echo "</div></div>";
	$out = strtr($item[description], array('<![CDATA['=>'', ']]>'=>''));
	echo "<div class='cast-content'>".$out."</div>";
?>
</div>
<div class="cast-function-bar">加入收藏其他</div>
</div>
</div>
<!-- xxxxxxxxxxxxxxxxx -->
<?php
		} 
	if ($rs['items_count'] <= 0) {
		echo "<li>Sorry, no items found in the RSS file :-(</li>"; 
	}
	}
	else {
?>
<div id="content">
	<div id="contentTitle" class="fixed clear">
	<span class="subscribe-title">
	<a target="_blank" href="#" id="titleSourceLink">没有博客</a></span>
	<span class="foolinkR">没有博客</span>
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
</div>
<script type="text/javascript">
	$(function() {
		$("#list_rss").accordion();
	});
</script>

<ul style="height: 666px;" id="contentView" class="scrolled source-hided">
<!-- xxxxxxxxxxxxxxxxx -->
<div id="list_rss">
<!-- xxxxxxxxxxxxxxxxx -->
<div class="menuheader expandable">
	<div class="cast-clip-icon">
		<span class="sprite fav-star" title="加入/取消收藏(s)"></span>
	</div>
	<div class="cast-clip-main">
		<div class="cast-clip-container">
			<span class="cast-clip-date">发表时间：Time</span>
			<span title="title" class="cast-clip-author">没有文章</span>
			<h2 title="没有文章">没有文章 </h2>
			<span class="cast-clip-content">描述2</span>
		</div>
	</div>
</div>
<ul class="categoryitems">
<div id="current-read" class="cast readed expanded">
<div class="cast-wrapper">
<div class="cast-container">
	<div class="cast-title">
		<h2><a target="_blank" title="到原网页查看全文" href="#">没有文章 <img src="img/icon-go.gif" alt=""></a></h2>
		<div class="stat">
		<span class="author"> 作者：helight</span>
		<span class="date"> 发表时间：Time</span>
		</div>
	</div>

	<div class="cast-content">没有文章内容</div>
</div>
<div class="cast-function-bar">加入收藏其他</div>
</div>
</div>
</ul>
<!-- xxxxxxxxxxxxxxxxx -->
<?php
	}
}
?>
<!-- end of function -->
<!-- begin -->
<?php
	show_top();
?>
<div id="main">
	<div class="fixed" id="goHome">
		<span class="sprite">-</span>
		<a class="" id="goToHomePage" href="#" title="首页">首页</a>
	</div>

<div id="navigation" style="height: 580px;" >
<?php
	show_list($rss);
?>
	<div class="fixed" id="navigationBottom">
	<div class="fr" id="channelActions">
		<a id="feedMgrLink" class="foolinkL" href="#"><span class="foolinkR">订阅管理</span></a><a id="toggleViewUnreadLink" class="foolinkL" href="#"><span class="foolinkR" id="toggleViewUnreadBtn">隐藏已读</span></a>
	</div>
	</div>
</div>

<div id="contentWrapper">
	<div class="half-toggle hover" style="height: 100%;" 
		id="toggleNavigation" title="打开导航栏">
	</div>
<?php
	$feed_url=$_GET['feed_url'];
	//$feed_url="http://www.kongove.cn/blog/?feed=rss2";

	ShowOneRSS($feed_url);

	show_bottom();
?>
