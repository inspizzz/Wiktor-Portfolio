if __name__ == "__main__":
    with open("input.txt", "r+") as f:

        # initialise ids
        ids = [i for i in range(1, 101)]
        print(ids)

        for line in f.readlines():

            # split the game id from the rest of the data
            game, data = line.split(": ")
            
            # get the games id
            game = int(game.split(" ")[1])

            # found is false, stores the boolean value if it had been impossible
            found = False

            # iterate for every game, then for every colour in that game
            for round in data.split("; "):

                # no need to check anymore, remove the id
                if found:
                    break

                for colour in round.split(", "):

                    # get the number of balls associated with this
                    num = int(colour.strip().split(" ")[0])

                    # check if red balls are shown
                    if "red" in colour:
                        if num > 12:
                            print(f"{game} has too many red balls {data}")
                            found = True
                            if game in ids:
                                ids.remove(game)

                    # check if blue balls
                    elif "blue" in colour:
                        if num > 14:
                            print(f"{game} has too many blue balls {data}")
                            found = True
                            if game in ids:
                                ids.remove(game)

                    # check if green balls                    
                    elif "green" in colour:
                        if num > 13:
                            print(f"{game} has too many green balls {data}")
                            found = True
                            if game in ids:
                                ids.remove(game)

                
        print(ids)
        print(sum(list(dict.fromkeys(ids))))


