#!/usr/local/bin/python
# -*- coding: utf-8 -*-
import urllib
import lxml.html
import MySQLdb
import requests
import datetime
import psycopg2

teams = {
    'Амкар (Пермь)': ['Амкар'],
    'Анжи (Махачкала)': ['Анжи'],
    'Волга (Нижний Новгород)': ['Волга', 'Н'],
    'Динамо (Москва)': ['Динамо', 'М'],
    'Зенит (Санкт-Петербург)': ['Зенит'],
    'Краснодар (Краснодар)': ['Краснодар'],
    'Крылья Советов': ['К', 'Советов'],
    'Кубань (Краснодар)': ['Кубань'],
    'Локомотив М': ['Локомотив', 'М'],
    'Ростов': ['Ростов'],
    'Рубин (Казань)': ['Рубин'],
    'Спартак (Москва)': ['Спартак', 'М'],
    'Спартак (Нальчик)': ['Спартак', 'Н'],
    'Терек (Грозный)': ['Терек'],
    'Томь (Томск)': ['Томь'],
    'ЦСКА (Москва)': ['ЦСКА']
}

def checkTeam(team_str_from_site):
    for key_team, value_team in teams.items():
        access = 0
        for part_of_name_team in value_team:
            key = 0
            for part_of_name_team_site in team_str_from_site.split(" "):
                if (part_of_name_team_site.lower().find(part_of_name_team.lower()) == 0):
                    access += 1

            key += 1

            if (access == len(value_team)):
                return key_team

page = urllib.urlopen("https://ru.leonbets.com/betoffer/1/6074")
doc = lxml.html.document_fromstring(page.read())

db = MySQLdb.connect(host="localhost", user="root", passwd="asa44wefdfSHSSd", db="betsmaster", charset='utf8')
cursor = db.cursor()

challenge_id = 0
line_time = 0
match_id = 0
#kontora = "betcityru.com"

for lines in doc.cssselect('tbody'):
    if (lines.get('class') == "date"):
        line_date = lines.cssselect('tr td')[0].text.encode("utf-8")

    if (lines.get('id') == "line"):
        t1 = checkTeam(lines.cssselect('td:nth-child(2) b')[0].text.encode('utf-8'))
        t2 = checkTeam(lines.cssselect('td:nth-child(5) b')[0].text.encode('utf-8'))

        line_time =  datetime.datetime.strptime(line_date + " " + lines.cssselect('td:nth-child(1)')[0].text.encode('utf-8') + ":00", "%d.%m.%Y %H:%M:%S")
        #team1_coef = lines.cssselect('td:nth-child(4) a')[0].text.encode('utf-8')
        #team2_coef = lines.cssselect('td:nth-child(7) a')[0].text.encode('utf-8')
        #first = lines.cssselect('td:nth-child(8) a')[0].text.encode('utf-8')
        #x = lines.cssselect('td:nth-child(9) a')[0].text.encode('utf-8')
        #second = lines.cssselect('td:nth-child(10) a')[0].text.encode('utf-8')
        #first_x = lines.cssselect('td:nth-child(11) a')[0].text.encode('utf-8')
        #first_second = lines.cssselect('td:nth-child(12) a')[0].text.encode('utf-8')
        #x_second = lines.cssselect('td:nth-child(13) a')[0].text.encode('utf-8')

        title = t1 + " - " + t2

        cursor.execute("INSERT INTO matches (challenge_id, title, time) VALUES(%s, %s, %s)", (challenge_id, title, line_time))


        #cursor.execute("INSERT INTO bets (kontora, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", (kontora, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second))

        match_id += 1

db.commit()
db.close()





