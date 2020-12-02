sum = list(range(1, 31))
while len(sum) > 15:
    print('{}号下船了'.format(sum.pop(8)))
    for i in range(8):
        sum.append(sum.pop(0))