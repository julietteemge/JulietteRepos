######### example 1 : hello world
print("hello world 20190326\n")

######### example 2 : string var and new line
print("######### example 2 : string var and new line")
character_name = "Tom"
character_age = "99"
print("There once was an old geezer named " + character_name + ",")
print("he was " + character_age + " years old\n")

######### example 3 : change character_name to Dick
print("#########  example 3 : change character_name to Dick")
print("there once was an old geezer named " + character_name + ",")
print("he was " + character_age + " years old\n")

character_name = "Dick"
print("there once was an old geezer named " + character_name + ",")
print("he was " + character_age + " years old\n")

######### example 4 : convert string to all uppercase, then back to lowercase
print("######### example 4 : convert string to all uppercase")
phrase=("live for the moment")
print("live for the moment")
print(phrase.upper() + "\n")

print("######### then back to lowercase")
print(phrase.lower() + "\n")

########## example 5: check if string in lower case (boolean)
print("######### example 5 : check if string is lower case (boolean)")
phrase.islower()
print("the phrase is in lower case ")
#else
#    print("phrase is in uppercase")

######### example 6: quotation mark
print("######### example 5: quotation mark")
print("Juliette\'s friends\n")

######### example 7: return specific index of character in string
print("######### example 7: return specific index of character in string")
JamesTaylor = ("You Can Close Your Eyes")
print("JamesTaylor :" + JamesTaylor)
print(JamesTaylor[8] +"\n")

######### example 8: find word in string and return index of first char
print("######### example 8: find word in string and return index of first char")
wordstr="Eyes"
print("The word is " + wordstr)
print(JamesTaylor.index(wordstr))
print("\n")

######### example 9: replacing a word in a string
print("######### example 9: replacing a word in a string")
print("JamesTaylor :" + JamesTaylor)
wordstr2="Heart"
print("JamesTaylor : " + JamesTaylor.replace(wordstr, wordstr2))
print("JamesTaylor : " + JamesTaylor +"\n")

# now put the new word in new var
print("# now put the new word in var")
JamesT=(JamesTaylor.replace(wordstr,wordstr2))
print("JamesT : " + JamesT + "\n")

# assign old var with string in new var
print("# assign old var with string in new var")
JamesTaylor=JamesT
print("JamesTaylor : " + JamesTaylor +"\n")

