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
