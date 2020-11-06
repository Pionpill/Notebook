# **DICTIONARY**
参考文献 [runoob](https://www.runoob.com/python3/python3-dictionary.html)

## **assign**
- key assignment: key=>vaule
  - key must be unique, vaule is not necessary unique
- grammer: d = {key1 : value1, key2 : value2, key3 : value3 }
  - vaule can be any data type, key is unchangeable
- example  
  > dict = {'name': 'runoob', 'likes': 123, 'url': 'www.runoob.com'}  

  <img src="../images/py-dict-1.png" height=100px>
- other example
  ```python
  dict1 = { 'abc': 456 }
  dict2 = { 'abc': 123, 98.6: 37 }
  ```

## **visit elements**
- use key to visit elements
- example
  ```python
  dict = {'Name': 'Runoob', 'Age': 7, 'Class': 'First'}
  print ("dict['Name']: ", dict['Name'])
  print ("dict['Age']: ", dict['Age'])
  # out
  dict['Name']:  Runoob
  dict['Age']:  7
  ```
- error
  ```python
  dict = {'Name': 'Runoob', 'Age': 7, 'Class': 'First'} 
  print ("dict['Alice']: ", dict['Alice'])
  # out
  Traceback (most recent call last):
    File "test.py", line 5, in <module>
      print ("dict['Alice']: ", dict['Alice'])
  KeyError: 'Alice'
  ```

## **update**
- update elements through key
- example
  ```python
  dict = {'Name': 'Runoob', 'Age': 7, 'Class': 'First'}

  dict['Age'] = 8               # update Age
  dict['School'] = "菜鸟教程"  # update
  
  print ("dict['Age']: ", dict['Age'])
  print ("dict['School']: ", dict['School'])
  ```

## **delete**
- del: delete the key/dictionary
- .clear(): mark key empty
- example
  ```python
  dict = {'Name': 'Runoob', 'Age': 7, 'Class': 'First'}
  
  del dict['Name'] # delete 'Name'
  dict.clear()     # clar dictionary
  del dict         # delete dictionary
  
  print ("dict['Age']: ", dict['Age'])
  print ("dict['School']: ", dict['School'])

  # out
  Traceback (most recent call last):
    File "test.py", line 9, in <module>
      print ("dict['Age']: ", dict['Age'])
  TypeError: 'type' object is not subscriptable
  ```

## **character**
- key name is unique ,if two keys use the same name, the later will be remembered
  ```python
  dict = {'Name': 'Runoob', 'Age': 7, 'Name': '小菜鸟'}
  print ("dict['Name']: ", dict['Name'])
  # out
  dict['Name']:  小菜鸟
  ```