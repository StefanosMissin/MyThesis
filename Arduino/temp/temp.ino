
//TMP36 Pin Variables
int tmp36 = 0; //the analog pin the TMP36's Vout (sense) pin is connected to
                        //the resolution is 10 mV / degree centigrade with a
                        //500 mV offset to allow for negative temperatures
 
/*
 * setup() - this function runs once when you turn your Arduino on
 * We initialize the serial connection with the computer
 */



int ledPin = 10;                // LED connected to digital pin 10
void setup()
{
  Serial.begin(9600);  //Start the serial connection with the computer
                       //to view the result open the serial monitor 

  pinMode(ledPin, OUTPUT);      // sets the digital pin as output
}
 
void loop()                     // run over and over again
{
 //getting the voltage reading from the temperature sensor
 int reading = analogRead(tmp36);  
 
 // converting that reading to voltage, for 3.3v arduino use 3.3
 float voltage = reading * 5.0;
 voltage /= 1024.0; 
 
 // now print out the temperature
 float temperatureC = (voltage - 0.5) * 100 ;  //converting from 10 mv per degree wit 500 mV offset
                                               //to degrees ((voltage - 500mV) times 100)
 Serial.println(temperatureC);


 if (temperatureC > 22)
 {
  for (int i=0; i <= 5; i++)
  {
   digitalWrite(ledPin, HIGH);   // sets the LED on
   delay(200);
   digitalWrite(ledPin, LOW);   // sets the LED on
   delay(200);
  }
 }
 else
{
  digitalWrite(ledPin, LOW);   // sets the LED on
}
 delay(5000);                                     //waiting 5 seconds
}
