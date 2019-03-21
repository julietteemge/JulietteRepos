######### example 1: input 2 numbers and add
print("######### example 1: input 2 numbers and add")
#numbers input will be in the string format
num1 = input("Enter a number : ")
num2 = input("Enter a second number : ")

#convert string numbers to float and print
result = float(num1) + float(num2)
print("the print line of float result is : " + str(result))

#convert result(float) to result2(int)  and print
result2 = int(result)
print("the print line of int result2 is : " + str(result2))

#convert result(float) to result2(int)  and print
result3 = mod(result)
print("the print line of mod results : " + str(result3))