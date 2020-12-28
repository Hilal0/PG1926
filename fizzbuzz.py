#FizzBuzz
ilk=int(input("ilk sayiyi giriniz:"))
son=int(input("sonuncu sayiyi giriniz:"))
for ilk in range(son):
    if ilk % 3 == 0 and ilk %5 == 0:
        print("FizzBuzz")
    elif ilk % 3 == 0:
        print("Fizz")
    elif ilk % 5 == 0:
        print("Buzz")
    else:
        print(ilk)
