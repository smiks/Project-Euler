from math import sqrt
from collections import defaultdict

def erathostenos(num):
    primes = { i:(not(i == 2 or i % 2 == 0 or i == 0 or i == 1)) for i in range(num+1) }

    primes[2] = True

    limit   = sqrt(num) + 1
    i       = 3
    while i <= limit:
        if primes[i]:
            j = 2 * i
            while j < num:
                primes[j] = False
                j += i
        i += 2
    return primes

primes = erathostenos(int(sqrt(50000000))+1)

#filtering primes
new = [i for i,j in primes.items() if j ]

result = set()

for i in new:
    for j in new:
        for k in new:
            tmp = i**2 + j**3 + k**4
            if tmp > 50000000:
                break
            result.add(tmp)

print("Result: ",  len(result))