def calculate(steps):
    nPrevious = 1
    dPrevious = 1
    result = 0
    for i in range(1, steps+1):
        n =  nPrevious + 2 * dPrevious
        d =  nPrevious + dPrevious
        nPrevious = n
        dPrevious = d
        if len(str(n)) > len(str(d)):
            result += 1
    return result

print("Result: ", calculate(1000))