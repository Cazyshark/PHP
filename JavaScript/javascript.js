javascript的数据类型：
    字符串类型：用单引号和双引号括起来的一个或多个字符
    数值类型：整数和浮点数(包括小数点和科学记数法)
    布尔型：true false
    对象型：用于指定JavaScript程序中用到的对象
    Null值:可以通过给一个变量赋Null值来清除变量的内容
    Undefined：表示该变量尚未被赋值
JavaScript变量命名区分大小写

javascript关键字：
    abstract
    continue
    finally
    instanceof
    private
    this
    boolean
    default
    float
    int
    public
    throw
    break
    do
    for
    interface
    return
    typeof
    byte
    double
    function
    long
    short
    true
    case
    else
    goto
    native
    static
    var
    catch
    extends
    implements
    new
    super
    void
    char
    false
    import
    null
    switch
    while
    class
    final
    in
    package
    synchronized
    with
///
申明变量
        var variable1=1;variable2=2;
        var variable1,variable2;
注释
            //单行注释
            /*  */多行注释
            js还能识别html注释的开始部分<!----,视其为单行注释,但不能匹配html注释的结尾部分----->
            如果<!----开始以--->结束 会被不支持js的浏览器忽略掉 如以<!----开始以//----->结束会对不支持js的浏览器隐藏代码，而对支持js的不隐藏

定义函数：
            function 函数名([参数]) {
                //函数体
            }
       注意：
            同一个页面中不能定义名称相同的函数

javasc中常用的事件：
			
			鼠标事件：

					onclick：鼠标单击时触发此事件
					ondblclick:鼠标双击时触发此事件
					onmousedown:鼠标按下时触发此事件
					onmouseup：鼠标按下释放时触发此事件
					onmouseover:当鼠标移动到某对象范围的上方时触发此事件
					onmousemover:鼠标移动时触发此事件
					onmouseout:鼠标离开某对象范围时触发此事件
					onkeypress:当键盘上的某个键按下并释放时触发此事件
					onkeydown:当键盘上的某个键被按下时触发此事件
					onkeyup:当键盘上某个键按下被释放时触发此事件

			页面相关事件：

					onabort：图片在下载时被用户中断触发此事件
					onload：页面内容完成时触发此事件(页面事件)
					onresize:当浏览器的窗口大小改变时触发此事件
					onunload:当前页面将被改变时触发此事件

			表单相关事件:

					onblur:当前元素失去焦点时触发此事件
					onchange:当前元素失去焦点并且元素的内容发生改变时触发此事件
					onfocus:当前元素获得焦点时触发此事件
					onreset:当表单中reset的属性被激活时触发此事件
					onsubmit:一个表单被提交时触发此事件

			滚动字幕事件：

					onbounce:当Marquee内的内容移动至Marquee显示范围之外时触发此事件
					onfinish：当Marquee元素完成需要显示的内容后触发此事件
					onstart: 当Marquee元素开始显示内容时触发此事件


在html中插入js脚本
	<script language="javascript">
		</script>

<html>
	   <head>
		 <title>在html中插入javascript脚本</title>
	   </head>
	   <body>
			<script language="javascript">
				alert("我很想学习PHP编程")
			</script>
		</body>
</html>
////
在PHP动态网页中引用JS文件
	<script src= url language="Javascript"></script>
应用<noscript>标记验证浏览器是否支持javascript脚本
<html>
	<head>
	<title>应用noscript标记验证浏览器是否支持js脚本</title>
	</head>
	<body>
		<script language="javascript">
			document.write("您的浏览器支持javascript脚本");
		</script>
		<noscript>
			您的浏览器不支持支持javascript脚本
		<noscript>
	</body>
</html>
////
< &lt  > &gt
////
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
///
