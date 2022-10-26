#include<iostream>
#include<conio.h>

using namespace std;

int main()
{
    // define an array
    int num[]= {12,9,37,86,2,17,5};
    int i,x,f;

    cout<<"Array: ";
    for(i=0; i<7; i++)
    {
        cout<<num[i]<<" ";
    }

    // store the number in variable x to search in the array
    cout<<"\n\nEnter number to search ";
    cin>>x;

    // set the value of variable f=0
    f=0;

    // run loop i from 0 to N-1 to read each number from the array
    for(i=0; i<7; i++)
    {
        // check if value of x is equal to the value of num[i] then print
        // message "Number found at index" and the value of i and set f=1 and break the loop
        if(x==num[i])
        {
            cout<<"Number found at index "<<i;
            f=1;
            break;
        }
    }

    // check if value of f is 0 then print number not found
    if(f==0)
    {
        cout<<"Number not found";
    }
    return 0;
}
