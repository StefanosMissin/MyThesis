#include <SPI.h>
#include <Ethernet.h>
#include <dht.h>
#define dataPin 2 // Defines pin number to which the sensor is connected
dht DHT; // Creats a DHT object



byte mac[] = { 0xDE, 0xAD, 0xBE, 0xEF, 0xFE, 0xED };
byte ip[] = {192, 168, 1, 76 }; //Read the code explanation below
byte serv[] = {192, 168, 1, 65} ; //Read the code explanation below
EthernetClient cliente;
void setup() {
delay(30000);
Serial.begin(9600); //setting the baud rate at 9600
Ethernet.begin(mac, ip);

}
void loop() {
//float hum = dht.readHumidity(); //Reading the humidity and storing in hum
//float temp = dht.readTemperature(); //Reading the temperature as Celsius and storing in temp
//float fah = dht.readTemperature(true); //reading the temperature in Fahrenheit
//float heat_index = dht.computeHeatIndex(fah, hum); //Reading the heat index in Fahrenheit
//float heat_indexC = dht.convertFtoC(heat_index); //Converting the heat index in Celsius

int readData = DHT.read22(dataPin); // Reads the data from the sensor
float t = DHT.temperature; // Gets the values of the temperature
float h = DHT.humidity; // Gets the values of the humidity
 if (cliente.connect(serv, 8080)) { //Connecting at the IP address and port we saved before
Serial.println("connected");
cliente.print("GET /MyThesis/Arduino/indoor_data/data.php?"); //Connecting and Sending values to database
cliente.print("temperature=");
cliente.print(t);
cliente.print("&humidity=");
cliente.println(h);
//Printing the values on the serial monitor
Serial.print("Temperature= ");
Serial.println(t);
Serial.print("Humidity= ");
Serial.println(h);
cliente.stop(); //Closing the connection
}
else {
// if you didn't get a connection to the server:
Serial.println("connection failed");
}
delay(120000);
}
