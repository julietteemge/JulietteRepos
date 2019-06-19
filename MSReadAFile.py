# access mode:r(read), w(write), r+(read and write), w+(read and write), a(append), b(binary) 
#open a file, read and print the first 2 lines in the csv file.
# note there are 50 records in the DataTasmaniaEndangered50.csv file
import csv
myFile = open("DataTasmaniaEndangered50.csv","r")
# this will return the one line
firstOne = myFile.readline()
print(firstOne)
firstTwo = myFile.readline()
print(firstTwo)
# read the csv file content
dataFromFile = csv.reader(myFile)