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
