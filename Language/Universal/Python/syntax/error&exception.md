# **ERROR & EXCEPTION**

## **exception handling**
>  try/except
- working way
  - execute try sectence
  - if no exception were found, ignore the except sentence
  - if exception were found, skip the try sentence, find exception in except sentence
- example
    ```python
    import sys
    try:
        f = open('myfile.txt')
        s = f.readline()
        i = int(s.strip())
    except OSError as err:
        print("OS error: {0}".format(err))
    except ValueError:
        print("Could not convert data to an integer.")
    except:
        print("Unexpected error:", sys.exc_info()[0])
        raise
    ```

> try/except...else
- working way
  - if no exception were found, execute the else sentence
- example
    ```python
    for arg in sys.argv[1:]:
        try:
            f = open(arg, 'r')
        except IOError:
            print('cannot open', arg)
        else:
            print(arg, 'has', len(f.readlines()), 'lines')
            f.close()
    ```
> try-finally
  - finally sentence will be always excuted
    ```python
    try:
        runoob()
    except AssertionError as error:
        print(error)
    else:
        try:
            with open('file.log') as file:
                read_data = file.read()
        except FileNotFoundError as fnf_error:
            print(fnf_error)
    finally:
        print('这句话，无论异常是否发生都会执行。')
    ```

## **throw exception**
> raise [Exception [, args [, traceback]]]
- example
    ```python
    x = 10
    if x > 5:
        raise Exception('x 不能大于 5。x 的值为: {}'.format(x))
    ```
- Exception must be a example or subclass of Exception
    ```python
    try:
        raise NameError('HiThere')
    except NameError:
        print('An exception flew by!')
        raise
    ```

## **custom exception**
- you can create a new exception class by inheriting Exception class
- example
    ```python
    >>> class MyError(Exception):
            def __init__(self, value):
                self.value = value
            def __str__(self):
                return repr(self.value)
    >>> try:
            raise MyError(2*2)
        except MyError as e:
            print('My exception occurred, value:', e.value)
    My exception occurred, value: 4
    >>> raise MyError('oops!')
    Traceback (most recent call last):
    File "<stdin>", line 1, in ?
    __main__.MyError: 'oops!'
    ```