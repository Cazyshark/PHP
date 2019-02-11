<? php
	$boo = true;
	if ($boo = true)
        echo '变量$boo为真！';
    else
        echo '变量$boo为加';

?>
    //
<?php
	echo "这是XML风格";
?>
    //
    <script language="php">
	echo '这是脚本风格的标记';

    </script>
    //
<?echo '这是简短风格的标记'; ?>
    //
    <%
    echo'这是ASP风格的标记';
    %>
    //使用简短风格和asp风格 需对php.ini中进行配置，将short_open_tag和asp_tas设置为On，并重启apache服务器
    //php单行注释 php单行注释中不要出现 ?>，解释器会认为PHP脚本结束而不去继续执行后面的代码
    /* php多行注释*/
    #php风格注释##
<?php
	$boo = true;
	if ($boo == true)
        echo '变量$boo为真！';
    else
        echo "变量$boo为假！";
?>
    # PHP 中为假情况：默认为假，0，0.0，空白字符串"",只申明没有赋值的数组;
    # 美元符号$是默认的标识符，所有的变量都是以$开头的，无论申明变量还是调用变量，都应使用$
    //
<?php
	$a = '字符串';
	$a = "字符串";
?>
    //在定义简单的字符串的时候，使用单引号比较合适。如使用双引号，php将花时间处理字符串的转义和变量的解析.
    $string =<<
    <str
            要输出的字符串
            str
    //
<?php
	$i = '显示该行的内容';
	echo <<<std
	这和双引号没有什么区别，\$i同样可以被显示出来<p>
	\$i的内容为:$i
std;
?>
    //结束标识符必须单独另起一行，并且不允许有空格。在标识符前后有其他符号或字符，也会发生错误.
    //八进制中出现了非法数字8 9，后面的数字会被忽略掉.
    //如果给定的数值超过了int所能表示的最大范围，将会被当作float处理,这叫做整数溢出
    //数组的声明
    $array = array('value1','value2'...)
    $array[key]='value'
    $array=array(key1=>value1,key2=>value2...)
    #例子
    $arr1=array('This','is','an','example');
    $arr2=array(0=>'php',1=>'is','the'=>'the','str'=>'best');
    $arr3[0]='tmpname';
    //PHP可以自由的使用面对过程和面对对象的方法编程
    #php特殊的数据类型
    /resour(资源)：又叫做句柄,保存了到外部资源的一个引用，资源是通过专门的函数来建立和使用的（自动启用垃圾回收机制)
    /null(空值):表示变量没有值,唯一值就是null,不区分大小写NULL
    ###
    #
    /is_null()函数用于判断变量是否为null,返回布尔值；
    /unset()函数用于销毁指定的变量,无返回值
    #php是弱类型的语言
    #
    //php类型转换：
    //null，0，未赋值的变量或数组转换成boolean型时被转换成false
    /转换成整数时，boolean型false转换成0，true转换成1,浮点型的小数部分被舍去，字符型如果以数字开头截取到非数字位，否则输出0；
    /转换类型还可以用bool settype(mixed var,string type)来转换,成功返回true，失败返回false;
    /is_$type()函数用于判断某一变量是否为某一类型,返回值为布尔型
    /php的常量被定义后不可以改变，php的常量使用define(string constant_name,mixed value,case_sensitive=false(是否对大小写敏感))
    /php常量获取有两种方式 1.常量名 2.mixed constant(string const_name)成功返回值,错误提醒未定义
    /判断常量是否被定义用bool defined(string constant_name);

    #php中的预定义常量
    __FILE__ 默认常量 PHP程序的文件名
    __LINE__ 默认常量 PHP程序行数
    PHP_VERSION 内建常量，PHP程序的版本，如php6.0.0-dev
    PHP_OS 内建常量,执行PHP解析器的操作系统名称，如Windows
    TRUE   该常量是一个真值（true）
    FALSE  该常量是一个假值(false)
    NULL   一个null值
    E_ERROR 该常量指到最近的错误处
    E_WARNING 该常量指到最近的警告处
    E_PARSE  该常量指到解析语法有潜在问题处
    E_NOTICE 该常量为发生不寻常处的提示但不一定是错误处
    ##
    #
    #
    #PHP变量赋值方法1.直接赋值2.变量间赋值（各自拥有内存)3.变量引用赋值
<?php 
	function zdy()
    {
        static $message = 0;
        $message += 1;
        echo $message . "";
    }
	function zdy1()
    {
        $message = 0;
        $message += 1;
        echo $message . "";
    }
	for ($i = 0; $i < 10; $i++) zdy();
	echo "<br>";
	for ($i = 0; $i < 10; $i++) zdy1();
	echo "<br>";

?>
    //
    ###
    ##
    #
<?php
$hr = "黄蓉";
function lxt()
{
    $gj = '郭靖';
    echo $gj . "<br>";
    global $hr;
    echo $hr . "<br>";
}
lxt();
?>
    //
    //可变变量用一个变量存储另一个变量的值
<?php
	$a = 'b';
	$b = "我喜欢PHP";
	echo $a;
	echo $$a;//输出变量b的内容
?>
    ###
    ###
    ###
<?php
	function example($num)
    {
        echo "$num*$num=" . $num * $num;

    }
	example(10);
?>
    ####
<?php
	function values($price, $weight = 0.45)
    {
        $price = $price + ($price * $weight);
        return $price;

    }
	echo values(100);
?>
    ####
<?php
	function come()
    {
        echo "来了老弟<p>";
    }
	function go($name = "jack")
    {
        echo $name . "走了<b>";
    }
	function back($string)
    {
        echo "又回来了," . $string;
    }
	$func = "come";
	$func();
	$func = "go";
	$func("Tom");
	$func = "back";
	$func("Lily");
?>
    ####
<?php
	$num = rand(1, 31);
	if ($num % 2 == 0) {
        echo "\$num=$num";
        echo "<br>$num是偶数。";

    }
?>
    ///
<?php
	$month = date("n");
	$today = date("j");
	if ($today >= 1 and $today <= 10) {
        echo "今天是" . $month . "月" . $today . "日,是本月月上旬";
    } elseif ($today <= 20) {
        echo "今天是" . $month . "月" . $today . "日,是本月月中旬";
    } else {
        echo "今天是" . $month . "月" . $today . "日,是本月月下旬";
    }
