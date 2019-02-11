<form name="form1" method="post" action="">
	<table width="509" border="0">
		<tr>
			<td>用户名:</td>
			<td><input type="text" name="user" size="20"></td>
			<td>密码:</td>
			<td><input type="password" name="pwd" id="pwd" size="20"></td>
			<td><input type="submit" name="submit" id="submit" value="登录"/></td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST["submit"])&&$_POST["submit"]=="登录") {
		echo "您输入的用户名为".$_POST["user"]."密码为".$_POST["pwd"];
	}
?>