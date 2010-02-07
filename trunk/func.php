<?php
	include "./includes/lastRSS.php"; 
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
<!-- function ShowOneRSS($url) -->
<?php
function ShowOneRSS($url) {
	global $rss2;

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
}
?>
<!-- end of function -->
