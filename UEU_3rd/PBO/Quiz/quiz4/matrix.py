mat1 = [
    [3, 0],
    [3, 6],
]

mat2 = [
    [1, 3],
    [4, 2],
]

for x in range(0, len(mat1)):
    for y in range(0, len(mat1[0])):
        print(mat1[x][y] + mat2[x][y], end='')
    print('')