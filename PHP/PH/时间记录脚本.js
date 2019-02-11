<?php
	if (!isset($_COOKIE["visttime"])) {
		setcookie("visttime",date("Y-m-d H：i：s"))；
		echo "欢迎第一次访问";
	}else{
		setcookie("visttime",date("Y-m-d H：i：s"),time()+60);
		echo "您上次访问网站的时间为：".$_COOKIE["visttime"];
	}

	echo "您本次访问网站的时间为：".date("Y-m-d H：i：s");
?>