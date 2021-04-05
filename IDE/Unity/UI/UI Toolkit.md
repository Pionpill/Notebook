<link rel=stylesheet href="style.css">

<h1> UI Toolkit </h1>
<h2> 1 Introduction </h2>
<h3> 1.1 Basic Usage </h3>

> <a link="https://docs.unity.cn/cn/2020.1/Manual/UITK-package.html"> Unity Doc：UI Toolkit </a>
<h4> version </h4>

  - To create Editor-only user interfaces, use the built-in version of UI Toolkit that ships with Unity.
  - To create runtime user interfaces for games and applications, or a mix of runtime and Editor interfaces, install the UI Toolkit package.

<h4> namespace </h4>

  - both version use the same namespace
    - ```UnityEditor.UIElements```
    - ```UnityEngine.UIElements```

<h4> install </h4>

  - Add+  &rarr; Add package from git UEL... &rarr; type ```com.unity.ui``` &rarr; Add

<h2> 2 Virtual Tree </h2>
<h3> 2.1 VisualElement </h3>

> <a link="https://docs.unity.cn/cn/2020.1/Manual/UIE-VisualTree.html"> Unity Doc：Virtual Tree</a>

  - VisualElement 是视觉树中所有节点的公共基类
  - VisualElement 基类包含样式、布局数据、本地变换、事件处理程序等的属性

<h3> 2.2 位置、变换和坐标系 </h3>

<a link="https://docs.unity.cn/cn/2020.1/ScriptReference/Transform.html"> Unity Doc：API</a>

<h4> 坐标系 </h4>

  - 世界坐标系：相对于面板空间
  - 局部坐标系：坐标相对于元素本身

<h4> 位置属性 </h4>

  - 布局系统会计算每个元素 ```VisualElement.layout``` 属性（Rect 类型）
    - ```layout.position``` 定义布局引擎如何解释位置值
    - ```layout.transform``` 世界坐标系
  - VisualElementExtensions 静态类提供了以下扩展方法在坐标系之间转换点和矩形：
    - WorldToLocal 将 Vector2 或 Rect 从 Panel 空间转换为元素内的参照
    - LocalToWorld 将 Vector2 或 Rect 转换为 Panel 空间参照
    - ChangeCoordinatesTo 将 Vector2 或 Rect 从一个元素的局部空间转换为另一个元素的局部空间

<h2> 3 Layout Engine </h2>
<h3> 3.1 布局引擎 </h3>

> <a link="https://docs.unity.cn/cn/2020.1/Manual/UIE-LayoutEngine.html"> Unity Doc：Layout Engine</a>

<h4> 视觉元素 </h4>

  - 默认情况下，所有视觉元素都是布局的一部分。布局具有以下默认行为
    - 容器垂直分配其子项
    - 容器矩形的位置包括其子矩形。其他布局属性可能限制此行为
    - 带文本的视觉元素在其大小计算中使用文本大小。其他布局属性可能限制此行为
  - 有关如何使用布局引擎的技巧
    - 设置 width 和 height 来定义元素的大小
    - 使用 flexGrow 属性（USS 格式为：flex-grow: <value>;）为元素分配灵活的大小。当元素的大小由其同级决定时，flexGrow 属性的值用作加权
    - 将 flexDirection 属性设置为 row（USS 格式为：flex-direction: row;）以切换到水平布局
    - 使用相对定位根据元素的原始布局位置来偏移元素
    - 将 position 属性设置为 absolute 以便相对于父位置矩形来放置某个元素。在这种情况下不会影响其同级和父项的布局

<h2> 4 UXML </h2>
<h3> 4.1 Format </h3>

> <a link="https://docs.unity.cn/cn/2020.1/Manual/UIE-UXML.html"> Unity Doc：UXML</a>

<h4> Defining new elements </h4>

  - Before you can use UXML files to define new elements, you must derive a new class from VisualElement or one of its subclasses, then implement the appropriate functionality within this new class. Your new class must implement a default constructor.
    ```cs
    class StatusBar : VisualElement{
        public StatusBar(){
            m_Status = String.Empty;
        }
        string m_Status;
        public string status { get; set; }
    }
    ```
  - In order for UI Toolkit to instantiate a new class when reading a UXML file, you must define a factory for your class. Unless your factory needs to do something special, you can derive the factory from UxmlFactory<T>. It’s recommended that you put the factory class within your component class.
    ```CS
    class StatusBar : VisualElement{
        public new class UxmlFactory : UxmlFactory<StatusBar> {}
        // ...
    }
    ```
<h4> Defining attributes on elements </h4>

  - You can define UXML traits for a new class and set its factory to use these traits.
    ```cs
    class StatusBar : VisualElement{
        public new class UxmlFactory : UxmlFactory<StatusBar, UxmlTraits> {}
        public new class UxmlTraits : VisualElement.UxmlTraits{
            UxmlStringAttributeDescription m_Status = new UxmlStringAttributeDescription { name = "status" };
            public override IEnumerable<UxmlChildElementDescription> uxmlChildElementsDescription{
                get { yield break; }
            }
            public override void Init(VisualElement ve, IUxmlAttributes bag, CreationContext cc){
                base.Init(ve, bag, cc);
                ((StatusBar)ve).status = m_Status.GetValueFromBag(bag, cc);
            }
        }
        // ...
    }
    ```
  - The UxmlTraits serves two purposes
    - It is used by the factory to initialize the newly created object.
    - It is analyzed by the schema generation process to get information about the element. This information is translated into XML schema directives.
  - The code example above does the following
    - The declaration of m_Status defines an XML attribute named status.
    - The uxmlChildElementsDescription returns an empty IEnumerable which indicates that StatusBar element has no child.
    - The Init() member reads the value of the status attribute in a property bag from the XML parser and sets the StatusBar.status property to this value.
    - By placing the UxmlTraits class inside the StatusBar class allows the Init() method to access the private members of StatusBar.
    - The new UxmlTraits class inherits from the base class UxmlTraits, so it shares the attributes of the base class.
    - Init() calls base.Init() to initialize the base class properties.

<h4> Defining a namespace prefix </h4>

  - Once you have defined a new element in C#, you can start using the element in your UXML files. If your new element is defined in a new namespace, you should define a prefix for the namespace. Namespace prefixes are declared as attributes to the root \<UXML> element and replace the full namespace name when scoping elements.
  - To define a namespace prefix, add a UxmlNamespacePrefix attribute to your assembly for each namespace prefix you want to define.
    ```cs
    [assembly: UxmlNamespacePrefix("My.First.Namespace", "first")]
    [assembly: UxmlNamespacePrefix("My.Second.Namespace", "second")]
    ```