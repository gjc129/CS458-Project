//
//  main.cpp
//  massproducedcode
//
//  Created by gjc129 on 11/6/18.
//  Copyright © 2018 Gabriel Cabrera. All rights reserved.
//

#include <iostream>
using namespace std;

void coutValues(int number, int numberMax);
void insertMeter();

int main()
{
    
   // int meterAreaZero = 0001; // max
   // int meterAreaZeroMax = 0;
   // int meterAreaOne = 1001; //max
   // int meterAreaOneMax = 0;
    int meterAreaTwo = 2001; // max 38
    int meterAreaTwoMax = 2038;
    int meterAreaThree = 3001; // max 41
    int meterAreaThreeMax = 3041;
    int meterAreaFour = 4001; // max 78
    int meterAreaFourMax = 4078;
    
    coutValues(meterAreaTwo, meterAreaTwoMax);
    coutValues(meterAreaThree, meterAreaThreeMax);
    coutValues(meterAreaFour, meterAreaFourMax);
    
    return 0;
}


void insertMeter()
{}

void coutValues(int number, int numberMax)
{
    for(int i = number; i <= numberMax; i++)
    {
        
        cout << "   meter" << i << ".on(\"click\", function(event){" << endl;
        cout << "      var clickedMarker = event.layer;" << endl;
        cout << "      console.log(\"" << i << "\");" << endl;
        cout << "   });" << endl;
        cout << endl;
        
    }
}
