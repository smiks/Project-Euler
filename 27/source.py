from math import sqrt

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

def longestChain(a, b):
    long = 0
    n = 0
    while True:
        val = n**2 + a*n + b
        if val > 0:
            if not primes[val]:
                return (long, a, b)
            long += 1
        n += 1

primes = erathostenos(100000)
maxV = []
for i in range(1000):
    for k in range(1000):
        if primes[i] and primes[k]:
            maxV.append(longestChain(i, k))
            maxV.append(longestChain(-1*i, k))
            maxV.append(longestChain(-1*i, -1*k))
            maxV.append(longestChain(i, -1*k))

maxT = max(maxV)
print( maxT, (maxT[1] * maxT[2]))