这是markdown学习笔记
====

标题格式：  
====
first 一级标题
====
second 二级标题
----
# 一级标题
## 二级标题
### 三级标题
#### 四级标题
##### 五级标题
###### 六级标题


段落格式：
=====
换行：
---
### 两个空格换行  
### 换行

### 中间空行

字体
---
*斜体文本*  
_斜体文本_  
**粗体文本**  
__粗体文本__  
***粗斜体文本***  
___粗斜体文本___

分割线
---
***
* * *
*****
- - -
--------

删除线/下划线
---
~~删除~~  
<u>下划</u>

脚注
---
啊吧啊吧 [^RUNOOB]: 脚注 ???

列表
===
* 第一项
* 第二项
* 第三项
+ 第一项
+ 第二项
+ 第三项
- 第一项
- 第二项
- 第三项

1. 第一项
2. 第二项
3. 第三项
   
* 第一项
  * 第二项
    * 第三项
      * 第四项

区块
===
>第一区块  
>第二区块  
>第三区块  

>first area
>>second area
>>>third area  
>>
>
>how to end???
>>a new begin 
> 
>abab

+ 试试套用
    > ababa  
    > ababa
+ 中止套用

代码
===
片段代码  
`printf()` 函数

区块代码  
```c++
int main(){  
    int a=1;  
    return 0;  
}
```

链接
===
>一般链接：  
>
这是教程的链接 [菜鸟教程](https://www.runoob.com/markdown/md-link.html)  
>直接连接：  

<https://www.runoob.com/markdown/md-link.html>  
>高级链接：   

[教程链接] [link](https://www.runoob.com/markdown/md-link.html)

图片  
===
![TRY 图片](图片地址 "可选标题")

表格
===  
|  表头   |  表头  |
| :-----: | :----: |
| 单元格1 | 单元格 |
| 单元格  | 单元格 |

| +++ | +++ |
| --- | --- |
| 123 | 123 |

高级操作
===
转义  
\*  
公式  
$$
x^2+y^2=1 \\  
$$


Html用法
===
example
---
<font size="3" color="red">This is some text!</font>  
<font face="verdana" color="green"  size="3">This is some text!</font>  
[详细语法](./detail_control.md)

color
---
><font color="wheat"> wheat color </font>  
<font color=#FF69B4> detail color </font>

font face
---
><font face="黑体"> BLACK </font>

font size
---
><font color="wheat"> <small> smaller </font> </small> than comman size  
<font color="wheat"> <big> bigger </font> </big> than comman size  
size control: <font size=5> 5 size </font>

background color
---
><span style="background-color:navy">the background color is navy </span>  
<span style="background-color:#D3D3D3"><font color=black> detail control on background color </font> </span>

sub&sup
---
>上标：x<sub>1</sub>  
 下标：x<sup>2</sup>

lineation
---
><span style="text-decoration: overline;">  上划线  </span>

special character
---
>eg: &iquest;  
[详细语法](./detail_control.md)

other
===
>full wide space (shift+space) : 1　　　　1   
<br>
    more than one newline  
    1
    <br>
    <br>
    <br>
    1
- [x] 1001