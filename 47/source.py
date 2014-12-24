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

# generate list with primes
primes = [i for i,j in erathostenos(100000).items() if j ]

def checkPrimeFactors(a, b, c, d):
    factors = set()
    for i in primes:
        tmp = 1
        while a%i == 0:
            a = a // i
            tmp *= i
        if tmp != 1:
            factors.add(tmp)
        if a == 1:
            break

    for i in primes:
        tmp = 1
        while b%i == 0:
            tmp *= i
            b = b // i
        if tmp != 1:
            factors.add(tmp)
        if b == 1:
            break

    for i in primes:
        tmp = 1
        while c%i == 0:
            tmp *= i
            c = c // i
        if tmp != 1:
            factors.add(tmp)
        if c == 1:
            break

    for i in primes:
        tmp = 1
        while d%i == 0:
            tmp *= i
            d = d // i
        if tmp != 1:
            factors.add(tmp)
        if d == 1:
            break

    return len(factors) == 16 # 16 because we need 4 distinct prime factors for each number, a, b, c and d

for i in range(100000, 200000):
    if checkPrimeFactors(i, i+1, i+2, i+3):
        print("Result: ", i)
        break;