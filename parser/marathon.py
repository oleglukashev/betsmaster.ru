#!/usr/local/bin/python
# -*- coding: utf-8 -*-
import sys
import locale
import urllib
import lxml.html
import requests
import MySQLdb
import datetime
import CParser
from teams import teams


#FOR MARATHON


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
request = db.cursor()

challenge_id = 0;
match_id = 0
kontora = 'marathonbet.com'

request.execute ("SELECT title FROM matches  WHERE challenge_id = %s", (challenge_id))
data = request.fetchall()

for tables in doc.cssselect('table.foot-market > tbody tr.event-header'):
    t1 = CParser.parser_team_from_str(tables.cssselect('tr.event-header > td.first > table > tr:nth-child(1) td.name span div')[0].text.encode('utf-8'), teams)
    t2 = CParser.parser_team_from_str(tables.cssselect('tr.event-header > td.first > table > tr:nth-child(1) td.name span div')[1].text.encode('utf-8'), teams)

    title = t1 + " - " + t2
    time = time_conversion(tables.cssselect('tr.event-header > td.first > table > tr:nth-child(1) td.date')[0].text.encode('utf-8').strip(" \r\n"))
    first = tables.cssselect('tr.event-header > td:nth-child(2) a')[0].text.encode('utf-8').strip(" \r\n")
    x = tables.cssselect('tr.event-header > td:nth-child(3) a')[0].text.encode('utf-8').strip(" \r\n")
    second = tables.cssselect('tr.event-header > td:nth-child(4) a')[0].text.encode('utf-8').strip(" \r\n")
    first_x = tables.cssselect('tr.event-header > td:nth-child(5) a')[0].text.encode('utf-8').strip(" \r\n")
    first_second = tables.cssselect('tr.event-header > td:nth-child(6) a')[0].text.encode('utf-8').strip(" \r\n")
    x_second = tables.cssselect('tr.event-header > td:nth-child(7) a')[0].text.encode('utf-8').strip(" \r\n")
    team1_coef = tables.cssselect('tr.event-header > td:nth-child(8) a')[0].text.encode('utf-8').strip(" \r\n")
    team2_coef = tables.cssselect('tr.event-header > td:nth-child(9) a')[0].text.encode('utf-8').strip(" \r\n")

    occurrence = 1
    for row in data:
        if (row[0].encode('utf-8') == title):
            occurrence = 0

    if (occurrence):
        request.execute ("INSERT INTO matches (challenge_id, title, time) VALUES(%s, %s, %s)", (challenge_id, title, time))

    cursor.execute ("INSERT INTO coefficients (kontora_name, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", (kontora, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second))

db.commit()
db.close()

