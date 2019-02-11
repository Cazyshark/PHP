创建数据库
	create database 数据库名;
		创建数据库注意一下规则：
			1.不能与其他数据库重名
			2.名称可以是数字，字母，下划线，美元符号$构成，数字不能开头。
			3.名称最长是64个字符(还包括表，列和索引的命名)，别名最多可长达256个字符.
			4.不能使用mysql关键字作为数据库，表名.
			5.win下数据库名，表名，大小写不敏感 linux下敏感
			创建数据库保存位置：x：/bin/mysql/mysql5.6.17/data 目录下创建db_user数据库文件夹和相关文件实现对数据库的文件管理 存储目录配置 mysql下 my.ini配置文件中datadir来对存储目录经行重新设置
///
数据类型
	mysql支持所有的ANSI/ISO SQL 92数据类型，
				准确数字的数据类型(NUMERLL,DECIMAL,INTEGER, SMALLINT)
				近数字类型(FLOAT,REAL,DOUBLE PRECISION)
				//TODO 		315
	数字类型：
		TINYINT -127~127 0~255
		BIT -127~127 0~255
		BOOL -127~127 0~255 
		SMALLINT -32768~32767 0~65535
		MEDIUMINT -8388608~8388607 0~16777215
		INT -2147483648~2147483647 0~4294967285
		BIGINT -9223372036854775808~9223372036854775807 0~18446744073709551615

		FLOAT +-3.402823466e+38 单精度浮点 8或4字节
		DOUBLE +-1.7976931348623157e+308 双精度浮点 8
		DECIMAL 可变 自定义长度
	//
	字符串 普通文本字符串 / 可变类型 / 特殊类型

	普通文本字符串 [national]char(M)[binary|ASCI|unicode] :M为长度 0~255 national制定了应该使用的默认字符集 binary关键字指定是否区分大小写 ASCII制定类是否用latinl字符集，unicode指定了是否使用UCS字符集
				  char 0~255
				  [national]varchar(M)[binary] 0~255 长度可变 其余和char(M)类似
	可变类型(TEXT存储长文本/BLOB适合存储二进制数据，支持任何数据)
				  TINYBLOB 2^8-1  : 小blob
				  TINYTEXT 2^8-1  : 小TEXT
				  BLOB     2^16-1 : 常规blob
				  TEXT     2^16-1 : 常规text
				  MEDIUMBLOB 2^24-1(16777215) :中型BLOB
				  MEDIUMTEXT 2^24-1(16777215) :中型TEXT
				  LONGBLOB   2^32-1(4294967295) :长BLOB字段
				  LONGTEXT   2^32-1(4294967295) :长TEXT字段

	特殊类型 SET/ENUM
				  Enum("value1","value2",……) 65535 该类型的列只可以容纳所列值之一或NULL
				  Set("value1"，"value2",……) 64 该类型的列可以容纳一组值或为NULL
	notiction:
		1>.从速度方面考虑，要选择1固定的列，可以使用CHAR类型
		2>.要节省空间，使用动态的列，可以使用VARCHAR类型
		3>.要将列中的内容限制在一种选择，可以使用ENUM类型
		4>.允许子啊一个列中有多于一个的条目。可以使用SET类型
		5>.如果要搜索的内容不区分大小写，可以使用TEXT类型
		6>.如果要搜索的内容区分大小写，可以使用BLOB类型
////
	日期和时间类型 (标准ANSI SQL)
		DATE 1000-01-01~9999-12-31
		TIME -838:85:59-835:59:59
		DATETIME 1000-01-01 00:00:00~9999-12-31 23:59:59
		TIMESTAMP 1970-01-01 00:00:00 2037-1-19 03:14:59
		YEAR  1901~2155
////
	操作数据表
		create[TEMPORARY]table[IF NOT EXISTS]数据表名
		[(create_definition……)][table_options][select_statement] 
			TEMPORARY:如果使用该关键字，表示创建一个临时表
			IF NOT EXISTS:该关键字用于避免表存在时MySQL报告错误
			create_definition：这是表的列属性部分.MySQL要求在创建表时，表至少包含一个列
			table_options：表的一些特征参数
			select_statement:SElECT语句的描述部分，用它可以快速地创建表

		create_definition的使用方法：
			col_name type[NOT NULL|NULL][DEFAULT default_value][AUTO_INCREMENT][PRIMARY KEY][reference_defintion]：
					col_name:字段名
					type：字段属性
					NOT NULL|NULL:指出该列是否允许空值 
					DEFAULT default_value ：默认值
					AUTO_INCREMENT:表示是否为自动编号 ，每个表只能由一个AUTO_INCREMENT列,并且必须被索引
					PRIMARY KEY:表示是否为主键。一个表只能有一个PRIMARY KEY。如果表中没有一个PRIMARY KEY,而某些应用程序要求PRIMARY KEY,MySQL将返回第一个没有NULL列得UNIQUE健，作为PRIMARY KEY
					reference_defintion:为字段加注释
		


