import re

# check if character is a symbol
def isSymbol(char):
    #  symbols = ['+', '*', '%', '#', '/', '@', '$', '-', '&', '=']
    symbols = ["*"]
    return char in symbols

with open("input.txt", "r+") as f:
    engine_map = [i.rstrip() for i in f.readlines()]
    count = 0
    symbol_dictionary = {}

    for i in range(0, len(engine_map)):
        
        # get the line
        line = engine_map[i]
        
        # debug
        print(f"\n\n\n\ndoing line {line}")

        # find all the numbers in the line
        numbers = [i.span() for i in re.finditer(r"[0-9]+", line)]
        print(numbers) 
        # for each number check if it has a symbol around it
        for (start, end) in numbers:
            number = line[start:end]
            
            
            # set valid to False
            valid = False

            # get the index of the number
            index = start
            
            # debug
            print(f"\nnumber {number} is at index {index}")

            # check left if exists
            if index > 0:
                print(f"checking left {line[index-1]}")
                if isSymbol(line[index-1]):
                    print(f"\t{line[index-1]} is a symbol")
                    location = (i, index-1)
                    if location in symbol_dictionary:
                        symbol_dictionary[location].append(number)
                    else:
                        symbol_dictionary.setdefault(location, [number])

            # check right if exists
            if index+len(number) < len(line): # potential for error?
                print(len(line))
                print(f"checking right {line[index+len(number)]}")
                if isSymbol(line[index+len(number)]):
                    print(f"\t{line[index+len(number)]} is a symbol")
                    location = (i, index+len(number))
                    if location in symbol_dictionary:
                        symbol_dictionary[location].append(number)
                    else:
                        symbol_dictionary.setdefault(location, [number])

            # check down if exists
            if i < len(engine_map)-1:
                for j in range(-1, len(number)+1):
                    
                    # index to check
                    check = j + index

                    # check if j is in range ( numbers may be squished against the edge )
                    if check >= 0 and check < len(line):
                        
                        print(f"checking down {engine_map[i+1][check]} index {check}")
                        
                        # check if there is a symbol
                        if isSymbol(engine_map[i+1][check]):
                            print(f"\t{engine_map[i+1][check]} is a symbol")
                            location = (i+1, check)
                            if location in symbol_dictionary:
                                symbol_dictionary[location].append(number)
                            else:
                                symbol_dictionary.setdefault(location, [number])

            # check if up exists
            if i > 0:
                for j in range(-1, len(number)+1):
                    
                    check = j + index
                    # check if j is in range
                    if check >= 0 and check < len(line):
                        
                        print(f"checking up {engine_map[i-1][check]} index {check}")

                        # check if there is a symbol
                        if isSymbol(engine_map[i-1][check]):
                            print(f"\t{engine_map[i-1][check]} is a symbol")
                            location = (i-1, check)
                            if location in symbol_dictionary:
                                symbol_dictionary[location].append(number)
                            else:
                                symbol_dictionary.setdefault(location, [number])
            
    total = 0

    for key, value in symbol_dictionary.items():
        if len(value) == 2:
            total += int(value[0]) * int(value[1])

    print(total)
