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
cout << ".\n";
cout << "[======================]\n";
int star;
cout << "root@star -# ";
cin >> star;
if (star <= 1){
cout << "Installing....";
system("apt update && apt upgrade");
system("apt install php");
system("git clone https://github.com/Tuhinshubhra/RED_HAWK");
cout << "cd RED_HAWK";
cout << "Sudah Terupload:)";
system("sh AdminSearch/install");
}
}
