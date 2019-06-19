# Exception handling
import sys
firstNumber = float(input('enter a number : '))
secondNumber = float(input('enter a second number :'))

try:
    results = firstNumber / secondNumber
    print(results)
except:
    error = sys.exc_info()[0]
    print ('Oops, you are dividing by zero')
    print(error)
finally:
    print ('Program run done')