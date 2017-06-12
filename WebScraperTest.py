import os #OS module koji se poziva kako cmd ne bi zatvorio prozor nakon odrađivanja skripte
from urllib2 import urlopen #učitavanje funkcije urlopen iz biblioteke urllib
from bs4 import BeautifulSoup #učitavanje funkcije bs4 iz biblioteke Beautiful Soup
import re #učitavanje modula za regularne izraze

url = "https://en.wikipedia.org/wiki/Main_Page" #definirana varijabla koja prima poveznicu 
html = urlopen(url) #korištenje funkcije urlopen i spremanje u varijablu html
bs = BeautifulSoup(html, "lxml") #pozivanje funkcije bs koja prikazuje parsirani tekst u normalnom obliku

links = bs.find("div",{"id" : "bodyContent"}).findAll("a", href=re.compile("(/wiki/)+([A-Za-z0-9_:()])+")) 
#dva definirana "uvjeta" po kojima scraper bira podatke za povlačenje

for link in links:
	print(link['title'], link['href']) #petlja za prikaz dobivenih podataka
	
os.system("pause") 
