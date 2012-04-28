#!/usr/local/bin/python
# -*- coding: utf-8 -*-
import sys
import locale
import urllib
import lxml.html
import requests
import MySQLdb
import datetime


#FOR MARATHON
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

def time_conversion( str ):
    time = ''
    day = ''
    month = ''
    year = ''
    date_now = datetime.datetime.now();
    months_list = {'янв':'01', 'фев':'02', 'мар':'03', 'апр':'04', 'мая':'05', 'июн':'06', 'июл':'07', 'авг':'08', 'сен':'09', 'окт':'10', 'ноя':'11', 'дек':'12'}

    if ( len(str) == 5 ):
        time = str + ":00"
        day = date_now.strftime("%d")
        month = date_now.strftime("%m")
        year = date_now.strftime("%Y")
    else:
        split_str = str.split(" ")
        time = split_str[2] + ":00"
        day = split_str[0]
        month = months_list[split_str[1]]
        year = date_now.strftime("%Y")


    return  year + "-" + month + "-" + day + " " + time

page = urllib.urlopen("http://www.marathonbet.com/ru/betting/634268,634269")
doc = lxml.html.document_fromstring(page.read())

db = MySQLdb.connect(host="localhost", user="root", passwd="asa44wefdfSHSSd", db="betsmaster", charset='utf8')
cursor = db.cursor()

challenge_id = 0;
for tables in doc.cssselect('table.foot-market > tbody tr.event-header'):
    row_in_mass = []
    i = 0
    for rows in tables.cssselect('tr.event-header > td'):
        if (i == 0):
            team = rows.cssselect('table tr:nth-child(1) td:nth-child(1) span div')
            title = checkTeam(team[0].text.encode('utf-8')) + " - " + checkTeam(team[1].text.encode('utf-8'))
            row_in_mass.append(title)

            time_match = time_conversion(rows.cssselect('table tr:nth-child(1) td.date')[0].text.encode('utf-8').strip(" \r\n"))
            row_in_mass.append(time_match)
        else:
            row_in_mass.append(rows.cssselect('a')[0].text.encode('utf-8').strip(" \r\n").strip(" \t"))

        i += 1
    i = 0

    cursor.execute ("INSERT INTO matches (challenge_id, title, time) VALUES(%s, %s, %s)", (challenge_id, title, time_match))

db.commit()
db.close()

