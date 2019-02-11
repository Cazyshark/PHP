<form name="myform" method="post" action="">
	<table width="532" height="183" align="center" cellpadding="0" cellspacing="0" bgcolor="#CCFF66" background="images/bg.jpg">
		<tr><td height="71" colspan="2" align="center">&nbsp;</td></tr>
		<tr>
			<td width="281" align="left">
				用户名：<input type="text" name="text" id="user" size="20"><br><br>
				密码：<input type="password" name="pwd" id="pwd" size="20">
			</td>
		</tr>
		<tr>
			<td height="43" align="center">
				<input type="submit" name="submit" onclick="return mycheck();" value="登录">
				<input type="reset" name="submit2" value="重置">
			</td>
		</tr>
	</table>
</form>
<script language="javascript">
	function mycheck() {
		if (myform.user.value=="") {
			alert("用户名不能为空！");myform.user.focus();return false;
		}if (myform.pwd.value=="") {
			alert("密码不能为空！");myform.pwd.focus();return false;
		}
	}n
</script>
///
<form method="post" name="form1" id="form1" action="">
	<table width="547" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#FBA720">
		<tr>
			<td height="35" colspan="5" bgcolor="#FFFFFF"><span class="STYLE1">订单管理</span></td>
		</tr>
		<tr>
			<td width="77" align="right" bgcolor="#FFFFFF">说明：</td>
			<td width="389"><textarea name="readme" cols="50" rows="10" id="readme"></textarea></td>
			<td width="63" height="33" bgcolor="#FFFFFF" class="STYLE2">
					<a href="#" onclick="javascript:document.getElementById('readme').value=";return false"><img src="images/_14.jpg" width="60" height="25" border="0"></a>
			</td>
		</tr>
		<tr>
			<td rowspan="6" align="right" bgcolor="#FFFFFF">操作：</td>
			<td height="30" colspan="2" align="left" bgcolor="#FFFFFF"><input type="checkbox" name="PHP3" id="PHP3" value="PhP">c++编程词典</td>
		</tr>
		<tr>
			<td colspan="5" align="center" bgcolor="#FFFFFF">
				<img src="images/_01.jpg" onclick="checkAll(form1,status)" width="60" height="25"/>
				<img src="images/_08.jpg" onclick="switchAll(form1,status)" width="60" height="25"/>
				<img src="images/_011.jpg" width="60" height="25" onclick="uncheckAll(form1,status)"/>
			</td>
		</tr>
	</table>
</form>
<script language="javascript">
	function checkAll(form1,status){
		var elements=form1.getElementByTagName('input');
		for (var i=0;i<elements.length;i++) {
			if (elements[i].type=='checkbox') {
				if (elements[i].checked=false) {
					elements[i].checked=true;
				}
			}
		}
	}
	function switchAll(form1,status){
		var elements=form1.getElementByTagName('input');
		for (var i=0;i<elements.length;i++) {
			if (elements[i].type=='checkbox') {
				if (elements[i].checked=true) {
					elements[i].checked=false;
				}esle if (elements[i].checked=="false") {
					elements[i].checked=true
				}
			}
		}
	}
	function uncheckAll(form1,status){
		var elements = form1.getElementByTagName('input');
		for (var i = 0; i <= elements.length; i++) {
			if (elements[i].type=='checkbox') {
				if (elements[i].checked==true) {
					elements[i].checked=false;
				}
			}
		}
	}
</script>