<link rel=stylesheet href=style.css>

<h1> 语法 </h1>
<h2> 1. 字符 </h2>
<h3> 1.1 一般字符 </h3>

> 普通字符，非打印字符，特殊字符，限定符，定位符

<h4> 普通字符 </h4>

  - 普通字符包括没有显式指定为元字符的所有可打印和不可打印字符。这包括所有大写和小写字母、所有数字、所有标点符号和一些其他符号
  - 匹配模式表
    | 字符       | 简述     | 详细                          |
    | ---------- | -------- | ----------------------------- |
    | **[ABC]**  | 包含     | 匹配 [ ] 中所有字符           |
    | **[^ABC]** | 排除     | 匹配除了 [ ] 中字符的所有字符 |
    | **[A-Z]**  | 范围     | 匹配范围内所有字符            |
    | **[\s]**   | 空白符   | 匹配空格，换行，换页符        |
    | **[\S]**   | 非空白符 | 匹配非空白符                  |
    | **.**      | 非换行符 | 匹配\n,\r之外的任何单个字符   |
    | **\w**     | 常用符   | 匹配字母 数字 下划线          |

<h4> 非打印字符 </h4>

  - 非打印字符转义序列
    | 字符    | 描述                                                       |
    | ------- | ---------------------------------------------------------- |
    | **\cx** | 匹配由x指明的控制字符。例：\cM 匹配一个 Control-M 或回车符 |
    | **\f**  | 匹配一个换页符                                             |
    | **\n**  | 匹配一个换行符                                             |
    | **\r**  | 匹配一个回车符                                             |
    | **\s**  | 匹配任何空白字符，等价于 [\f\n\r\t\v]                      |
    | **\S**  | 匹配任何非空白字符                                         |
    | **\t**  | 匹配一个制表符                                             |
    | **\v**  | 匹配一个垂直制表符                                         |

