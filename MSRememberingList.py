# example of list, sort, remove from list, add to list
friends=['Richard','Glenn','Joe','Daniel','Ryan','Alisha','Eve','Kaden','Mason','Jade','Freedom']
valuesInList = len(friends)
print(valuesInList)
print(friends)

# now print a selected one
print(friends[1])

# add a value
friends.append('Juliette')
print(friends)

# find the index of a value in the list. Note it will remove the first one if there are duplicates
print(friends.index('Freedom'))

# remove a value
friends.remove('Freedom')
print(friends)

# sort the friends list
friends.sort()
print(friends)

newlist = []
for newfriends in friends:
    newlist = friends
print('My New List')
print(newlist)