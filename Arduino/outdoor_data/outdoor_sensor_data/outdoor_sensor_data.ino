#include <ESP8266WiFi.h>
#include <WiFiClient.h>
#include <ESP8266WebServer.h>
#include <ESP8266mDNS.h>
#include "DHT.h"
#include "Adafruit_Sensor.h"
 
#define DHTPIN D2     // what digital pin we're connected to
#define DHTTYPE DHT22   // DHT 22  (AM2302), AM2321

DHT dht(DHTPIN, DHTTYPE);

const char* ssid     = "Christina";
const char* password = "chriparr10";

ESP8266WebServer server(8080);
WiFiClient client;
MDNSResponder mdns; //multicast Domain Name System

 
float humidity, temp_f;  // Values read from sensor
String webPage = "";



 
void setup(void)
{
  DHT dht(DHTPIN, DHTTYPE);
  webPage += "<h1>Wemos D1 R2, Outdoor Data Sensor</h1>";
  Serial.begin(115200);  //baude rate .... Serial connection from ESP-01 via 3.3v console cable
  delay(1000);
  Serial.println("Hii ");
  // Connect to WiFi network
  WiFi.begin(ssid, password);
  Serial.print("\n\r \n\rWorking to connect");
 
  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
  delay(500);
  Serial.print(".");
  }
  
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
  if (mdns.begin("esp8266", WiFi.localIP())) {
    Serial.println("MDNS responder started");
  }
   server.on("/", [](){
    server.send(200, "text/html", webPage);
  });
  server.begin();
  Serial.println("HTTP server started");
  delay(10000);
  
  
}
 
void loop(void)
{
  float h = dht.readHumidity();
  float t = dht.readTemperature();
  if (isnan(h) || isnan(t)) {
    Serial.println("Failed to read from DHT sensor!");
    return;
  }
  // Wait a few seconds between measurements.
  
  server.handleClient();
 
  

  if (client.connect("192.168.1.100", 8080)) {
    Serial.println("connected to server");
    
    client.print("GET /MyThesis/Arduino/outdoor_data/data.php?"); // This
    client.print("temperature=");
    client.print(t);
    client.print("&humidity=");
    client.println(h);
    Serial.print("Humidity=");
    Serial.print(h);
    Serial.print(" Temp=");
    Serial.println(t);
    client.println(" HTTP/1.1"); // Part of the GET request
    client.println("Host: 192.168.1.100"); // IMPORTANT: If you are using XAMPP you will have to find out the IP address of your computer and put it here 
    client.println("Connection: close"); // Part of the GET request telling the server that we are over transmitting the message
    client.println(); // Empty line
    client.println(); // Empty line
    client.stop();    // Closing connection to server
    }
    else {
    // If Arduino can't connect to the server (your computer or web page)
    Serial.println("--> connection failed\n");
  }

  delay(300000); 
} 