<h4> 特殊字符 </h4>

  - 特殊字符表
    | 特殊字符 | 描述                                                                                           |
    | :------: | ---------------------------------------------------------------------------------------------- |
    |  **$**   | 匹配输入字符串的结尾位置                                                                       |
    | **( )**  | 标记一个子表达式的开始和结束位置                                                               |
    |  **\***  | 匹配前面的子表达式零次或多次                                                                   |
    |  **+**   | 匹配前面的子表达式一次或多次                                                                   |
    |  **.**   | 匹配除换行符 \n 之外的任何单字符                                                               |
    |  **[**   | 标记一个中括号表达式的开始                                                                     |
    |  **?**   | 匹配前面的子表达式零次或一次，或指明一个非贪婪限定符                                           |
    |  **\\**  | 将下一个字符标记为或特殊字符、或原义字符、向后引用、八进制转义符                               |
    |  **^**   | 匹配输入字符串的开始位置，除非在方括号表达式中使用，<br>当该符号在方括号表达式中使用时，表示非 |
    |  **{**   | 标记限定符表达式的开始                                                                         |
    |  **\|**  | 指明两项之间的一个选择，或者                                                                   |
  - 可以用转义字符 \ 匹配这些特殊符号本身

<h4> 限定符 </h4>

  - 限定符用来指定正则表达式的一个给定组件必须要出现多少次才能满足匹配
    |   字符    | 描述                              |
    | :-------: | --------------------------------- |
    |  **\***   | 匹配前面的子表达式零次或多次      |
    |   **+**   | 匹配前面的子表达式一次或多次      |
    |   **?**   | 匹配前面的子表达式零次或一次      |
    |  **{n}**  | n 是一个非负整数。匹配确定的 n 次 |
    | **{n,}**  | n 是一个非负整数。至少匹配 n 次   |
    | **{n,m}** | 最少匹配 n 次且最多匹配 m 次      |

<h4> 定位符 </h4>

  - 定位符使您能够将正则表达式固定到行首或行尾
    |  字符  | 描述                                 |
    | :----: | ------------------------------------ |
    | **^**  | 匹配输入字符串开始的位置             |
    | **$**  | 匹配输入字符串结尾的位置             |
    | **\b** | 匹配一个单词边界，即字与空格间的位置 |
    | **\B** | 非单词边界匹配                       |
  - 注：不能将限定符与定位符一起使用



<h3> 1.2 修饰符(标记) </h3>

> 常用修饰符

<h4> 常用修饰符 </h4>

  - 正则表达式常用的修饰符
    | 修饰符 |    含义    |     详细     |                   描述                   |
    | :----: | :--------: | :----------: | :--------------------------------------: |
    | **i**  |   ignore   | 不区分大小写 |         将匹配设置为不区分大小写         |
    | **g**  |   global   |   全局配置   |             查找所有的匹配项             |
    | **m**  | multi line |   多行匹配   | 使边界字符 ^ 和 $ 匹配每一行的开头和结尾 |
    | **s**  | 修改 **.** |              |         使 **.** 中包含换行符 \n         |



<h3> 1.3 元字符 </h3>

> 元字符

<h4> 元字符 </h4>

  - 参考链接 [元字符](https://www.runoob.com/regexp/regexp-metachar.html)


<h2> 2 选择与引用 </h2>
<h3> 2.1 选择 </h3>

> 选择，断言

<h4> 选择 </h4>

  - 用圆括号 **()** 将所有选择项括起来，相邻的选择项之间用 **|** 分隔
  - () 表示捕获分组，() 会把每个分组里的匹配的值保存起来， 多个匹配值可以通过数字 n 来查看
  - 使用这种方法会使相关的匹配被缓存

<h4> 断言 </h4>

  - **?:** 放在第一个选项前来消除有缓存的副作用
  - 几种断言的区别
    | 字符    | 举例              | 描述                      |
    | ------- | ----------------- | ------------------------- |
    | **?=**  | **exp1(?=exp2)**  | 查找 exp2 前面的 exp1     |
    | **?<=** | **(?<=exp2)exp1** | 查找 exp2 后面的 exp1     |
    | **?!**  | **exp1(?!exp2)**  | 查找后面不是 exp2 的 exp1 |
    | **?<!** | **(?<!exp2)exp1** | 查找前面不是 exp2 的 exp1 |

<h3> 2.2 反向引用 </h3>

> 匹配缓存，反向引用

<h4> 匹配缓存 </h4>

  - 对一个正则表达式模式或部分模式两边添加圆括号将导致相关匹配存储到一个临时缓冲区中
  - 所捕获的每个子匹配都按照在正则表达式模式中从左到右出现的顺序存储
  - 缓冲区编号从 1 开始，最多可存储 99 个捕获的子表达式
  - 每个缓冲区都可以使用 **\n** 访问，其中 n 为一个标识特定缓冲区的一位或两位十进制数
  - 可以使用非捕获元字符 **?:**、**?=** 或 **?!** 来重写捕获，忽略对相关匹配的保存

<h4> 反向引用 </h4>

  - 举例1
    ```js
    var str = "Is is the cost of of gasoline going up up";
    var patt1 = /\b([a-z]+) \1\b/ig;
    document.write(str.match(patt1));
    ```
    - **\1** 指定第一个子匹配项
    - 全局标记 **g** 指定将该表达式应用到输入字符串中能够查找到的尽可能多的匹配
    - **i** 标记指定不区分大小写
  - 举例2
    ```js
    var str = "http://www.runoob.com:80/html/html-tutorial.html";
    var patt1 = /(\w+):\/\/([^/:]+)(:\d*)?([^# ]*)/;
    arr = str.match(patt1);
    for (var i = 0; i < arr.length ; i++) {
        document.write(arr[i]);
        document.write("<br>");
    }
    ```
    - 第三行代码 **str.match(patt1)** 返回一个数组，实例中的数组包含 5 个元素，索引 0 对应的是整个字符串，索引 1 对应第一个匹配符（括号内），以此类推
    - 第一个括号子表达式捕获 Web 地址的协议部分。该子表达式匹配在冒号和两个正斜杠前面的任何单词
    - 第二个括号子表达式捕获地址的域地址部分。子表达式匹配非 : 和 / 之后的一个或多个字符
    - 第三个括号子表达式捕获端口号（如果指定了的话）。该子表达式匹配冒号后面的零个或多个数字。只能重复一次该子表达式
    - 最后，第四个括号子表达式捕获 Web 地址指定的路径和 / 或页信息。该子表达式能匹配不包括 # 或空格字符的任何字符序列
    - 结果
      - 第一个括号子表达式包含 http
      - 第二个括号子表达式包含 www.runoob.com
      - 第三个括号子表达式包含 :80
      - 第四个括号子表达式包含 /html/html-tutorial.html



<h2> 3 运算符优先级 </h2>
<h3> 3.1 运算符优先级 </h3>

> 运算顺序，优先级顺序表

<h4> 运算顺序 </h4>

  - 正则表达式从左到右进行计算，并遵循优先级顺序

<h4> 优先级顺序表 </h4>

  - 优先级顺序
    |             运算符              | 描述                           |
    | :-----------------------------: | ------------------------------ |
    |             **\\**              | 转义符                         |
    |           **(), []**            | 圆括号和方括号                 |
    |  ***, +, ?, {n}, {n,}, {n,m}**  | 限定符                         |
    | **^, $, \任何元字符、任何字符** | 定位点和序列（即：位置和顺序） |
    |             **\|**              | 替换，"或"操作                 |



<h2> 4 匹配规则 </h2>
<h3> 4.1 基本模式匹配 </h3>

> 概念，举例说明

<h4> 概念 </h4>

  - 模式，是正则表达式最基本的元素，它们是一组描述字符串特征的字符
  
<h4> 举例说明 </h4>

  - 简单基本模式匹配
    ```js
    once             //与任何包含该模式的字符串匹配
    ^once            //模式只匹配那些以once开头的字符串
    bucket$          //模式只匹配那些以bucket结尾的字符串
    ^bucket$         //只匹配字符串"bucket"
    ^\t              //检测一个字符串是否以制表符开头
    ```

<h3> 4.2 字符簇 [ ] </h3>

> 概念，举例说明

<h4>概念</h4>

  - 放在一个方括号里，表示一个字符簇,只表示一个字符

<h4> 举例说明 </h4>

  - 常用字符簇
    ```js
    [a-z]            //匹配所有的小写字母 
    [A-Z]            //匹配所有的大写字母 
    [a-zA-Z]         //匹配所有的字母 
    [0-9]            //匹配所有的数字 
    [0-9\.\-]        //匹配所有的数字，句号和减号 
    [\f\r\t\n]       //匹配所有的白字符
    ```
  - 特殊用法
    ```js
    ^[^0-9][0-9]$    //第一个字符不能是数字,当方括号里使用 ^ 时，表示"非"
    [^a-z]           //除了小写字母以外的所有字符 
    [^\\\/\^]        //除了(\)(/)(^)之外的所有字符 
    ```
 

 <h3> 4.3 重复出现 { } </h3>

> 概念，举例说明

<h4>概念</h4>

  - 跟在字符或字符簇后面的花括号 **{ }** 用来确定前面的内容的重复出现的次数

<h4>举例说明</h4>
  
  - 用法举例
    ```js
    ^a{4}$          //aaaa                            
    ^a{2,4}$        // aa,aaa或aaaa                   
    ^a{2,}$         // 包含多于两个a的字符串           
    ^a{2,}          // 如：aardvark和aaab，但apple不行 
    a{2,}           // 如：baad和aaa，但Nantucket不行  
    \t{2}           // 两个制表符                      
    .{2}            // 所有的两个字符                  
    ```
  - 常见用法
    ```js
    ^[a-zA-Z0-9_]{1,}$      // 所有包含一个以上的字母、数字或下划线的字符串 
    ^[1-9][0-9]{0,}$        // 所有的正整数 
    ^\-{0,1}[0-9]{1,}$      // 所有的整数 
    ^[-]?[0-9]+\.?[0-9]+$   // 所有的浮点数
    ```



<h2> 5 相关概念 </h2>

<h3> 5.1 贪婪与非贪婪 </h3>

> 贪婪，非贪婪

<h4> 贪婪 </h4>

  - 尽可能多的匹配文字，如 **"+" "*"**
  - 举例：
    ```html
    <h1>RUNOOB-菜鸟教程</h1>
    /<.*>/
    <h1> contant </h1>  <!--将匹配整个字符串-->
    ```

<h4> 非贪婪 </h4>

  - 尽可能少的匹配文字，利用 **"?"**
  - 举例：
    ```html
    <h1>RUNOOB-菜鸟教程</h1>
    /<.*?>/
    <h1> contant </h1>  <!--将匹配<h1>-->
    ```