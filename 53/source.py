from cooltools import cooltools
ct = cooltools()

factorials = [ i for i in ct.factorialsGenerator(100) ]

def getFactorial(a):
    return factorials[a-1]

def combinations(n,r):
    return (getFactorial(n) / (getFactorial(r) * getFactorial(n-r)))

limit = 100
result = 0
for n in range(limit, 1, -1):
    for r in range(n, 1, -1):
        if combinations(n, r) > 1000000:
            result += 1

print("Result: ", result)