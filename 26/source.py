from decimal import Decimal, getcontext
getcontext().prec = 4000

def longestSubstring(a, d):

    # converting to string and ignoring first non-decimal part 0.
    a = str(a)
    t = a[2:]

    # start at d as d-1 decimals can repeat
    for i in range(d, len(t)):
        # checking for numbers like 0.1666666666 if 6 repeats...
        t1 = t[d:d+1]
        t2 = t[d+1:d+2]
        if t1 == t2:
            return 1

        # checking for two parts
        # if it repeats they will eventually become equal
        p1 = t[0:i]
        p2 = t[i:i*2]
        if p1 == p2:
            # because we start at d :: p1 and p2 will be concatenated p1p2 = p1p2
            # length is half of p1p2 = p1
            return len(p1)//2
    return 0

result = [ (longestSubstring(Decimal(1)/Decimal(i), i) , i)  for i in range(1, 1000) ]
print("D:", max(result)[1])
print("Length: ", max(result)[0])