# include <iostream>
# include <algorithm>

using namespace std;

int Gcd_rec(int a,int b);

int main(){
    int a,b;
    cin>>a>>b;
    swap(a,b);
    cout<<a<<" "<<b;
}

int Gcd_rec(int a,int b){
    return b;
}