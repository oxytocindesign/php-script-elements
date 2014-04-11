<HTML>
<HEAD>
</HEAD>
<BODY>
<p> Search arrays to locate and print elements that are included
in all of them.</p> 
<?php
	$one = array(118,803,800);
	$two = array(118,803,804);
	$three = array(118,803,804);
	$intersects[] = array_intersect($one,$two,$three);
	foreach($intersects[0] as $child) {
		echo $child . "<br>";
	}
?>
</body>
</html>
