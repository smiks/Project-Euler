from itertools import permutations

def substringDivisibility(num):
    num=str(num)
    d1 = int(num[1:4])
    d2 = int(num[2:5])
    d3 = int(num[3:6])
    d4 = int(num[4:7])
    d5 = int(num[5:8])
    d6 = int(num[6:9])
    d7 = int(num[7:10])
    if d1%2 != 0:
        return False
    if d2%3 != 0:
        return False
    if d3%5 != 0:
        return False
    if d4%7 != 0:
        return False
    if d5%11 != 0:
        return False
    if d6%13 != 0:
        return False
    if d7%17 != 0:
        return False
    return True

result = set()
for i in permutations([1,2,3,4,5,6,7,8,9,0]):
    n = int(''.join(map(str,i)))
    if substringDivisibility(n):
        result.add(n)
print("Result: ", sum(result))