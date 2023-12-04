<section id="main page-margin" style="margin-left: 14%; margin-right: 14%;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <h1> Day 2 </h1>
    
    <h2> Part 1 </h2>
    <pre><code 
        class="python"
        data-trim
        data-noescape
        data-line-numbers="off"
        data-start-line="1"
        data-line-offset="0"
        data-tab-size="4"
        data-show-invisibles="false"
        data-auto-insert-tab="false"
        data-emacs-mode="false"
        data-show-only-first-line="false"
        data-display-copied="true"
        data-zenburn="true"
        data-highlight="1,2,3,4,5,6,7,8,9,10,11,12,13"
    >
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

    </code></pre>


    <h2> Part 2 </h2>
    <pre><code 
        class="python"
        data-trim
        data-noescape
        data-line-numbers="off"
        data-start-line="1"
        data-line-offset="0"
        data-tab-size="4"
        data-show-invisibles="false"
        data-auto-insert-tab="false"
        data-emacs-mode="false"
        data-show-only-first-line="false"
        data-display-copied="true"
        data-zenburn="true"
        data-highlight="1,2,3,4,5,6,7,8,9,10,11,12,13"
    >
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

    </code></pre>
</section>