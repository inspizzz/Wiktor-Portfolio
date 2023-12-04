<section id="main page-margin" style="margin-left: 14%; margin-right: 14%;">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.0.3/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    <h1> Day 1 </h1>
    
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
    with open("codes.txt", "r+") as f:
        total = 0
        for line in f.readlines():
            first = ""
            last = ""
            for char in line:
                if char.isnumeric():
                    if first == "":
                        first = char
                    last = char
            print(line)

            if first and last:
                number = int(f"{first}{last}")
                print(number)
                total += number

        print(total)

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
    numbers = ["one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten"]
    numbers2 = ["1", "2", "3", "4", "5", "6", "7", "8", "9"]

    # open the file
    with open("codes.txt", "r+") as f:
        total = 0
        for line in f.readlines():
            first = 0
            last = 0
            max_index = 0
            min_index = len(line)
            
            print(line)

            for start in range(0, len(line)):
                for end in range(start+1, len(line)):
                    content = line[start:end]
                    # print(content)
                    if content in numbers:
                        print(f"{content} found in {line} at index {start}")
                        number = numbers.index(content)+1
                        if start < min_index:
                            min_index = start
                            first = number
                        elif start > max_index:
                            max_index = start
                            last = number

                    if content in numbers2:
                        print(f"{content} found in {line} at index {start}")
                        number = numbers2.index(content)+1
                        if start < min_index:
                            min_index = start
                            first = number
                        elif start > max_index:
                            max_index = start
                            last = number
            print(first)
            print(last)
            if last == 0:
                total += int(f"{first}{first}")
                
            else:
                total += int(f"{first}{last}")
        
        print(total)

    </code></pre>
</section>