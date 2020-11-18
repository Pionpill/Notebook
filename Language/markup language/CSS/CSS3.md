<link rel="stylesheet" href="style.css">

<h1> 变换 </h1>
<h2> transform 位置变换 </h2>

参考文章[w3school](https://www.w3school.com.cn/css3/css3_2dtransform.asp)

- <span class="main-title"> transform: translate 位移 </span>
  - 格式:<span class=format> transform: translate(x,y) </span>
  - css举例
    ```css
        div{
            transform: translate(50px,100px);
        }
    ```

- <span class="main-title"> transform: rotate 旋转 </span>
  - 格式:<span class=format> transform: rotate(deg) </span>
  - css举例
    ```css
        div{
            transform: rotate(30deg);
        }
    ```
- <span class="main-title"> transform: scale 缩放 </span>
  - 格式:<span class=format> transform: scale(x,y) </span>
  - css举例
    ```css
        div{
            transform: scale(2,4);  /*宽度两倍，高度四倍*/
        }
    ```
- <span class="main-title"> transform: skew 扭曲 </span>
  - 格式:<span class=format> transform: skew(xdeg,ydeg) </span>
  - css举例
    ```css
        div{
            transform: skew(30deg,20deg);  /*X轴翻转30度，Y轴翻转20度*/
        }
    ```
- <span class="main-title"> transform: matrix 矩阵 </span>
  - 格式:<span class=format> transform: matrix(a,b,c,d,e,f) </span>
  - 参考文章: [CSDN](https://blog.csdn.net/alex1504/article/details/90301018)
  - css举例
    ```css
        div{
            transform: matrix(30deg,20deg);  /*X轴翻转30度，Y轴翻转20度*/
        }
    ```
- <span class="main-title"> 备注 </span>
  - transform的translate，scale，rotate可以通过加上X,Y,Z单独改变某一坐标值

<h2> transform-origin 设置基点</h2>

- <span class="main-title"> transform-origin 设置元素基点位置 </span>
  - 格式:<span class=format> transform-origin(x-axis y-axis z-axis) </span>
  - 详细描述：
    | 属性值 |                描述                |
    | :----: | :--------------------------------: |
    | x-axis | left / center / right / length / % |
    | y-axis | left / center / right / length / % |
    | z-axis |               length               |
    |        |                                    |
  - css举例
    ```css
        div{
            transform: matrix(30deg,20deg);  /*X轴翻转30度，Y轴翻转20度*/
        }
    ```

<h1> 过渡 </h1>
<h2> transition 过渡属性 </h2>

- <span class="main-title">transition </span>
  - 格式: <span class=format> animation: vaule; </span>
  - 描述: 所有过渡属性的简写属性

- <span class="main-title"> transition-property 过渡属性 </span>
  - 格式:<span class=format> transition-property：vaule </span>
  - 详细描述：
    |  属性值  |                        描述                         |
    | :------: | :-------------------------------------------------: |
    |   none   |               没有属性会获得过渡效果                |
    |   all    |              所有属性都将获得过渡效果               |
    | property | 定义应用过渡效果的 CSS 属性名称列表，列表以逗号分隔 |
    |          |                                                     |
  - css举例
    ```css
      div{
        transition-property:width;
      }
    ```

- <span class="main-title"> transition-duration 过渡时间 </span>
  - 格式:<span class=format> transition-duration：time </span>
  - css举例
    ```css
      div{
        transition-duration: 5s;
      }
    ```

- <span class="main-title"> transition-timing-function 时间曲线 </span>
  - 格式:<span class=format> transition-timing-function：vaule </span>
  - 参考文章：[CSDN](https://blog.csdn.net/line233/article/details/90200300)
  - 详细描述：
    |        属性值         |                                     描述                                      |
    | :-------------------: | :---------------------------------------------------------------------------: |
    |        linear         |       规定以相同速度开始至结束的过渡效果（等于 cubic-bezier(0,0,1,1)）        |
    |         ease          | 规定慢速开始，然后变快，然后慢速结束的过渡效果（cubic-bezier(0.25,0.1,0.25,1) |
    |        ease-in        |           规定以慢速开始的过渡效果（等于 cubic-bezier(0.42,0,1,1)）           |
    |       ease-out        |           规定以慢速结束的过渡效果（等于 cubic-bezier(0,0,0.58,1)）           |
    |      ease-in-out      |      规定以慢速开始和结束的过渡效果（等于 cubic-bezier(0.42,0,0.58,1)）       |
    | cubic-bezier(n,n,n,n) |       在 cubic-bezier 函数中定义自己的值。可能的值是 0 至 1 之间的数值        |
    |                       |                                                                               |
  - css举例
    ```css
      div{
        transition-property:width;
      }
    ```

- <span class="main-title">transition-delay 延缓时间 </span>
  - 格式:<span class=format> transition-delay: time </span>
  - css举例
    ```css
      div{
        transition-delay: 1s;  /*一秒后开始过渡效果*/
      }
    ```

<h1> 动画 </h1>
<h2> @keyframes 规则 </h2>

- <span class="main-title">@keyframes 创建动画 </span>
  - 格式:<span class=format> @keyframes name{ } </span>
  - css举例
    ```css
      @keyframes myfirst{
        from {background: red;}
        to {background: yellow;}
      }

      @keyframes mysecond{
        0%   {background: red;}
        25%  {background: yellow;}
        50%  {background: blue;}
        100% {background: green;}
      }
    ```

- <span class="main-title">绑定选择器 </span>
  - 格式:<span class=format> animation: name time; </span>
  - css举例
    ```css
      div{
        animation: myfirst 5s;
      }
    ```

<h2> animation: 动画属性 </h2>

- <span class="main-title">animation </span>
  - 格式: <span class=format> animation: vaule; </span>
  - 参考文章：[W3school](https://www.w3school.com.cn/css3/css3_animation.asp)
  - 描述: 所有动画属性的简写属性，除了 animation-play-state
  - 详细描述：
    |          属性值           |                 描述                 |
    | :-----------------------: | :----------------------------------: |
    |      animation-name       |      规定 @keyframes 动画的名称      |
    |    animation-duration     | 规定动画完成一个周期所花费的秒或毫秒 |
    | animation-timing-function |  规定动画的速度曲线。默认是 "ease"   |
    |      animation-delay      |           规定动画何时开始           |
    | animation-iteration-count |    规定动画被播放的次数。默认是 1    |
    |    animation-direction    |   规定动画是否在下一周期逆向地播放   |
    |   animation-play-state    |      规定动画是否正在运行或暂停      |
    |    animation-fill-mode    |      规定对象动画时间之外的状态      |
    |                           |                                      |
  - css举例
    ```css
      div{
        animation-name: myfirst;
        animation-duration: 5s;
        animation-timing-function: linear;
        animation-delay: 2s;
        animation-iteration-count: infinite;
        animation-direction: alternate;
        animation-play-state: running;
      }
    ```

<h1> 多列 </h1>
<h2> column 多列 </h2>

- <span class="main-title">column-count 创建多列 </span>
  - 格式:<span class=format> column-count: number; </span>
  - css举例
    ```css
      div{
        column-count:3;
      }
    ```

- <span class="main-title">column-gap 多列间隔 </span>
  - 格式:<span class=format> column-gap:vaule; </span>
  - css举例
    ```css
      div{
        column-gap:40px;
      }
    ```

- <span class="main-title">column-rule 多列规则 </span>
  - 格式:<span class=format> column-rule:width style color; </span>
  - 说明：设置列之间的宽度、样式和颜色规则
  - css举例
    ```css
      div{
        column-rule:3px outset #ff0000;
      }
    ```

- <span class="main-title">新的多列属性 </span>
  - 详细描述：
    |      属性值       |                       描述                       |
    | :---------------: | :----------------------------------------------: |
    |   column-count    |             规定元素应该被分隔的列数             |
    |    column-fill    |                  规定如何填充列                  |
    |    column-gap     |                 规定列之间的间隔                 |
    |    column-rule    |      设置所有 column-rule-* 属性的简写属性       |
    | column-rule-color |               规定列之间规则的颜色               |
    | column-rule-style |               规定列之间规则的样式               |
    | column-rule-width |               规定列之间规则的宽度               |
    |    column-span    |              规定元素应该横跨的列数              |
    |   column-width    |                   规定列的宽度                   |
    |      columns      | 规定设置 column-width 和 column-count 的简写属性 |
    |                   |                                                  |
  
<h1> 用户界面 </h1>
<h2> 主要属性 </h2>

- <span class="main-title">resize 调整元素尺寸 </span>
  - 格式:<span class=format> resize:vaule </span>
  - css举例
    ```css
      div{
        resize:both;
      }
    ```

- <span class="main-title">box-sizing 适应内容 </span>
  - 格式:<span class=format> box-sizing:vaule </span>
  - css举例
    ```css
      div{
        box-sizing:border-box;
      }
    ```

- <span class="main-title">outline-offset 轮廓偏移</span>
  - 格式:<span class=format> outline-offset:vaule </span>
  - css举例
    ```css
      div{
        outline-offset:15px;
      }
    ```

- <span class="main-title">新的多列属性 </span>
  - 详细描述：
    |     属性值     |                       描述                       |
    | :------------: | :----------------------------------------------: |
    |   appearance   |        将元素设置为标准用户界面元素的外观        |
    |   box-sizing   |      以确切的方式定义适应某个区域的具体内容      |
    |      icon      | 为创作者提供使用图标化等价物来设置元素样式的能力 |
    |    nav-down    |     规定在使用 arrow-down 导航键时向何处导航     |
    |   nav-index    |            设置元素的 tab 键控制次序             |
    |    nav-left    |     规定在使用 arrow-left 导航键时向何处导航     |
    |   nav-right    |    规定在使用 arrow-right 导航键时向何处导航     |
    |     nav-up     |      规定在使用 arrow-up 导航键时向何处导航      |
    | outline-offset |  对轮廓进行偏移，并在超出边框边缘的位置绘制轮廓  |
    |     resize     |       规定是否可由用户对元素的尺寸进行调整       |
    |                |                                                  |