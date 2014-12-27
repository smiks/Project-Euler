from collections import defaultdict

def isPalindrome(a):
    return str(a) == str(a)[::-1]

cache = set()

def isLychrel(a):
    for i in range(50):
        tmp = a + int(str(a)[::-1])
        if isPalindrome(tmp):
            cache.add(int(str(a)[::-1]))
            cache.add(a)
            return True
        a = tmp
    return False

Lychrel = 10000
limit = 10000
for i in range(1, limit + 1):
    if i in cache:
        Lychrel -= 1
        continue
    if isLychrel(i):
        Lychrel -= 1

print("Result: ", Lychrel)