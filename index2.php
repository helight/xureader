<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>西邮RSS阅读</title>

	<link rel="stylesheet" type="text/css" href="css/reader.css">
	<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="js/ui.core.js"></script>
	<script type="text/javascript" src="js/ui.accordion.js"></script>
</head>
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
<script type="text/javascript">
	$(function() {
		$("#navigation").accordion();
	});
</script>

</div>   
 <div id="main" class="_full_page_">
        <div>
   	  <a href="#"><h1>+添加订阅</h1></a>
	</div>
        <div id="navigation">
          <div id="shareFolderHeader" class="fixed accordion-header collapsed">
            <a style="cursor: pointer;" href="#" title="我的分享">
	    <strong style="cursor: pointer;">
	    <span >04级及以往</span>
	    </strong></a>
          </div>
	<div style="height: 560px;" id="subTree" class="scrolled accordion-body">
	  <ul class="subscribes">
		<li>
		<a class="all-readed" title="A Geek's Page" href="#" >
		<strong><span class="title">helight.xu</span></strong></a>
		</li>
	  </ul>
	</div>
          <div id="favoriteFolderHeader" class="fixed accordion-header collapsed">
	    <a style="cursor: pointer;" href="#" title="我的收藏">
	    <strong style="cursor: pointer;">
	    <span style="cursor: pointer;" id="favorSpan">05级成员</span>
	    </strong></a>
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
	    <a style="cursor: default;" href="#" title="我的订阅">
	    <strong style="cursor: default;">
	    <span style="cursor: default;" id="subSpan">06级成员</span>
	    </strong></a>
	  </div>
	<div style="height: 560px;" id="subTree" class="scrolled accordion-body">
	  <ul class="subscribes">
		<li>
		<a class="all-readed" title="A Geek's Page" href="#" >
		<strong><span class="title">A Geek's Page</span></strong></a>
		</li>
	  </ul>
	</div>

<div id="filter" class="scrolled" style="display: none; height: 560px;">
                
</div>
            <div class="fixed" id="navigationBottom">

              <div class="fr" id="channelActions">
                  <a id="feedMgrLink" class="foolinkL" href="#"><span class="foolinkR">订阅管理</span></a><a id="toggleViewUnreadLink" class="foolinkL" href="#"><span class="foolinkR" id="toggleViewUnreadBtn">隐藏已读</span></a>
              </div>
            </div>
        </div>
        <div id="contentWrapper">
            <div class="half-toggle hover" style="height: 756px;" id="toggleNavigation" title="打开导航栏"><span class="sprite">关闭导航栏</span></div>
	    <div id="content">
<div id="contentTitle" class="fixed clear">
<span class="subscribe-title"><a target="_blank" href="#" id="titleSourceLink">博客标题</a></span>
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

<div id="contentSourseReview" class="fixed clear hidden">
  <a style="z-index: 10;" href="#" class="sprite close-review">x</a>

	<div class="review-container" id="reviewContainer">
	<span class="review-feedicon"><a target="_blank" href="http://abitno.linpie.com/"><img src="img/feedicon.gif"></a></span>
	<p class="review-description">什么都略懂一点，生活就多彩一些</p>
	<p class="review-stat">作者：helight&nbsp;&nbsp;订阅人数：少于5</p>
	<p class="review-link"><a style="float: left; margin-right: 3px;" target="_blank" href="http://zhwen.org/">http://zhwen.org</a><a style="margin-left: 5px;" target="_blank" href="http://http://zhwen.org/?feed=rss2"><img title="查看RSS源" src="img/rssimage.gif"></a></p>
	</div>
</div>
<ul style="height: 666px;" id="contentView" class="scrolled source-hided">
<!-- xxxxxxxxxxxxxxxxx -->
<div id="list_rss">
<div class="cast-clip">
	<div class="cast-clip-icon">
		<span class="sprite fav-star" title="加入/取消收藏(s)"></span>
	</div>
	<div class="cast-clip-main">
		<div class="cast-clip-container">
			<span class="cast-clip-date">2009年12月12日 (2周前)</span>
			<span title="title" class="cast-clip-author">title</span>
			<h2 title="我要的幸福生活">幸福生活</h2>
			<span class="cast-clip-content">描述</span>
		</div>
	</div>
</div>
<div id="current-read" class="cast readed expanded">
<div class="cast-wrapper">
<div class="cast-container">
	<div class="cast-title">
		<h2><a target="_blank" title="到原网页查看全文" href="#">幸福生活 <img src="img/icon-go.gif" alt=""></a></h2>
		<div class="stat">
		<span class="author"> 作者：helight</span>
		<span class="date"> 发表时间：2009年12月12日 (2周前)</span>
		</div>
	</div>

	<div class="cast-content">文章内容</div>
</div>
<div class="cast-function-bar">加入收藏其他</div>
</div>
</div>
<!-- xxxxxxxxxxxxxxxxx -->
<div class="cast-clip">
	<div class="cast-clip-icon">
		<span class="sprite fav-star" title="加入/取消收藏(s)"></span>
	</div>
	<div class="cast-clip-main">
		<div class="cast-clip-container">
			<span class="cast-clip-date">2009年12月12日 (2周前)</span>
			<span title="title" class="cast-clip-author">title</span>
			<h2 title="我要的幸福生活">幸福生活2</h2>
			<span class="cast-clip-content">描述2</span>
		</div>
	</div>
</div>
<div id="current-read" class="cast readed expanded">
<div class="cast-wrapper">
<div class="cast-container">
	<div class="cast-title">
		<h2><a target="_blank" title="到原网页查看全文" href="#">幸福生活2 <img src="img/icon-go.gif" alt=""></a></h2>
		<div class="stat">
		<span class="author"> 作者：helight</span>
		<span class="date"> 发表时间：2009年12月12日 (2周前)</span>
		</div>
	</div>

	<div class="cast-content">文章内容222</div>
</div>
<div class="cast-function-bar">加入收藏其他22</div>
</div>
</div>
<!-- xxxxxxxxxxxxxxxxx -->
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
	<div class="fixed" id="contentPageBar">
	notes
	</div>
</div>

</div>
    </div>
    
    <div id="chcoll-main" class="_full_page_ hidden"></div>
    <div id="hotArticles" class="_full_page_ hidden"></div>
    <div id="welcomePage" class="_full_page_ hidden" style="margin-top: 65px;"></div>
   
</body></html>
