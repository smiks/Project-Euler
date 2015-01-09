from cooltools import cooltools
from collections import defaultdict, Counter
from functools import reduce
ct = cooltools()

limit = 20000
primes = ct.primes((limit//2)+1)

def primeFactors(n):
    factors = list()
    for i in primes:
        while n%i == 0:
            n = n // i
            factors.append(i)
        if n == 1:
            break
    return factors

def numDivisors(n):
    if n == 1:
        return 1
    divs = Counter(primeFactors(n)).items()
    if len(divs) == 0:
        return 0
    return reduce(lambda x,y: x*y, [i+1 for _,i in divs])

memo = defaultdict(int)
total = 0

memo = {i:numDivisors(i) for i in range(1,limit)}

prev = 0
for j in memo.values():
    if j == prev:
        total += 1
    prev = j



print("Result: ", total)