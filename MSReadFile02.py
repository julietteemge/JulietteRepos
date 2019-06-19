# access mode:r(read), w(write), r+(read and write), w+(read and write), a(append), b(binary) 
import csv
fileName = "DataTasmaniaEndangered50.csv"
accessMode = "r"
# if you use 'with' and 'as' the file will automatically close without having to issue a 'close' cmd
with open(fileName, accessMode) as myCSVFile:
    dataFromFile = csv.reader(myCSVFile)
    for currentRow in dataFromFile :
        print(currentRow)