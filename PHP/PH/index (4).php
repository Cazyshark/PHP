<form name="form1" method="post" action="">
	<table width="509" border="0">
		<tr>
			<td>�û���:</td>
			<td><input type="text" name="user" size="20"></td>
			<td>����:</td>
			<td><input type="password" name="pwd" id="pwd" size="20"></td>
			<td><input type="submit" name="submit" id="submit" value="��¼"/></td>
		</tr>
	</table>
</form>
<?php
	if (isset($_POST["submit"])&&$_POST["submit"]=="��¼") {
		echo "��������û���Ϊ".$_POST["user"]."����Ϊ".$_POST["pwd"];
	}
?>