<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>图书后台管理系统登陆功能</title>
    <style>
        *{
            font-family: 微软雅黑;
        }
        h2{
            border-bottom: 5px solid #008B8B;
        }
    </style>
</head>
<div style="background-color:#BBFFFF">
    <h2>管理菜单</h2>
    <ul id="navigation">
        <li> <a>系统设置</a>
            <ul>
                <li><a href="pwd.php" target="rightFrame">密码修改</a></li>
            </ul>
        </li>
        <li><a>图书管理</a>
            <ul>
                <li><a href="book_list.php" target="rightFrame">新书管理</a></li>
                <li><a href="add_book.php" target="rightFrame">新书入库</a></li>
            </ul>
        </li>
        <li><a>查询统计</a>
            <ul>
                <li><a href="select_book.php" target="rightFrame">图书查询</a></li>
                <li><a href="count.php" target="rightFrame">图书统计</a></li>
            </ul>
        </li>
    </ul>
</div>
