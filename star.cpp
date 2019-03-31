#include <iostream>


using namespace std;

int main()
{
system("color 10");
cout << "[=====================]\n";
cout << "Author : r00t@star\n";
cout << "powered by indonesian wibu :v\n";
cout << "[=====================]\n\n";
cout << "(1) RED_HAWK\n";
cout << "(02) Tools By Pineaple_303\n";
cout << "[======================]\n";
int star;
cout << "root@star -# ";
cin >> star;
if (star <= 1){
cout << "Installing....\n";
system("apt update && apt upgrade");
system("apt install php");
system("git clone https://github.com/Tuhinshubhra/RED_HAWK");
cout << "cd RED_HAWK\n";
cout << "Sudah Terupload :)\n";
}else if (star <= 2){
    cout << "Installing\n";
    system("apt update && apt upgrade");
    system("pkg install python2 lolcat git -y");
    system("pip2 install lolcat");
    system("git clone https://github.com/Xidploit/pinneapletools");
    cout << "cd pinneapletools{enter}\n";
    cout << "sudah terinstall :)\n";
}
}
