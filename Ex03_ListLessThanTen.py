#%%
# print all the elements in the list less or equal to your max
a = [1, 1, 2, 3, 5, 8, 13, 21, 34, 5, 5, 89]
maxnum = int(input('what is the maximum for your list? '))
b=[]
for num in a:
    if num <= maxnum:
        b.append(num)
        print(num)
print(b)