?>
    ////
<?php
	switch (isset($_GET['Imbs']) ? $_GET['Imbs'] : "") {
        case '最新商品':
            include "new.php";
            break;
        case '热门商品':
            include "jollification.php";
            break;
        case '推荐商品':
            include "commend.php";
            break;
        case '订单查询':
            include "order_form.php";
            break;
        default:
            include "new.php";
            break;
    }
?>

    ///
    string trim(sting str,[,string charlist]);
    ///
    string addslashes(string str);
    ///
    string stripslashes(string str);
    ///
    string addcslashes(string str,string charlist);
    ///
    string stripcslashes(string str);
    ///
<?php
	$a = "编程词典网";
	echo $a;
	echo "<br>";
	$b = addcslashes($a, "编程词典网");
	echo $b;
	echo "<b>";
	$c = stripcslashes($b);
	echo $c;
?>
    ///
    int strlen(string str);
    ///
<?php
if (strlen($_POST['pwd']) < 6) {
    echo "<script>alert('用户密码的长度不得少于6位！请重新输入');history.back();</script>";
} else {
    echo "用户信息输入合法！";

}
?>
    ///
    string substr(string str,int startp[,int length])
    ///
<?php
	$text = "祝全国程序员编程路上一帆风顺二龙腾飞三羊开泰四季平安五福临门六六大顺"；
	if (strlen($text) > 30) {
        echo substr($text, 0, 30) . "...";
    } else {
        echo $text;
    }
?>
    ///
    int strcmp(string str1,string str2);
    int strcasecmp(string str1,string str2);
    ///
    int strnatcmp(string str1,string str2);
    ///
    int strncmp(string str1,string str2,int len);
    ///
    string strstr(string haystack,string needle);(区分大小写)
    ///
    <form method="post" action="index.php" enctype="multipart/form-data">
        <input type="hidden" name="action" value="upload">
        <input type="file" name="u_file">
        <input type="submit" name="上传">
    </form>
<?php
	if (isset($_POST['action']) && _POST['action'] == "upload") { //判断提交按钮是否为空
        $file_path = "./uploads\\";                        //定义图片在服务器中的储存位置
        $picture_name = $__FILES__['u_file']['name'];        //获取上传图片的名称
        $picture_name = strstr($picture_name, ".");        //通过strstr()函数截取上传图片的后缀
        if ($picture_name != ".jpg") {                            //根据后缀判断上传图片的格式是否符合要求
            echo "<script>alert('上传图片的格式不正确，请重新上传');window.location.herf='index.php';</script>";
        } elseif ($__FILES__['u_file']['tmp_name']) {
            move_uploaded_file($__FILES__['u_file']['tmp_name'], $file_path . $__FILES['u_file']['name']);//执行图片上传
            echo "图片上传成功!";
        }
        esle{
            echo "图片上传失败!";
        }
	}
?>
    ///
    string strstr(haystack, needle)(后续检索)
    ///
    int substr_count(string haystack,string needle);
    ///
    mixed str_ireplace(mixed search,mixed replace,mixed subject[,int &count])(区分大小写)
    ///
<?php
	$content = "白领女子公寓，温馨街南行200米，交通便利，...";
	$str = "女子公寓"；
	echo str_ireplace($str, "<font color='#FF0000'>" . $str . "</font>", $content);
?>
    ///
    mixed substr_replace(mixed string,mixed repl,mixed start,['mixed length'])
    ///
    string number_fotmat(float number[,int decimals[,string dec_point[,string thousands_sep]]])
    ///
<?php
	$number = 1868.96;
	echo number_format($number);
	echo "<br>";
	echo number_format($number, 2);
	echo "<br>";
	$number2 = 123456789.456;
	echo number_format($number2, 2, '*', '#');
?>
    ///
    array explode(string delimiter,string str[,int limit])
    ///
<?php
	$str = "PHP#可以自由的#使用面对过程#和面对对象的#方法编程";
	$str_arr = explode("#", $str);
	print_r($str_arr);
