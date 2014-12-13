from math import pow

def check(n,e):
    tmp = int(pow(n,e))
    return len(str(tmp)) == e

result = 0
for i in range(1,30):
    for j in range (1,10):
        if check(j,i):
            result += 1

print(result)