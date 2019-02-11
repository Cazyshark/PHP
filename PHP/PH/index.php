<!------------>
<form name="form1" method="post">
		<table width="323" boeder="1" cellpadding="1" cellspacing="1" bordercolor="#66cc33" bgcolor="#ffffff">
			<tr>
				<td width="24" align="right" bgcolor="#ccff33">用户名：</td>
				<td width="192" height="24" bgcolor="#ccff33"><input type="text" name="user" class="inputcss" id="user" size="24"></td>
			</tr>
			<tr>
				<td width="24" align="right" bgcolor="#ccff33">密&nbsp;&nbsp;码：</td>
				<td width="192" height="24" bgcolor="#ccff33"><input type="password" name="pwd" class="inputcss" id="pwd" size="24"></td>
			</tr>
			<tr align="center" bgcolor="#ccff33">
				<td height="24" colspan="2"><input type="submit" name="submit" value="登录"></td>
			</tr>

		</table>
</form>
<?php
	while(list($name,$value)=each($_POST)){
		if ($name!="submit") {
			echo "$name=$value<br>";
		}
	}
?>