def Sum(a):
    return sum(int(i) for i in str(a))

maxr = None
for a in range(99,0,-1):
    for b in range(99,0,-1):
        res = Sum(a**b)
        if maxr is None:
            maxr = res
        else:
            maxr = max(maxr, res)

print("Result: ", maxr)