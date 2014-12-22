from decimal import getcontext, Decimal

squares = {i**2 for i in range(1,100)}

precision = 100
getcontext().prec = precision + 3

sum = 0
for i in range(1,101):
    if i not in squares:
        tmp = Decimal(i).sqrt()
        tmp2 = str(tmp).replace(".","")
        tmp2 = tmp2[0:100]
        for j in tmp2:
            sum += int(j)

print("Result: ", sum)