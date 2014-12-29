from collections import defaultdict

def check(n):
    repeats = defaultdict(int)
    tmp = 10%n
    repeats[tmp] = 1
    len = 1
    while True:
        tmp = (tmp*10) % n
        len += 1
        repeats[tmp] += 1
        if repeats[tmp] == 2:
            break
    return len

maxLen = 0
for i in range(1,1000):
    tmp = check(i)
    if tmp > maxLen:
        maxLen = max(maxLen, tmp)
        result = i

print("Result: ", result)