<link rel=stylesheet href=style.css>

<h1> Mod 基础 </h1>
<h2> 1 Mod 结构 </h2>
<h3> 构建目文件夹录 </h3>

> <a href=http://mc.163.com/mcstudio/modapi/2-8.html> 网易参考教程 </a>  
> <a href=https://blog.csdn.net/feifei3851/article/details/93720494> UUID 生成函数 </a>

<h4> 目录结构 </h4>

  - 根目录: tutorialMod
    - 行为包: tutorialBehaviorPack
      - 实体目录: entities  (内容可以为空，但必须存在)
      - 配置文件: manifest.json 
    - 资源包: tutorialResourcePack
      - 材质文件: textures
      - 界面文件: ui
      - 配置文件: manifest.json

<h4> 配置文件 </h4>

  - 配置文件：manifest.json
  - UUID
    - Python 生成 UUID
      - <a href=https://blog.csdn.net/feifei3851/article/details/93720494> CSDN 文献 </a>
        ```python
        import uuid
        print uuid.uuid1()
        # 基于 MAC 地址和时间戳生成 UUID
        print uuid.uuid3(uuid.NAMESPACE_DNS, 'yuanlin')
        # 基于 MD5 利用 namespace 和 自定义字符串生成 UUID       
        print uuid.uuid4()
        # 基于随机数生成 UUID
        print uuid.uuid5(uuid.NAMESPACE_DNS, 'yuanlin')
        # 基于 SHA1 利用 namespace 和 自定义字符串生成 UUID   

        uid = str(uuid.uuid4())
        suid = ''.join(uid.split('-'))
        # 删除 "-" 函数
        ```
    - 网站生成 UUID <a href="https://www.uuidgenerator.net/"> UUID 生成 </a>
  - json 文件格式
    - Behavior 包
      ```json
        {
            "format_version": 1,
                "header": {
                    "description": "This is a tutorial mod behavior_pack by @Hugo",
                    "name": "TutorialMod",
                    "uuid": "56adf3c7-f4a5-4fe5-bceb-77aa1d6e2253",
                    "version": [0, 0, 1]
                    },
                "modules": [
                    {
                        "description": "This is a tutorial mod behavior_pack by @Hugo",
                        "type": "data",
                        "uuid": "a7f0c804-1004-434e-b999-2109b005ff6e",
                        "version": [0, 0, 1]
                    }
                ]
	    }
      ```
    - Resource 包
      ```json
        {
			"format_version": 1,
			"header": {
				"description": "This is a tutorial mod resource_pack by @Hugo",
			    "name": "TutorialMod",
				"uuid": "a47597f7-a547-4d44-8557-88941352a703",
				"version": [0, 0, 1]
			},
			"modules": [
				{
					"description": "This is a tutorial mod resource_pack by @Hugo",
					"type": "resources",
					"uuid": "e0f32853-fa36-4984-af4a-c826d299a8e2",
					"version": [0, 0, 1]
				}
			]
		}
      ```