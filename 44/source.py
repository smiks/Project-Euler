def generatePentagonalNumbers(n):
    for i in range(1, n+1):
        num = (i*(3*i-1)) // 2
        numbers.append(num)
        numbers2.add(num)

numbers  = list()
numbers2 = set()
generatePentagonalNumbers(5000)

def isOk(n1, n2):
    if (n1+n2) in numbers2 and (n2-n1) in numbers2:
        return True
    return False

smallest = list()
for i in numbers:
    for j in numbers[::-1]:
        if isOk(i,j):
            smallest.append(abs(j-i))

print("Result: ", sorted(smallest)[0])
