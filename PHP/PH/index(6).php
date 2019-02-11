<a href="index(6).html?id=<?php echo urlencode("±à³Ì´Êµä");?>"> ±à³Ì´Êµä</a>
<?php
	if (isset($_GET["id"])) {
		echo "ÄúÌá½»µÄ²éÑ¯×Ö·û´®ÊÇ".urldecode($_GET['id']) ;
	}
?>