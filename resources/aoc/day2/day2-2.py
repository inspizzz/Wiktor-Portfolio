if __name__ == "__main__":
    with open("input.txt", "r+") as f:
        
        # keep track of the total
        total = 0

        # for every game
        for line in f.readlines():
            print(line)
            # split the game id from the rest of the data
            id, data = line.split(": ")
            
            # get the games id
            id = int(id.split(" ")[1])
            
            # min values
            red = 0
            green = 0
            blue = 0

            # iterate for every game, then for every colour in that game
            for round in data.split("; "):
                for colour in round.split(", "):

                    # get the number of balls associated with this
                    num = int(colour.strip().split(" ")[0])

                    if "red" in colour:
                        if num > red:
                            red = num

                    if "green" in colour:
                        if num > green:
                            green = num

                    if "blue" in colour:
                        if num > blue:
                            blue = num
            print(f"{red} : {green} : {blue}")
            total += red * blue * green
        print(total)
