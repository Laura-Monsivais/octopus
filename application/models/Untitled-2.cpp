#include <LiquidCrystal.h>

LiquidCrystal _LCD(12, 11, 7, 6, 5, 4);

const int _RATE = 9600;
const int _PIN_3 = 3;
const int _PIN_2 = 2;
const int _PIN_LED = 13;
const int _PIN_A0 = A0;
const int _PIN_A1 = A1;

int _potentiometer = 0;
int _maxValue = 0;

void setup() {
  Serial.begin(_RATE);
  pinMode(_PIN_3, OUTPUT);
  pinMode(_PIN_LED, OUTPUT);
}

void loop() {
    _maxValue = 180;
    if (temperatureLM35() <= (temperatureSite(_potentiometer) - 5)) {
        digitalWrite(_PIN_LED, HIGH);
    } else {
        digitalWrite(_PIN_LED,  LOW);
    }
    if (temperatureLM35() <= (temperatureSite(_potentiometer) - 8)) {
        _maxValue = 135;  
    }
    mapPotentiometer(_maxValue);   



    // if (temperatureLM35 <= (temperatureSite - 8)) { 
    
    // } 

//   activateCalefaction(temperatureLM35(), temperatureSite(_potentiometer));
  

  
  
  Serial.println(temperatureLM35());
  sendTemperatureLM35ToLCD(temperatureLM35());
}


float temperatureLM35() {
  return (analogRead(_PIN_A1) * 500) / 1024; 
}

float temperatureSite(int potentiometer) {
  return (potentiometer * 500) / 1024; 
}

void mapPotentiometer(int maxValue) {  
    _potentiometer = map(_potentiometer, 0, 1023, 0, maxValue);
    moveMotorDC(_potentiometer);
}




void sendTemperatureLM35ToLCD(float temperatureLM35) {
  _LCD.begin(16, 1);
  _LCD.print(temperatureLM35);
}

void sendTemperatureSiteToLCD(float temperatureLM35) {
  _LCD.setCursor(2, 1);
  _LCD.println(temperatureLM35);
}

void moveMotorDC(int potentiometer) {
  analogWrite(_PIN_3, potentiometer);
  sendTemperatureSiteToLCD(temperatureSite(potentiometer));
}


// void activateCalefaction(float temperatureLM35, float temperatureSite) {
//    if (temperatureLM35 <= (temperatureSite - 5)) {
//      digitalWrite(_PIN_LED, HIGH);
//    } else {
//      digitalWrite(_PIN_LED,  LOW);
//    }

//    if (temperatureLM35 <= (temperatureSite - 8)) { 
    
//    } 
// }


