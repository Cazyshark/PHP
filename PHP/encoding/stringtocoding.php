<?php
		$str='PHP IS THE WORD BEST LANGUAGE';
		echo '加密前的$str值为:'.$str;
		$crypttostr=crypt($str);
		echo "<p>加密后的$str值为:".$crypttostr;
		?>