
//-------------------------------------------------------------------------------------------------------
#include <SPI.h>
#include <Ethernet.h>

// Enter a MAC address and IP address for your controller below.
byte mac[] = {0x90, 0xA2, 0xDA, 0x0D, 0x48, 0xD3 };

// The IP address will be dependent on your local network:
// assign an IP address for the controller:

IPAddress ip(192,168,1,75);
IPAddress gateway(192,168,1,254);
IPAddress subnet(255, 255, 255, 0);

// Initialize the Ethernet server library with the port you want to use.
EthernetServer server(8080);
String readString;
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------
// Any extra codes for Declaration :

// Declare Pin 8 as an LED because thats what we will be connecting the LED to.You could use any other pin and would then have to change the pin number.
int AC = 8;
int DH = 7;

//-------------------------------------------------
//-------------------------------------------------------------------------------------------------------
void setup()
{
//-------------------------------------------------

// Extra Set up code:
pinMode(AC, OUTPUT); //pin selected to control
pinMode(DH, OUTPUT); //pin selected to control

//-------------------------------------------------
//-------------------------------------------------------------------------------------------------------
//enable serial data print
  Serial.begin(9600);

  //start Ethernet
  Ethernet.begin(mac, ip, gateway, subnet);
  server.begin();
  Serial.print("Server is at ");
  Serial.println(Ethernet.localIP());
  Serial.println("LED Controller Test 1.0");
}
//-------------------------------------------------------------------------------------------------------
//-------------------------------------------------------------------------------------------------------

void loop()
{
  // listen for incoming clients
  EthernetClient client = server.available();
  if (client)

  {
    Serial.println("new client");

    while (client.connected())
    {
      if (client.available())

      {
        char c = client.read();

        //read char by char HTTP request
        if (readString.length() < 100)

        {

          //store characters to string
          readString += c;
          //Serial.print(c);


          Serial.write(c);
          // if you've gotten to the end of the line (received a newline
          // character) and the line is blank, the http request has ended,
          // so you can send a reply
          //if HTTP request has ended
          if (c == '\n') {
            Serial.println(readString); //print to serial monitor for debuging
//--------------------------------------------------------------------------------------------------------
// Needed to Display Site:
client.println("HTTP/1.1 200 OK"); //send new page
            client.println("Content-Type: text/html");
            client.println();
            client.println("<HTML>");
            client.println("<HEAD>");

//--------------------------------------------------------------------------------------------------------
//-------------------------------------------------

// what is being Displayed :     
        
            client.println("<TITLE>Home Automation</TITLE>");
            client.println("<center>");
            client.println("<link rel='stylesheet' href='http://192.168.1.100:8080/MyThesis/LiveSite/dashboard/css/arduino_controller.css'>");
            client.println("</HEAD>");
            client.println("<BODY>");
            client.println("<center>");
                  client.println("<div class='cs-loader'>");
                  client.println("<div class='cs-loader-inner'>");
                  client.println("<label> .</label>");
                  client.println("<label> .</label>");
                  client.println("<label> .</label>");
                  client.println("<label> .</label>");
                  client.println("<label> .</label>");
                  client.println("<label> .</label>");
                  client.println("</div>");
                  client.println("</div>");

            client.println("<script>");
            client.println("if (window.location.pathname + window.location.search == '/?acon') {");
            client.println("window.location.replace('http://192.168.1.100:8080/MyThesis/LiveSite/dashboard/index.php?acon');");
            client.println("} else {");
            client.println("console.log(location.pathname + window.location.search); }");
            client.println("if (window.location.pathname + window.location.search == '/?acoff') {");
            client.println("window.location.replace('http://192.168.1.100:8080/MyThesis/LiveSite/dashboard/index.php?acoff');");
            client.println("} else {");
            client.println("console.log(location.pathname + window.location.search); }");
            client.println("if (window.location.pathname + window.location.search == '/?dhon') {");
            client.println("window.location.replace('http://192.168.1.100:8080/MyThesis/LiveSite/dashboard/index.php?dhon');");
            client.println("} else {");
            client.println("console.log(location.pathname + window.location.search); }");
            client.println("if (window.location.pathname + window.location.search == '/?dhoff') {");
            client.println("window.location.replace('http://192.168.1.100:8080/MyThesis/LiveSite/dashboard/index.php?dhoff');");
            client.println("} else {");
            client.println("console.log(location.pathname + window.location.search); }");
            client.println("</script>");
            client.println("</BODY>");
            client.println("</HTML>");
            
            

            delay(1);
            //stopping client
            client.stop();

            //-------------------------------------------------
            // Code which needs to be Implemented:
            if(readString.indexOf("?acon") >0)//checks for on
            {
              digitalWrite(AC, HIGH);    // set pin 8 high
              Serial.println("AC On");
              
            }
            else{
              if(readString.indexOf("?acoff") >0)//checks for off
              {
                digitalWrite(AC, LOW);    // set pin 8 low
                Serial.println("AC Off");
              }
            }
            if(readString.indexOf("?dhon") >0)//checks for on
            {
              digitalWrite(DH, HIGH);    // set pin 8 high
              Serial.println("Dehumidifier On");
              
            }
            else{
              if(readString.indexOf("?dhoff") >0)//checks for off
              {
                digitalWrite(DH, LOW);    // set pin 8 low
                Serial.println("Dehumidifier Off");
              }
            }
            //clearing string for next read
            readString="";

            // give the web browser time to receive the data
            delay(1);
            // close the connection:
            client.stop();
            Serial.println("client disonnected");

          }
        }
      }
    }
  }
}



