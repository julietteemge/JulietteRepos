# use predefine string constants
import string

#TODO: predefined string constants can be used in common scenarios
print(string.ascii_letters)
print(string.digits)
print(string.hexdigits)

#TODO: Use the constants to filter information out
test_string1 = "the quick brown fox jumps over the lazy dog on the 1st of December"
test_string2 = "Supercalifragilistic"
test_string3 = "90210"

result = test_string1.split(" ")
pals = ("Jade", "Freedom")
print ("i am here")
print (",".join(pals))

# TODO: string testing methods