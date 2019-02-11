<!------------------------------------------------------------------------------->
<form name="form1" method="post" action="">
	<table width="40" border="1" cellpadding="0" cellspacing="1" bordercolor="#FF9900" bgcolor="#CCFF66">
	<tr align="center">
		<td width="98" height="123">添加投票选项:</td>
		<td width="223" height="120"> <p>
			<textarea name="content" cols="30" rows="5" id="content"></textarea>
			<br>
			<span class="style1">注意：每个选线用*分割</span></p></td>
		<td width="61" height="120" ><input type="Submit" name="Submit" value="提交"></td>
	</tr>
	</table>
</form>
<?php
	if (isset($_POST['Submit']&&$_POST['Submit']!="")) {
		$content=$_POST['content'];
		$data=explode("*",$content);
		while (list($name,$value)=each($data)) {
			echo '<input type="checkbox" name="checkbox" value="checkbox">';
			echo $value."\n";
		}
	}
?>