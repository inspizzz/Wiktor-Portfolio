<section id="main page-margin" style="margin-left: 14%; margin-right: 14%;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <h1> Day 4 </h1>
    
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
import re

def count_matches(card):
    
    # debug
    print(f"checking card {card}")

    # store the count
    count = 0

    # get left and right side of the string
    left = card.split("|")[0].split(": ")[1]
    right = card.split("|")[1]

    # get the numbers using re
    sequence = re.findall(r"[0-9]+", left)
    hand = re.findall(r"[0-9]+", right)

    for i in sequence:
        if i in hand:
            count += 1

    return count



with open("input.txt", "r+") as f:
    cards = [i.rstrip() for i in f.readlines()]
    dictionary = {}
    count = len(cards)

    for card in cards:
        # get the card number
        number = card.split("|")[0].split(":")[0].split(" ")[-1]
        print(number) 
        # get the number of matches that card has
        matches = count_matches(card)

        # set the dictionary
        dictionary.setdefault(int(number), int(matches))
    print(dictionary)
    
    logs = {}
    # now go over the dictionary as a tree and find all of the leaf nodes ( 0 )
    for key, value in dictionary.items():
        to_see = [int(key)]
        
        print(f"\n\n\n\n\n\ndoing {key}")
        while len(to_see) > 0:
           
            print(f"\n{to_see}")
            # get the last value ( stack ) for ease of visually seeing, depth first search
            first = to_see.pop(len(to_see)-1)

            # get the number of matches 
            matches = dictionary[first]

            print(f"{first} has {matches} matches")

            for i in range(0, matches):
                if first+i+1 <= len(cards):    
                    to_see.append(first+i+1)
                    if first in logs:
                        logs[first] += 1
                    else:
                        logs.setdefault(first, 1)
                    count += 1

    print(logs)
    print(count)
    
    </code></pre>
</section>