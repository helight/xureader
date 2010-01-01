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

function show_list($rss)
{
?>
	<div id="feedFolderHeader" class="fixed accordion-header expanded">
		<span style="cursor: default;" class="sprite">-</span>
		<a style="cursor: default;" href="#" title="04级及以往">
		<strong style="cursor: default;">
		<span style="cursor: default;" id="subSpan">06级及以往</span></strong></a>
	</div>
<?php
	if ($rs = $rss->get("./xy_members.xml")) {
	echo "<div style='height: 560px;' id='subTree' class='scrolled accordion-body'>";
	foreach ($rs['items'] as $item) {
		echo "<ul class='subscribes'><li><a class='all-readed' title='".$item[title]."' href='?feed_url=".$item[link]."' >";
		echo "<strong><span class='title'>".$item[title]."</span></strong></a>";
		echo "</li></ul>";
	}
	if ($rs['items_count'] <= 0) {
		echo "<li>Sorry, no items found in the RSS file :-(</li>"; 
	}
	echo "</div>\n";
	} else {
		echo "Sorry: It's not possible to reach RSS file $url\n<br />";
	}
?>
	<div id="feedFolderHeader" class="fixed accordion-header expanded">
		<span style="cursor: default;" class="sprite">-</span>
		<a style="cursor: default;" href="#" title="05级成员">
		<strong style="cursor: default;">
		<span style="cursor: default;" id="subSpan">05级成员</span></strong></a>
	</div>
	<div style="height: 560px;" id="subTree" class="scrolled accordion-body">
	  <ul class="subscribes">
		<li>
		<a class="all-readed" title="A Geek's Page" href="#" >
		<strong><span class="title">dddddd</span></strong></a>
		</li>
	  </ul>
	</div>
	<div id="feedFolderHeader" class="fixed accordion-header expanded">
		<span style="cursor: default;" class="sprite">-</span>
		<a style="cursor: default;" href="#" title="05级成员">
		<strong style="cursor: default;">
		<span style="cursor: default;" id="subSpan">04级成员</span></strong></a>
	</div>
	<div style="height: 560px;" id="subTree" class="scrolled accordion-body">
	  <ul class="subscribes">
		<li>
		<a class="all-readed" title="A Geek's Page" href="#" >
		<strong><span class="title">A Geek's Page</span></strong></a>
		</li>
	  </ul>
	</div>
<?php
}

function show_top()
{
?>
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
