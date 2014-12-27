from math import factorial
def combinations(n,r):
    return (factorial(n) / (factorial(r) * factorial(n-r)))

limit = 100
result = 0
for n in range(limit, 1, -1):
    for r in range(n, 1, -1):
        if combinations(n, r) > 1000000:
            result += 1

print("Result: ", result)