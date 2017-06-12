from urllib2 import urlopen
from bs4 import BeautifulSoup

import re

url = "https://en.wikipedia.org/wiki/Main_Page"
html = urlopen(url)
bs = BeautifulSoup(html, "lxml")

links = bs.find("div",{"id" : "bodyContent"}).findAll("a", href=re.compile("(/wiki/)+([A-Za-z0-9_:()])+"))

for link in links:
	print(link['title'], link['href'])