?>
    ///
    string imploade(string glue,array pieces);
    ///
    [:digit:] 十进制数字集合
    [[:alnum:] 字母和数字的集合[a-zA-Z0-9]
    [[:alpha:]] 字母集合[a-zA-Z]
    [[:blank:]] 空格和制表符
    [[:xdigit:]] 十六进制数字
    [[:punct:]] 特殊字符
    [[:print:]] 所有可打印的字符 包括 空
    [[:space:]] 空白字符(空格 换行符 换页符 回车符 水平制表符)
    [[:graph:]] 所有可打印的字符 不包括空白字符
    [[:upper:]] 所有大写字符
    [[:lower:]] 所有小写字符
    [[:cntrl:]] 控制字符
    ///
    array preg_grep(string pattern,array input);
    ///
<?php
	$preg = '^d[3,4]-?\d{7,8}/';
	$arr = array('0456789123456', '457891554842', '789157489158');
	$preg_arr = preg_grep($preg, $arr);
	var_dump($preg_arr);
?>
    ///
    int preg_match/preg_match_all(string patterm,string subject[.array matches])
    ///
<?php
	$str = 'This is an example!';
	$preg = '/\b\w{2}\b/';
	$num1 = preg_match($preg, $str, $str1);
	echo $num1 . '<br>';
	var_dump($str1);
	$num2 = preg_match_all($preg, $str, $str2);
	var_dump($str2);
?>
    ///
    string preg_quote(string str[,string delimiter]);
    ///
    mixed preg_replace(mixed pattern,mixed replacement,mixed subject[,int limit])
    ///
<?php
	$string = '[b]粗体字[/b]';
	$b_rst = preg_replace('/\[b\](.*)/i', '<b>$1<b>', $string);
	echo $b_rst;
?>
    ///
    mixed preg_replace_callback(mixed pattern,callback callback,mixed subject[,int limit]);
    ///
<?php 
	function c_back($str)
    {
        $str = "<font color = $str[1]>$str[2]</font>";
        return $str;
    }
	$string = '[color=blue]字体颜色[/color]';
	echo preg_replace_callback('^[color=(.*)\](.*)\[\/color\]/U', "c_back", $string);
?>
    ///
    array preg_spilt(string pattern,string subject[,int limit]);
    ///
    <script src="js/check.js"></script>
    <form name="reg_check" method="post" action="index_ok.php" onsubmit="return chkreg(reg_check,'all')">
        <table width="550" height="270" border="0" align="center" cellpadding="0">
            <tr>
                <td height="30">
                    <div align="right">邮政编码:</div>
                </td>
                <td height="30" colspan="2" align="left">&nbsp;
                    <input type="text" name="postalcode" size="20" onBlur="chkreg(reg_check,2)">
                    <div id="check_postalcode" style="color:#F1b000"></div>
                </td>
            </tr>
            <tr>
                <td height="30" align="right">固定电话：</td>
                <td height="30" colspan="2" align="left">&nbsp;
                    <input type="text" name="gtel" size="20" onBlur="chkreg(reg_check,6)">
                    <font color="#999999">
                        <div id="check_gtel" style="color:#F1b000"></div>
                    </font></td>
            </tr>
            <tr>
                <td height="30">
                    <div align="right">移动电话:</div>
                </td>
                <td height="30" colspan="2" align="left">&nbsp;
                    <input type="text" name="mtel" size="20" onBlur="chkreg(reg_check,5)">
                    <div id="check_mtel" style="color:#F1b000"></div>
                </td>
            </tr>
            <tr>
                <td width="100" height="30"><input type="image" src="images/bg_09.jpg"></td>
                <td width="340"><img src="images/bg_11.jpg" width="56" height="30" onclick="reg_check.reset() style="
                                     cursor:hand">
                </td>
            </tr>
        </table>
    </form>
    ///
    array array([mixed ...])
    ///
<?php
	$newarray = array("first" => 1, "second" => 2, "third" => 3);
	echo $newarray["second"];
	$newarray["third"] = 8;
	echo $newarray["third"];
?>
    ///
    bool print_r(mixed expression)
    ///
<?php
	$url = array('baidu' => 'www.baidu.com',
        'google' => 'www.google.com',
        'taobao' => 'www.taobao.com');
	foreach ($url as $link) {
        echo $link . "<br>";
    }
?>
    ///
    void lisit (mixed ...)
    ///
    <!------------>
    <form name="form1" method="post">
        <table width="323" boeder="1" cellpadding="1" cellspacing="1" bordercolor="#66cc33" bgcolor="#ffffff">
            <tr>
                <td width="24" align="right" bgcolor="#ccff33">用户名：</td>
                <td width="192" height="24" bgcolor="#ccff33"><input type="text" name="user" class="inputcss" id="user"
                                                                     size="24"></td>
            </tr>
            <tr>
                <td width="24" align="right" bgcolor="#ccff33">密&nbsp;&nbsp;码：</td>
                <td width="192" height="24" bgcolor="#ccff33"><input type="password" name="pwd" class="inputcss"
                                                                     id="pwd" size="24"></td>
            </tr>
            <tr align="center" bgcolor="#ccff33">
                <td height="24" colspan="2"><input type="submit" name="submit" value="登录"></td>
            </tr>

        </table>
    </form>
<?php
	while (list($name, $value) = each($_POST)) {
        if ($name != "submit") {
            echo "$name=$value<br>";
        }
    }
?>
    ///
    array explode(string separator,string string,[int limit]);
    ///
<?php
	$str = "时装/休闲/职业装";
	$strs = explode("/", $str);
	print_r($strs);
?>
    ///
    <!------------------------------------------------------------------------------->
    <form name="form1" method="post" action="">
        <table width="40" border="1" cellpadding="0" cellspacing="1" bordercolor="#FF9900" bgcolor="#CCFF66">
            <tr align="center">
                <td width="98" height="123">添加投票选项:</td>
                <td width="223" height="120"><p>
                        <textarea name="content" cols="30" rows="5" id="content"></textarea>
                        <br>
                        <span class="style1">注意：每个选线用*分割</span></p></td>
                <td width="61" height="120"><input type="Submit" name="Submit" value="提交"></td>
            </tr>
        </table>
    </form>
<?php
	if (isset($_POST['Submit'] && $_POST['Submit'] != "")) {
        $content = $_POST['content'];
        $data = explode("*", $content);
        while (list($name, $value) = each($data)) {
            echo '<input type="checkbox" name="checkbox" value="checkbox">';
            echo $value . "\n";
        }
    }
?>
    ///
    string implode(string glue,array pieces)
    ///
<?php
	$str = array("明日", "编程词典", "网址", "www.mrbccd.com");
	echo implode(" ", $str);
?>
    ///
    int count(mixed array[,int mode]);
    ///
    mixed array_search(mixed needle,array haystack[,bool strict])
    ///
    mixed array_pop(array array);
    ///
    int array_push(array array,mixed var[,mixed...])
    ///
    array array_unique(array array)
    ///
    <form name="表单名称" method="设置表单的提交方式，GET或POST方式" action="指向处理该表单页面的URL(相对位置或绝对位置)" enctype="设置表单内容的编码方式"
          target="设置返回信息的显示方式_blank:将返回的信息显示在新的窗口中；_parent将返回的信息显示父级窗口中;_self:将返回的信息显示在当前窗口中;_top:将返回的信息显示在顶级窗口中"></form>
    ///
    <form>
        <input type="输入域类型" name="输入域名称">
        text：<input type="text" name="文本框名称" value="文本框默认值" size="文本框宽度以字符为单位" maxlength="文本框最大输入字符数">
        password:<input type="password" name="密码域名称">
        file：文件域，打开一个模拟窗口选择文件，将文件通过表单上传到服务器 需要制定表单属性 enctype='multipart/form-data'可实现上传功能
        image:图像域 用在提交按钮上的图片 这幅图片具有按钮功能
        radio：单选按钮，用于设置一组选项，checked属性用来设置该单选按钮默认选中
        checkbox:复选框按钮
        submit：提交按钮 将表单的内容提交到服务器端
        reset:清除和重置表单内容 用于清除表单中所有文本框的内容，并使选择菜单项恢复到初始值
        button：普通按钮 配合js脚本进行表单处理
        hidden:隐藏域 用于在表单中以隐含的方式提交变量值。对用户不可见
    </form>
    <!--------------------------------------------------------->
    <select name="选择域标记，建立一个列表或者菜单，下拉菜单" size='列表行数' multiple(表示以菜单方式显示数据，省略则以列表的方式显示数据)>
        <option value="value" selected>选项1</option>
        <option value="value">选项2</option>
        <option value="value">选项3</option>
    </select>
    ///
    <textarea name="文字域标记" rows=文字域行数(以字符为单位) cols=文字域列数(以字符为单位) value=默认值
              warp="设定显示和送出时的换行方式 off不自动换行 hard自动硬回车换行 换行标记一同被发送会服务器 soft:自动软回车换行标记不会被送回服务器 "></textarea>
    ///
    <form name="form1" method="post" action="index.php>">
        <table width="300" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td height="30">&nbsl;&nbsl;订单号：
                    <input type="password" name="submit" size="20">
                    <input type="submit" name="submit" value="提交">
                </td>
            </tr>
        </table>
    </form>
    ///
    <!--------------------------------------------------------->
    /**使用get提交form表单
    #  http://url?name1=value1&name2=value2...
    #  表单相应地址 表单元素名称 元素的值
    #  url和表单元素之间用？隔开 多个表单元素之间用&隔开
    #  get方式发送表单URL的长度应限制在1MB字符以内 信息量太大数据会被截断
    <!----------------------------------------------------------->
    <form name="form1" method="get" action="index.php">
        <table width="50" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="50" height="30">&nbsp;&nbsp;用户名:
                    <input type="text" name="user" size="12">
                    密码：
                    <input type="password" name="pwd" id="pwd" size="12">
                    <input type="submit" name="submit" value="提交"></td>
            </tr>
        </table>
    </form>
    <!------------------------------------------------------------>
    ///php传递参数方法 $_POST[name]获取表单 $_GET[name]获取URL $_SESSION[name]获取Sess变量的值
    在php.ini文件中检索 register_globals=ON/OFF代码 如为ON可直接写成$user来调用表单元素的值
    ////
php默认格林尼治时间
 1.修改php.ini中的设置 找到;date.timezone=选项改为date.timezone=Asia/Hong_Kong然后重启Apche服务器
 2.在应用程序中加 date_default_timezone_set(timezone);函数
 ///
 	int mktime(int hour,int minute,int second,int month,int day,int year,int[is_dst])
///
有效的时间戳>>>1901:12:13:20:54:45~2038:1:19:03:14:07
windows限制>>>:1970：1：1~2038：1：19
///
<?php
	echo "指定时间戳".mktime(12,23,56,12,10,12);
	echo "指定日期为:".date("Y-m-d",mktime(12,23,56,12,10,12));
	echo "指定时间为:".date("H-i-s",mktime(12,23,56,12,10,12));
?>
///
int time(void) UNIX纪元(格林尼治时间1970：01：01：00：00：00)
///
<?php
	$nextWeek=time()+(7*24*60*60);
	echo "Now".date('Y-m-d');
	echo "Next Week".date('Y-m-d',$nextWeek);
?>
///
date(string format,int timestamp)
	DATE_ATOM:原子钟格式 							2019-02-01T12:09:08+00:00
	DATE_COOKIE:HTTP Cookie格式						Friday, 01-Feb-2019 12:09:08 UTC
	DATE_RFC822:rfc822格式							Fri, 01 Feb 19 12:09:08 +0000
	DATE_RFC850:rfc850格式							Friday, 01-Feb-19 12:09:08 UTC
	DATE_RSS:RSS格式									Fri, 01 Feb 2019 12:09:08 +0000
	DATE_W3C：world wide web Consortium格式			2019-02-01T12:09:08+00:00
	DATE_ISO8601:ISO8601格式							2019-02-01T12:12:17+0000
////
<?php
	echo "DATE_ATOM___".date(DATE_ATOM);
	echo "DATE_COOKIE__".date(DATE_COOKIE);
	echo "DATE_ISO8601__".date(DATE_RFC822);
	echo "DATE_RFC822__".date(DATE_RFC822);
	echo "DATE_RFC850__".date(DATE_RFC850);
	echo "DATE_RSS__".date(DATE_RSS);
	echo "DATE_W3C__".date(DATE_W3C);
?>
///
array getdate(int timestamp)
	second
	minutes
	hours
	mday ：一月中第几天
	wday ：一周中第几天
	mon
	year
	yday ：一年中第几天
	weekday
	month
	0 ：unix秒数
///
检验日期的有效性：
	bool checkdate(int month,int day,int year(1~32767))
///
date()函数的format格式
	a：小写的上午和下午，返回am或者pm
	A：大写的上午和下午，返回AM或者PM
	B：Swatch Internet标准时间，返回值000~999
	d：月份的第几天，有前导0的两位数字，返回值为01~31
	D：星期中的第几天，文本格式，3个字母，返回值为Mon~Sun
	F：月份，完整的文本格式，返回值为january~December
	h：小时12小时格式，没有前导0，返回值为1~12
	H：小时24格式，没有前导0，返回值为0~23
	i：有前导0的分钟数，返回值为00~59
	I：判断是否为夏令时，如果是返回1，否则为0
	j：月份中的第几天，没有前导零，返回值为1~31
	l：星期数，完整的文本格式，返回值为Sunday~Saturday
	L：判断是否为闰年，是返回1，不是返回0
	m：数字表示的月份，有前导零，返回值为01~12
	M：3个字母缩写表示的月份，返回值为Jan~Dec
	n：数字表示的月份，没有前导零，返回值为1~12
	O：与格林威治时间相差得小时数
	r：RFC822格式的日期
	s：秒数，有前导零，返回值为00~59
	S：每月天数后面的英文后缀，两个字符
	t：指定月份所应有的天数 28~31
	T：本机所在的时区
	U：从UNIX纪元开始至今的秒数
	w：星期中的第几天
	W：ISO8601格式年份中的第几周，每周从星期一开始
	y：两位数字表示的年份
	Y：4位数字表示的年份
	z：年份中的第几天
	Z：时差偏移量的秒数
///
string setlocale(string category,string locale)
	category
		LC_ALL:包含了下面所有的设置本地化规则
		LC_COLLATE:字符串比较
		LC_CTYPE:字符串分类和转换，如转换大小写
		LC_MONETARY:本地化环境的货币形式
		LC_NUMERIC:本地化环境的数值形式
		LC_TIME:本地化环境的时间形式
//windows http://msdn.microsoft,com
//locale-a UNIX/LINUX
///
string strftime(string format,int timestamp)
	format:
		%a:星期的简写
		%A:星期的全程
		%b:月份的简写
		%B:月份的全称
		%c:当前区域首选的日期时间表达
		%C:世纪
		%d:月份中的第几天，十进制数字(01~31)
		%D:和%m/%d/%y一样
		%e:月份中的第几天，十进制数字，一位的数字前会加上一个空格
		%g:
		%G:4位数年份，符合iso星期数
		%h:%b 月份的简写
		%H:24小时制
		%I:12小时制
		%j:月份中的第几天
		%m:十进制月份
		%M:十进制分钟数
		%n:换行符
		%p:根据给定的时间值为am或pm，或者当前区域设置中的相应字符出串
		%r:用a.m p.m符号的时间
		%R:24小时符号时间
		%S:十进制秒数
		%t:制表符
		%T:当前时间%H:%M:%S
		%u:星期的十进制表达
		%U:本年的第几周
		%V:本年的第几周的ISO8601：1988格式，（01~53) 第一周有4天在本年中 一周的开始是星期一
		%W:本年的第几周，星期一是周一
		%w:星期中的第几天 星期日为0
		%x:当前区域首选的时间表示法，不包括时间
		%X:当前区域的时间表示法，不包括日期
		%y:没有世纪的十进制年份
		%Y:包括世纪数的十进制年份
		%Z/%z:时区名或缩写
		%%：字符%
///
int strtotime(string time,[,int now]) 可将任何英文文本的日期和时间解析为UNIX时间戳
///
string microtime(void)
msec 微秒数 sec当前UNIX时间戳
///
<?php
	finction run_time(){
		list($msec,$sec)=explode(" ",microtime());
		return ((float)$msec+(float)$sec);
	}
		$start_time = run_time();
		$end_time=run_time();
?>
///
Cookie文件：
	用户名@网站地址[数字].txt
///
bool setcookie(string name[,string value[,int expire[,string path[,string domain[,int secure]]]]])
	name:Cookie的变量名 可以通过$_COOKIE["cookiename"] 调用变量名为cookiename的Cookie
	value:Cookie变量的值，该值保存在客户端 可以通过$_COOKIE["vakues"]获取名为values的值
	expire:cookie的失效时间，expir是标准的UNIX时间标记，可以用time()函数获取，单位为秒，如不设置失效时间 Cookie将永久有效
	path:Cookie在服务器端的有效路径
	domain:Cookie有效的域名
	secure:指明Cookie是否通过安全的HTTPS ，如果为1，Cookie只能在HTTPS连接上有效，如果为0则在HTTP和https上连接均有效
///
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
///
启动会话：
	1.session_start() 在页面开始位置调用，会话变量登录到数据$_SESSIONN
	2.session_register()
///
	bool session_start(void)
///
<?php
	session_start();
	$_SESSIONN["admin"]=null;
?>
///
<?php
	if (!empty($_SESSION['session_name'])) {
		$myvalue = $_SESSION['session_name'];
	}
?>
///
1.删除单个会话
	unset($_SESSION['user']);
2.删除多个会话
	$_SESSION = array();
3.结束当前会话
	session_destory();
///
SEssion设置时间
	session_set_cookie_params();//设置session失效的时间 必须在session启动前调用
	setcookie()设置session失效时间
///
	使用GET方式 隐藏表单传递session_id
		<form id="form1" name="form1" method="post" action="common.php?<?=session_name();?>=<?=session_id();?>"></form>
		接收页面头部详细代码：
			<?php
				$sess_name = session_name();
				$sess_id = $_GET[$sess_name];
				session_id($sess_id);
				session_start();
				$_SESSION['admin']='mrsoft';
			?>
///
<form name="form1" method="post" action="default.php>">
	<table width="521" height="394" border="0" cellpadding="0" cellspacing="0">
		<tr>
			<td valign="top" background="images/login.jpg">
				<table width="521" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td height="24" align="right">用户名：</td>
						<td height="24" align="left"><input type="text" name="user" id="user" size="20"></td>
					</tr>
					<tr>
						<td height="24" align>密码：</td>
						<td height="24" align="left"><input type="password" name="pwd" id="pwd" size="20"></td>
					</tr>
					<tr align="center">
						<td height="24" colspan="2"><input type="submit" name="submit" value="提交" onclick="return check(form);"><input type="reset" name="submit2" value="重填"></td>
					</tr>
					<tr>
						<td height="76" align="right"><span class="style1">超级用户:</span></td>
						<td><span class=style1>普通用户:</span></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
<script language="javascript">
		function check(form){
			if (form.user.value=="") {
				alert("请输入用户名");
				form.user.focus();
				return false;
			}
			if (form.pwd.value=="") {
				alert("请输入密码！");
				form.pwd.focus();
				return false;
			}
		}
</script>
<?php
	session_start();
	$_SESSION['user']=$_POST['user'];
	$_SESSION['pwd']=$_POST['pwd'];
?>
<?php
	if($_SESSION['user']==""){
		echo "<script language="javascript">alert('请通过正确的途径登录本系统');history.back();</script>";
	}
?>
<!--------------------->
<TABLE align="center" cellPadding=0 cellSpacing=0>
	<tr align="center" valign="middle">
		<td style="width: 140px；color:red">当前用户：
		<!----------------->
		<?php
			if($_SESSION['user']=="tsoft" && $_SESSION['pwd']=="111") {
				echo "管理员";
			}else{
				echo "普通用户";
			}
		?>
		</td>
		<td width="70"><a href="default.php">博客首页</a></td>
		<td width="70">|;<a href="default.php">我的文章</td>
		<td width="70">|;<a href="default.php">我的相册</td>
		<td width="70">|;<a href="default.php">修改密码</td>
		<?php  
			if ($_SESSION['user']=="tsoft"&& $_SESSION['pwd']=="111") {
				<td width="70">|<a herf = "default.php">用户管理</a></td>
			}
		?>
	</tr>
</TABLE>
<?php
	session_start();
	unset($_SESSION['user']);
	unset($_SESSION['pwd']);
	session_destroy();
	header("loaction：index.php");
?>
///
使用session_save_path()修改Session文件的存储位置,缓解临时文件存储效率低下而导致的服务器效率低和站点打开缓慢的问题
<?php
	$path='/path';
	session_save_path($path);
	session_start();
	$_SESSION['username']=true;
?>
///
session缓存
	string session_cache_limiter([string cache_expire(public/private)])
缓存时间设置
	int session_cache_expire([int new_cache_expire(单位分钟)])
///
Session数据库存储
 	bool session_set_save_handler(string open,string close,string reafd,string write,string destory,string gc);

 	参数解释：open(save_path,session_name)找的session存储地址，取出变量名称
 			 close() 不需要参数，关闭数据库
 			 read(key) 读取session健值，key对应session_id
 			 write(key,data) 其中达特对应设置的session变量
 			 destroy(key) 注销session对应session键值
 			 gc(expiry_time) 消除过期session记录
///
function _session_open($save_path,$session_name){
	global $handle;
	$handle = mysql_connect('loacalhost','root','root')or die('数据库连接失败');
	mysql_select_db('db_database11',$handle) or die('数据库中没有此库名');
	return true;
}
///
function _session_close()
{
	global $handle;
	mysql_close($handle);
	return(true);
}
///
function _session_read($key){
	global $handle;
	$time =time();
	$sql ="select session_data from tb_session where session_key='$key' and session_time > $time";
	$result = mysql_query($sql,$handle);
	$row = mysql_fetch_array($result);
	if($row){
	 return($row['session_data']);
	}else{
	return(false);
	}
}
///
function _session_write($key,$data)
{
	global $handle;
	$time = 60*60;
	$lapse_time = time()+$time;
	$handle = mysqli_connect('localhost','root','111') or die('数据库连接失败');
	mysqlli_select_db($handle,'db_database11')or die('数据库中没有此库名');
	$sql="select session_data from tb_session where session_key ='$key' and session_time > $lapse_time";
	$result =mysql_query($sql,$handle);
	if(mysql_num_rows($result)==0){
		$sql ="insert into tb_session caluse('$key','$data','$lapse_time')";
		$result = mysql_query($sql,$handle);
	}else{
	$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key ='$key'";
	$result = mysql_query($sql,$handle);
	}
	return($result);
}
///
function _session_destroy($key){
	global $handle;
	$sql = "delect from tb_session where session_key ='$key'";
	$result = mysqk_query($sql,$handle);
	return($result);
}
///
function _session_gc(){
	global $handle;
	$lapse_time = time();
	$sql = "delect from tb_session where session_time < $lapse_time";
	$result = mysql_query($sql,$handle);
	return ($result);
}
///
example:
	session_set_save_handler('_session_open','_session_close','_session_read','_session_write','_session_destroy','_session_gc');
	session_start();
	///自定义session
	$_SESSION['user']='mr';
	$_SESSION['pwd']='mrsoft';
///
<?php
	$im = imagecreate(200, 60); //创建画布
	$white = imagecolorallocate($im,30,30,30); //设置画布的背景颜色
	imagegif($im); //输出画布的背景颜色
?>
///
<?php
	header("content-type:image/jpeg");  //定义输出为图像类型
	$im = imagecreatefromjpeg("images/photo.jpg"); //载入图片
	$textcolor = imagecolorallocate($im,56,73,136); //设置字体为蓝色 值为RGB颜色值
	$fnt="c:/windows/fonts/simhei.ttf"; //定义字体
	$moto = iconv("gb2312","utf-8", "长白山天池")； //文字转码
	imagettftext($im,220,0, 480,340,$textcolor, $fnt, $motto); // 写TTF文字到图中 图片 字体大小 水平角度 文字坐标 文字颜色 字体 照片文字
	imagejpeg($im);  //建立JPEG图形 
	imagedestroy($im) //结束图形 ，释放内存空间
?>
///
图像处理技术生成验证码：
<?php
	session_start(); //初始化session变量
	header("content-type:image/png"); //设置创建图像的格式
	$image_width=70; //设置图像宽度
	$image_height=18; //设置图像高度
	srand(microtime()*1000000); //设置随机数种子
	$new)number="";	//初始化变量0
	for($i=0;$i<4;$i++){	//循环输出一个4位随机数
		$new_number.=dechex(rand(0,15))
	}
	$_SESSION['check_checks']=$new_number; 						//将随机数写入session变量中
	$num_image=imagecreate($image_width, $image_height); 		//创建画布
	imagecolorallocate($num_image, 255, 255, 255); 				//设置画布颜色
	for($i=0;$i<strlen($_SESSION['check_checks']);$i++){ 		//循环读取画布的颜色
		$font = mt_rand(3,5); 									//设置随机字体
		$x=mt_rand(1,8)+$image_width*$i/4;
		$y=mt_rand(1,$image_height/4);
		$color = imagecolorallocate($num_image,,mt_rand(0,150),mt_rand(0,150), mt_rand(0,200));  //设置字体颜色
		imagestring($num_image, $font, $x, $y,$_SESSION['check_checks'][$i], $color);   //水平输出字符
	}
	imagepng($num_image);	//生成PNG图像
	imagedestroy($num_image); //释放图像资源
?>
///
<?php
	session_start();
	if(isset($_POST["sunmit"])&&$_POST["submit"]!=""){
		$checks=$_POST["checks"];
		if ($checks=="") {
			echo "<script>alert('验证码不能为空');window.location.href='index.php';</script>";
		}
		if ($checks==$_SESSION['check_checks']) {
			echo "<script>alert('用户登录成功！');window.location.href='index.php';</script>";
		}else{
			echo "<script>alert('输入密码错误！');window.location.href='index.php';</script>";
		}
	}
?>
///
<?php  //使用柱形图统计图书月销量
	include("jpgraph/jpgraph.php");
	include("jpgraph/jpgraph_bar.php");  //英勇柱形图对象所在的文件

	$datay =array(160,180,203,289,405,455,489,408,299,166,187,105); //创建数组
	$graph = new Graph(600,300,"auto");  //创建画布
	$graph -> SetScale("textlin");
	$graph ->yaxis->scale->SetGrace(20);
	$graph ->SetShadow();  //创建画布阴影
	$graph ->img->SetMargin(40,30,30,40); //设置统计图所在画布的位置 
	$bplot = new BarPlot($datay);   //创建一个矩形对象
	$bplot->SetFillColor('orange'); //设置柱形图的颜色
	$bplot->value->Show();  //设置显示数字
	$bplot->value->SetFormat('%d');   //在柱形图中显示格式化的图书销量
	$graph ->Add($bplot);  //将柱形图添加到图像中
	$graph ->SetMarginColor("lightblue"); //设置画布背景色为淡蓝色
	$graph ->title->Set("《PHP从入门到精通》2009年销售统计"); //创建标题
	//设置X坐标文字
	$a =array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
	$graph->xaxis->SetTickLabels($a);	//设置X轴
	$graph->title->SetFont(FF_SIMSUN);	//设置标题字体
	$graph->xaxis->SetFont(FF_SIMSUN);  //设置X轴字体
	$graph->Stroke();  					//输出图像
?>
///
<?php //使用折线图统计
	include("jpgraph/jpgraph.php");
	include("jpgraph/jpgraph_line.php");  //引用 折线图LinePlot类文件

	$datay =  array(8320,9360,14956,17028,13060,15376,25428,16216,28548,48632,22724,28460);
	$graph = new Graph(600,300,"auto"); //创建画布 
	$graph ->img->SetMargin(50,40,30,40);
	$graph ->img->SetAntiAliasing();//设置折线的平滑状态
	$graph ->SetScale("textlin");  //设置刻度样式
	$graph ->SetShadow();  //创建画布阴影
	$graph ->title->Set("2020年天津美时达公司月绩"); //设置标题字体
	$graph ->title->SetFont(FF_SIMSUN,FS_BOLD);  //设置标题字体
	$graph ->SetMarginColor("lightblue");  //设置画布颜色为淡蓝色
	$graph ->yaxis->title->SetFont(FF_SIMSUN,FS_BOLD); //设置Y轴标题字体
	$graph ->xaxis->SetPos("min");
	$graph ->yaxis->HideZeroLabel();
	$graph ->ygrid->SetFill(true，'#EFEFEFEF@0.5','$BBCCFFF@0.5');
	$a =array("1月","2月","3月","4月","5月","6月","7月","8月","9月","10月","11月","12月");
	$graph->xaxis->SetTickLabels($a); // 设置x轴
	$graph->xaxis->SetFont(FF_SIMSUN); //设置x轴坐标的字体
	$graph->yscale->SetGrace(20);
	$p1 = new LinePlot($datay);			//创建折线图对象
	$p1 ->mark->settype(MARK_FILLEDCIRCLE);  //设置数据坐标点为圆形标记
	$p1 ->mark->SetFillColor("red"); //设置填充颜色
	$p1 ->mark->SetWidth(4);	//设置圆形标记的直径为4像素
	$p1 ->SetColr("blue");    //设置折线的颜色为蓝色
	$p1 ->SetCenter();   //在X轴的各坐标中兴位置绘制折线
	$graph->Add($p1);   //在统计图上绘制折线
	$graph->Stroke(); //输出图像
?>
///
创建3D饼形图
	<?php  
		include_once("jpgraph/jpgraph.php");
		include_once("jpgraph/jpgraph_pie.php");
		include_once("jpgraph/jpgraph_pie3.php");

		$data = array(266036,295612,335851,254456,45156,685425);
		$graph = new PieGraph(540,260,'auto');
		$graph -> SetShadow();
		$graph->title->Set("应用3D饼形图统计2019年商品销售比率"); // 创建标题
		$graph->title->SetFont(FF_SIMSUN,FS_NORMAL); //设置标题字体
		$graph->legend->SetFont(FF_SIMSUN,FS_NORMAL); //设置图例字体

		$p1 = new PiePlot3D($data);  //创建3d饼形图对象
		$p1 -> SetLegends(array("it数码","家电通讯","家居日用","服饰鞋帽","健康美容","食品烟酒"));
		$tar  =array("pie3_csimex1.php?v=1","pie3_csimex1.php?v=2","pie3_csimex1.php?v=3","pie3_csimex1.php?v=4","pie3_csimex1.php?v=5","pie3_csimex1.php?v=6");
 		$alts=array("val=$d","val=$d","val=$d","val=$d","val=$d","val=$d");
 		$p1->SetCSIMTargets($targ,$alts);

 		$p1->SetCenter(0.4,0.5);   //设置饼形图在画布的位置
 		$graph->Add($p1);	//将3D饼形图添加到图像中
 		$graph->StrokeCSIM(); //输出图像到浏览器
	?>
///
<!------------------------------------------------------------------------->
打开文件：
	ressource fopen(String filename,string mode[,bool use_include_path]);
	 filename：包含路径的文件名 相对/绝对
	 mode:打开文件方式 r 只读
					  r+ 进行读写
					  W 写模式 进行写入文件 原文件可能被覆盖
					  W+ 进行读写 如果文件存在则内容被覆盖
					  x 谨慎写 写模式 打开文件 如文件已存在 返回false
					  x+ 谨慎写 读写模式打开文件,如文件存在，返回false
					  a 追加
					  A+ 追加模式
					  b 二进制 				
					  t 文本
关闭文件：
bool fclose(resorce handle);

读取文件：
	int readfile(string filename) 将一个文件写入缓冲区
	array file(string filename)：将文件以行为单位写入数组中
	string file_get_contents(string filename[,int offset[,int maxlen]]) ：从第offeset个字符开始 读取到 maxlen个字符 的字符串
读取一行数据：
	 string fget(int handle[,int length]) handle 行数  length 读取的数据的长度
	 string fgetss(resource handle[,int length[,string allowable_tags]]) 从读取文件中过滤掉 html 和php 标记 allowable_tags 控制这些标记不被过滤掉
读取一个字符：
	string fgetc(resource handle)
读取任意长度的字符串：
	string fread(int handle,int length) handle 指向的文件资源 length 要读取的字节数
///
将数据写入文件
	int fwrite(resource handle,string string[,int length]) 又叫做fputs()函数 将string 写入文件指针handle 写入length个字节后停止
	int file_put_contents(string filename,string data[,int flags]) filename 要写入数据的文件 data 要写入的数据 flags:FILE_USE_INCLUDE_PATH,FILE_APPEND/LOCK_EX
	file_put_contents()函数和依次调用fopen(),fwrite(),fclose()函数的功能一样
///
操作文件
	bool copy(string path1,string path2):将文件从path1复制到path2 成功返回true 失败返回false
	bool rename(string filename1,string filename2):将文件filename1重命名为filename2
	bool unlink(string filename):删除文件成功返回true 失败返回false
	int fileatime(string filename) 返回文件最后一次被访问的时间 时间以UNIX时间戳的方式返回
	int filemtime(string filename) 返回文件最后依次被修改的时间，时间以UNIX时间戳的方式返回
	int filesize(string filename) 取得文件的大小 bytes
	array pathinfo(string name[,int options]) 返回一个数组 包含文件name的路径信息。 dirname basename extension 可以通过option 设置要返回的信息 有 PATHINFO_DIRNAME PATHINFO_BASENAME PATHINFO_EXTENSION
	string realpath(string filename) 返回文件的绝对路径
	array stat(string filename) 返回一个数组，包含文件的相关信息 文件大小 最后修改时间等
///
打开目录：
	resource opendir(string path) path是一个合法的目录路径 返回目录指针 如错误将返回false 并产生E_warning级别错误 可在 opendir() 加上@符号来抑制错误信息的输出
关闭目录：
	void closedir(resourse handle) 
	is_dir()判断当前路径是否为一个合法的目录合法返回true 返回false
浏览目录：
	array scandir(string directory[,int sorting_order]) 该函数返回一个数组包含directory中的所有文件和目录。参数sorting_order指定排序顺序 ， 默认按字母升序排序 如果添加了该参数 则变为降序排序
///
操作目录：
	bool mkdir(string pathname) ：新建一个指定的目录
	bool rmdir(string dirname) :删除所指定的目录，该目录为空
	string geycwd(void)：取得当前工作的目录
	bool chdir(string directory) 改变当前工作的目录为directory
	float disk_free_space(sting directoy)：返回目录中的可用空间(bytes).被检查的文件必须通过服务器的文件系统访问
	float disk_total_space(string directory)：返回目录的总空间大小(bytes) 
	string readdir(resource handle):返回目录中下一个文件的文件名(使用此函数时,目录必须是使用(opendir()函数打开的) )
	void rewinddir(resource handle):将指定的目录重新指定到目录的开头
///
文件高级处理
	远程文件的访问：	example：fopen('http://127.0.0.1/tm/sl/index,php','rb')
	文件指针：
		bool rewind(resource handle):设置文件handle的指针设为文件流的开头
		int fseek(resource handle,int offset[, int whence]): handle 为要打开的文件 offset 指针位置相对whence的偏移量，可以是负值 whence的值SEEK_SET offset字节 SEEK_CUR 当前位置加上offset字节 SEEK_END 文件尾加上offset字节 实现文件指针重定位
		bool feof(resource handle)：判断文件指针是否在文件尾 如果是返回TRUE
		int ftell(resource handle):返回当前文件指针位置
	锁定文件
		bool flock(int handle,int operation):向一个文件写入内容时,首先先锁定该文件
			operation:
			LOCK_SH:取得共享锁定(读取程序)
			LOCK_EX：取得独占锁定(写入程序)
			LOCK_UN:释放锁定
			LOCK_NB:防止FLOCK()在锁定时堵塞
///
文件上传
	配置php.ini
		File Uploads项
			file_uplaods:on 支持文件上传
			upload_tmp_dir：上传文件临时目录,文件在成功上传之前,存储在服务器端的临时目录中。
			upload_max_filesize:服务器允许上传的文件的最大值(Mb) defaul 2mb

			max_execution_time: PHP中一个指令所能执行的最大时间，单位时秒
			memory_limit:PHP中一个指令所分配的内存空间，单位是MB
	///
		$_FILES
			$_FILES[filename][name] : 存储了上传文件的文件的文件名
			$_FILES[filename][size] : 存储文件大小，单位为字节
			$_FILES[filename][tmp_name] :文件上传时，首先在临时目录中被保存成一个临时文件。该变量为临时文件名
			$_FILES[filename][type] :上传文件的类型
			$_FILES[filename][error] :存储了上传文件的结果，如果返回结果0，说明文件上传成功.
	///
		bool move_uploaded_file(string filename,string destination) ： 上传文件到指定的位置 成功返回TRUE filename 上传文件的临时文件名, destination 是上传后保存的新的路劲和名称
	//TODO：266
///
OOP:
	调用在类中的成员变量 不使用$ 关键字：public private protected static final
	类常量：const	 常量不需要实例化对象 直接由 类名::常量名 调用

	构造方法: void __construct([mixed args[....]])
	析构方法: void __destruct(void)
	继承： class subClass extends superClass{
				#code
			}
	get_class()函数是返回所属类的名称
///
被 final 类修饰过的类不可以再被继承，也不能再有子类
abstract 抽象类 不能被实例化 只能作为其他类的父类 抽象类的方法后有分号
	//TODO 289
////
接口：
interaface InterfaceName{
	function interfaceName1();
	function interfaceName2();
}
sunclass：
	class SubClass implements InterfaceName1 ,interfaceName2{
		function interfaceName1(){
			#code
		}
		function interfaceName2(){
			#code
		}

	}
///
对象值传递： 
	&引用
	clone
	$book2 = clone $book1;
	__clone:在克隆的过程中，使克隆出来的对象保持自己的一些行为和属性
///
对象比较：
	两个对象之间比较：
		== 比较对象的内容
		===比较对象的引用地址
///