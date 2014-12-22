from decimal import getcontext, Decimal

squares = {i**2 for i in range(1,100)}

precision = 100
getcontext().prec = precision + 3

print ("Result: ", sum ( sum(int(j) for j in ((str(Decimal(i).sqrt())).replace(".",""))[0:100]) for i in range(1,101) if i not in squares) )