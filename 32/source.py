from collections import defaultdict

def isPandigital(a):
    d = defaultdict(int)
    for i in str(a):
        d[int(i)] += 1
        if int(i) == 0:
            return False
    if len(d) != 9:
        return False
    return True

def generateNumbers(dstruct, rangeA=10, rangeB=10):
    for i in range(1,rangeA+1):
        tmp = ""
        for j in range(1,rangeB+1):
            a = i*j
            tmp = str(i)+str(j)+str(a)
            if len(tmp) > 9:
                break
            if len(tmp) == 9 and isPandigital(tmp):
                dstruct.add(int(a))

result = set()
generateNumbers(result, 2000, 100)
print("Result: ", sum(result))