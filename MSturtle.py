# drawing a square using turtle;
# one way is to repeat the lines
# 2nd way is using the 'for' statement
import turtle
#turtle.forward(100)
#turtle.right(90)
#turtle.forward(100)
#turtle.color('red')
#turtle.right(90)
#turtle.forward(100)
#turtle.right(90)
#turtle.forward(100)
for steps in range(4):
    turtle.forward(100)
    turtle.right(90)
    print(steps)
# above can also be written as the following :
counter = 0
while counter < 4:
    turtle.forward(100)
    turtle.right(90)
    counter = counter+1
    print(steps)
    for steps2 in ['black', 'blue', 'green','red']:
        for steps3 in range(5):
            turtle.color(steps2)
            turtle.forward(200)
            turtle.right(360 / 3)