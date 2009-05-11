<?php

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
?>
