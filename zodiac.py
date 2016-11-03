from datetime import datetime
zodiac_animal=('Rat','Ox','Tiger','Rabbit','Dragon','Snake','Horse','Goat','Dog','Pig','Rooster','Boar','Monkey')
Rat= "You are industrious, determined and hardworking"
Ox=" You are ambitious"
Tiger=" You have a personality built for leadership"
Rabbit= "You have bunny ears and bunny teeth"
Dragon=" You should go to alagaseia they are searching for you"
Snake="Naaginnnnn "
Horse="tugbukk tugbukk"
Goat="mehhhhhhhhh"
Dog="bhow bhow"
Pig="oink oink"
Rooster="cockadoo cocadukooooo"
Boar="Pork roast this Sunday"
Monkey="Wheres Your tree?"

characteristics=(Rat,Ox,Tiger,Rabbit,Dragon,Snake,Horse,Goat,Dog,Pig,Rooster,Boar,Monkey)

TERMINATE=False
print("display chinese zodiac")
current_year=datetime.now().year
while not TERMINATE:
    birth_year= int(input("Enter your Birth Year in YYYY\n"))
    while birth_year <1900 or birth_year > current_year:
        print("Invalid Birth Year please Renter\n")
        print(int(input("Enter your Birth Year in YYYY\n")))
    cycle_num=(birth_year-1990)%5
    print("Your Chinese Zodiac is",zodiac_animal[cycle_num],'\n')
    print("Your Personal Charachteristics are")
    print(characteristics[cycle_num])
    response=print("Would You like to give a new input?(y/n)")
    while response!="y" and response!= "n":
        response=input("y or n")
        if response=="n":
            TERMINATE=True
