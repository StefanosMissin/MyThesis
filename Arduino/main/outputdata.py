##############
## Script listens to serial port and writes contents into a file
##############
## requires pySerial to be installed 
import serial
import time



serial_port = 'COM6'
baud_rate = 9600 #In arduino, Serial.begin(baud_rate)
write_to_file_path = "temphumvalues2.csv"
output_file = open(write_to_file_path, "a")
ser = serial.Serial(serial_port, baud_rate)
while True:
    line = ser.readline()
    line = line.decode("utf-8") #ser.readline returns a binary, convert to string
    print(line)
    timenow = time.strftime("%d/%m/%Y,%H:%M")
    output_data = timenow + "," + line
    f1 = open(write_to_file_path, "a")
    f1.write(output_data)
    f1.close()