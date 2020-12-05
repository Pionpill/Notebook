#include <iostream>

using namespace std;

class Box{
  private:
    double width;
  public:
    friend void printWidth(Box box);
    void setWidth(double wid);
};

void Box::setWidth(double wid){
  width = wid;
}

void printWidth(Box box){
  /* 因为 printWidth() 是 Box 的友元，它可以直接访问该类的任何成员 */
  cout << "Width of box : " << box.width << endl;
}

// 程序的主函数
int main(){
  Box box;
  box.setWidth(10.0);
  printWidth(box);
  return 0;
}