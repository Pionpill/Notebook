li=['h','e','l','l','o','world']
print('显示列表：',li)
print('列表第二个元素：',li[1],
    '\n列表倒数第个个元素',li[-2],
    '\n第2到第5个元素',li[1:5])
print('world的位置：', li.index('world'))
li.insert(6,'!')
print('显示列表：', li)
