from cooltools import *

ct = cooltools()

ratio  = 1
sideL  = 3
prime  = 0
limit  = 0.10
while True:
    for i in range(4):
        n = (sideL**2 - i*sideL) + i
        if ct.isPrime(n):
            prime  += 1
    ratio = prime  / ((sideL*2)-1)
    if ratio < limit:
        break
    sideL += 2

print("Result: ", sideL)
