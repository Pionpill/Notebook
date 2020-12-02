<link rel=stylesheet href=style.css>
<h1> 基础语法 </h1>
<h2> 0 前言 </h2>
<h3> 0.1 语法特性 </h3>

> 中文参考<a href=https://www.runoob.com/sql/sql-syntax.html> 菜鸟教程 </a>

<h4> 语法特性 </h4>

  - 语句：分号是在数据库系统中分隔每条 SQL 语句的标准方法
  - 大小写：SQL 对大小写不敏感：SELECT 与 select 是相同的

<h2> 1 重要命令 </h2>
<h3> 1.1 SELECT 提取数据 </h3>

> 中文参考 <a href=https://www.runoob.com/sql/sql-select.html> 菜鸟教程select </a>　<a href=https://www.runoob.com/sql/sql-distinct.html> 菜鸟教程select distinct </a>

<h4> 作用 </h4>

  - SELECT 语句用于从数据库中选取数据
  - 结果被存储在一个结果表中，称为结果集

<h4> 语法 </h4>

  - select 选择
    ```SQL
    SELECT column_name,column_name FROM table_name;
    SELECT * FROM table_name;
    -- 实例 --
    SELECT name,country FROM Websites;
    ```
  - select distinct 选择不同的值
    ```SQL
    SELECT DISTINCT column_name,column_name FROM table_name;
    -- 实例 --
    SELECT DISTINCT country FROM Websites;
    ```

<h3> 1.2 WHERE 子句  </h3>

> 中文参考 <a href=https://www.runoob.com/sql/sql-where.html> 菜鸟教程 </a>

<h4> 作用 </h4>

  - WHERE 子句用于过滤记录

<h4> 语法 </h4>

  - where 过滤
    ```SQL
    SELECT column_name,column_name FROM table_name
    WHERE column_name operator value;
    -- 实例 --
    SELECT * FROM Websites WHERE country='CN';
    -- 文本字段使用 '' 数值字段不需要
    ```
  - where 中的运算符
    | 运算符  | 描述                       |
    | ------- | -------------------------- |
    | =       | 等于                       |
    | <>      | 不等于，一些版本也用!=     |
    | >       | 大于                       |
    | <       | 小于                       |
    | >=      | 大于等于                   |
    | <=      | 小于等于                   |
    | BETWEEN | 在某个范围内               |
    | LIKE    | 搜索某种模式               |
    | IN      | 指定针对某个列的多个可能值 |
  - AND OR 与/或
    ```SQL
    SELECT * FROM Websites WHERE country='CN' AND alexa > 50;      --AND 与运算
    SELECT * FROM Websites WHERE country='USA' OR country='CN';    --OR 或运算
    SELECT * FROM Websites WHERE alexa > 15 AND (country='CN' OR country='USA');  --复合运算
    ```

<h3> 1.3 ORDER BY 关键字  </h3>

> 中文参考 <a href=https://www.runoob.com/sql/sql-orderby.html> 菜鸟教程 </a>

<h4> 作用 </h4>

  - 用于对结果集按照一个列或者多个列进行排序
  - ORDER BY 关键字默认按照升序对记录进行排序
  - 如果需要按照降序对记录进行排序，可以使用 DESC 关键字

<h4> 语法 </h4>

  - order by 关键字
    ```SQL
    SELECT column_name,column_name FROM table_name ORDER BY column_name,column_name ASC|DESC;
    -- 示例 --
    SELECT * FROM Websites ORDER BY alexa;
    -- 多列 --
    SELECT * FROM Websites ORDER BY country,alexa;
    ```
  - desc 关键字
    ```SQL
    SELECT * FROM Websites ORDER BY alexa DESC;
    ```

<h3> 1.4 INSERT INTO 关键字  </h3>

> 中文参考 <a href=https://www.runoob.com/sql/sql-insert.html> 菜鸟教程 </a>

<h4> 作用 </h4>

  - INSERT INTO 语句用于向表中插入新记录

<h4> 语法 </h4>

  - inset into 命令
    ```SQL
    -- 无指定列名 --
    INSERT INTO table_name 
    VALUES (value1,value2,value3,...);
    -- 指定列名 --
    INSERT INTO table_name (column1,column2,column3,...)
    VALUES (value1,value2,value3,...);
    -- 举例 --
    INSERT INTO Websites (name, url, alexa, country)
    VALUES ('百度','https://www.baidu.com/','4','CN');
    ```