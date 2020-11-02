<link rel='stylesheet' href="style.css">

<h1> Markdown 画图 </h1>

> 参考文献
> - 放羊郎 [markdown 中流程图详解](https://blog.csdn.net/suoxd123/article/details/84992282)

<h2> Mermaid 流程图 </h2>
<h3> 示例 </h3>

- 示例如下
    ```mermaid
	graph TB
	A[Apple]-->B{Boy}
	A---C(Cat)
	B.->D((Dog))
	C==喵==>D
	style A fill:#2ff,fill-opacity:0.1,stroke:#faa,stroke-width:4px
	style D stroke:#000,stroke-width:8px;
	```

<h3> 基本语法 </h3>

- 基本结构
  ```code
	graph 方向
	节点以及节点连线（定义和连线步骤可以分开）
	样式调整
  ```

<h3> 显示方向 </h3>

- 方向列表

	| 缩写  | 全称                | 意义     |
	| ----- | ------------------- | -------- |
	| TB/TD | top bottom/top down | 从上到下 |
	| BT    | bottom top          | 从下到上 |
	| RL    | right left          | 从右到左 |
	| LR    | left right          | 从左到右 |
	|       |                     |          |

<h3> 节点类型 </h3>

- 节点本身的展现形式，是通过不同括号来代表各自不同的形状，默认为矩形。
- 节点类型表  

	| 标识符 | 节点名         |
	| :----: | -------------- |
	|   -    | 默认节点(矩形) |
	|   []   | 矩形           |
	|   ()   | 圆角矩形       |
	|  (())  | 圆形           |
	|   >]   | 非对称节点     |
	|   {}   | 菱形           |

	```mermaid
	graph TB
	A-->B[B]
	C(C)-->D((D))
	E>E]-->F{F}
	```

<h4>  </h4>