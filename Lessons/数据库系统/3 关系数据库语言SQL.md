<link rel=stylesheet href=style.css>
<h1> 关系数据库语言 </h1>
<h2> 1 SQL 概述 </h2>
<h3> 1.1 SQL 基本概念 </h3>
<h4> SQL 三级模式 </h4>

  - SQL 语言支持数据库的三级模式 <br>
    ```plantuml
    card SQL用户 as user
    card 视图1 as view1
    card 视图2 as view2
    card 基本表1 as table1
    card 基本表2 as table2
    card 基本表3 as table3
    card 基本表4 as table4
    card 存储文件1 as file1
    card 存储文件2 as file2
    user <-down-> view1
    user <-down-> view2
    user <--down-> table1
    view1 <-down-> table2
    view2 <-down-> table3
    view2 <-down-> table4
    table1 <-down-> file1
    table2 <-down-> file1
    table3 <-down-> file1
    table4 <-down-> file2
    ```
  - 三级模式
    - 外模式：视图：虚表，无实体，只存在定义
    - 模式：基本表
    - 内模式：存储文件

<h4> 索引 </h4>

  - 物理顺序：按其输入的时间顺序存放
  - 逻辑顺序：对表文件中的记录按某个和某些属性进行排序
  - 索引即是根据索引表达式的值进行逻辑排序的一组指针，它可以实现对数据的快速访问。
  - 索引属于`内模式`，存储在文件中

<h3> 1.2 SQL 语句的组成 </h3>
<h4> 数据定义 </h4>

  - 数据定义语言DDL（Data Definition Language）。定义数据库结构，包括定义表、视图和索引等。
    - 数据定义。其功能是创建、更新和撤销模式及其对象。包含的语句动词主要有：`CREATE、DROP、ALERT`。
  - 数据操纵语言DML（Data Manipulation Language）。主要包括查询、插入、删除和修改数据库中数据的操作。
    - 数据查询。其功能是进行数据库的数据查询。包含的语句动词主要有：`SELECT`。
    - 数据操纵。其功能是完成数据库的数据更新。包含的语句动词主要有：`INSERT、UPDATE、DELETE`。
  - 数据控制语言DCL（Data Control Language）。包括对数据库的安全性控制、完整性控制以及对事务的定义、并发控制和恢复等。 
    - 数据控制。其功能是进行数据库的授权、事务管理和控制。包含的语句动词主要有：`GRANT、REVOKE、COMMIT、ROLLBAC`K等。

<h2> 2 SQL语言的数据类型 </h2>
<h3> 2.1 基本数据类型 </h3>
<h4> 数值型 </h4>

  - 整型：bigint、int、smallint、tinyint、bit
  - 定点实数：numericdecimal
  - 浮点数：float、real
  - bit 相当于逻辑数据，0为0，其他为1

<h4> 字符型 </h4>

  - 字符型用于存储字符串，包括字母，数字，特殊字符，中文
  - char: 定长字符
  - varchar: 变长字符

<h4> Unicode 字符型 </h4>

  - Unicode字符型包括nchar[(n)]和nvarchar[(n)]两类。
  - 不同于 char 和 varchar 使用 ASCII 字符集

<h4> 文本型 </h4>

  - 文本型包括 text 和 ntext 两类

<h4> 日期型 </h4>

  - 包括 datetime 和 smalldatetime
    - datetime：1753-1-1 ~ 9999-12-31
    - smalldatetime：1900-1-1 ~ 2079-6-6
  - 常用日期格式
    - Oct 10 2009
    - 2009-10-10
    - 20091010

<h4> 二进制型 </h4>

  - binary[(n)] 固定长度的n字节二进制数据。n取值范围为 1～8000，默认为1。
    - binary(n)数据的存储长度为 n+4 字节。若输入的数据长度小于n，则不足部分用0填充；若输入的数据长度大于n，则多余部分被截断。
  - varbinary[(n)] n字节变长二进制数据。n取值范围为 1～8000，默认为1。
    - varbinary(n)数据的存储长度为实际输入数据长度+4字节。
  - image 用于存储大容量的、可变长度的二进制数据，介于0～2311 (2147483647)字节之间。  

<h4> 货币类型 </h4>

  - money和smallmoney是两个专用于货币的数据类型，它们用十进制数表示货币值。
  - money的数据范围与bigint相同，不同的只是money型有4位小数。实际上，money型数据就是按照整数进行运算的，只是将小数点固定在末4位。smallmoney与int的关系就如同money与bigint的关系一样。
  - 当向表中插入money或smallmoney类型值时，必须在数据前面加上货币符号（\$），并且数据中间不能有逗号（,）；若货币值为负数，需要在符号$的后面加上负号（-）。例如，\$15000.32，\$680，\$-20000.9088都是正确的货币数据表示形式。

<h2> 3 数据定义 </h2>

> [SQL Server 笔记](https://github.com/Pionpill/Notes/blob/Pionpill/Language/SQL/SQLServer/syntax/1.%20%E6%93%8D%E4%BD%9C%E6%95%B0%E6%8D%AE%E5%BA%93%E5%92%8C%E6%95%B0%E6%8D%AE%E8%A1%A8.md)   
> [MySQL 笔记](https://github.com/Pionpill/Notes/blob/Pionpill/Language/SQL/MySQL/syntax/1.%20%E6%93%8D%E4%BD%9C%E6%95%B0%E6%8D%AE%E5%BA%93%E5%92%8C%E6%95%B0%E6%8D%AE%E8%A1%A8.md)