from collections import defaultdict

cubes =  {i:i**3 for i in range(100,10000)}


numberOfCubes = defaultdict(int)
fiveCubes = list()
def start():
    for i,j in cubes.items():
        a = [int(k) for k in str(j)]
        a = ''.join(map(str,sorted(a)))
        numberOfCubes[a] += 1
        if numberOfCubes[a] == 5:
            fiveCubes.append(a)
            return

start()
for i,j in cubes.items():
    a = [int(k) for k in str(j)]
    a = ''.join(map(str,sorted(a)))
    if a == fiveCubes[0]:
        print("Result: ", i,"^3 = ", j)
        break
