import re

with open("input.txt", "r+") as f:
    points = 0

    for line in f.readlines():
        
        counter = 0

        # debug
        print(line)

        # get left and right side of the string
        left = line.split("|")[0].split(": ")[1]
        right = line.split("|")[1]

        # get the numbers using re
        sequence = re.findall(r"[0-9]+", left)
        hand = re.findall(r"[0-9]+", right)

        print(sequence)
        print(hand)
        print("\n\n")

        for i in hand:
            if i in sequence:
                if counter == 0:
                    counter = 1
                else:
                    counter *= 2

        points += counter

    print(points)
