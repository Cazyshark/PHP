<?php
	if (!isset($_COOKIE["visttime"])) {
		setcookie("visttime",date("Y-m-d H��i��s"))��
		echo "��ӭ��һ�η���";
	}else{
		setcookie("visttime",date("Y-m-d H��i��s"),time()+60);
		echo "���ϴη�����վ��ʱ��Ϊ��".$_COOKIE["visttime"];
	}

	echo "�����η�����վ��ʱ��Ϊ��".date("Y-m-d H��i��s");
?>