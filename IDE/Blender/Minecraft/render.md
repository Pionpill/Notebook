<link rel=stylesheet href=style.css>

# Minecraft Render
## 1 教程与资源
### 1.1 教程
#### 基础教程
- [YouTube:基础导入](https://www.youtube.com/watch?v=PpuhWRfhH_E&t=0s)

### 1.2 资源
#### MC 原版资源
- [材质贴图](https://mcasset.cloud/)
#### 渲染资源
- [HDR 全局光照](https://polyhaven.com/)

## 2 常见操作
### 2.1 模型导入
#### 批量修改纹理(alpha通道与插值类型)
1. Go into the "Scripting"-workspace
2. Click "New" to create a new script
3. Paste this into the script:
   ```py
    import bpy

    # change all textures on Materials interpolation modes to Closest
    for mat in bpy.data.materials:
        try:
            #print(mat)
            for k,v in mat.node_tree.nodes.items():
                #print(k)
                if "Image Texture" in k:
                    print(mat.node_tree.nodes[k].interpolation)
                    mat.node_tree.nodes[k].interpolation = "Closest"
                    print(mat.node_tree.nodes[k].interpolation)
        except:
            print("Exception in material")

    # change Transparent Materials to Alpha Hashed     
    for mat in bpy.data.materials:
        try:
            #print(mat)
            ImageTextureNode = 0
            MaterialOutputNode = 0
            PrincipledBDSFNode = 0

            for k,v in mat.node_tree.nodes.items():
                if "Image Texture" in k:
                    ImageTextureNode = v
                    mat.blend_method = "HASHED"
                    mat.shadow_method = "HASHED"
                if "Material Output" in k:
                    MatieralOutputNode = v
                if "Principled BSDF" in k:
                    PrincipledBDSFNode = v
                
            mat.node_tree.links.new(ImageTextureNode.outputs[1],PrincipledBDSFNode.inputs[19])
                
        except:
            print("Exception in material")
   ```
4. play