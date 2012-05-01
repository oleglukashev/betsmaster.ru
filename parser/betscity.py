#!/usr/local/bin/python
# -*- coding: utf-8 -*-
import urllib
import lxml.html
import MySQLdb
import requests
import time
import datetime
from teams import teams
#include classes
import CParser

payload = {'gcheck':9, 'line_id[0]':25805, 'line_id[1]': 25818, 'time':1}
page = requests.post("http://betcityru.com/bets/bets2.php?rnd=1333553020", data=payload)

doc = lxml.html.document_fromstring(page.content)

db = MySQLdb.connect(host="localhost", user="root", passwd="asa44wefdfSHSSd", db="betsmaster", charset='utf8')
cursor = db.cursor()


challenge_id = 0;
line_time = 0
match_id = 0
kontora = "betcityru.com"

cursor.execute ("SELECT title FROM matches  WHERE challenge_id = %s", (challenge_id))
data = cursor.fetchall()


for lines in doc.cssselect('tbody'):
    if (lines.get('class') == "date"):
        line_date = lines.cssselect('tr td')[0].text.encode("utf-8")

    if (lines.get('id') == "line"):
        t1 = CParser.parser_team_from_str(lines.cssselect('td:nth-child(2) b')[0].text.encode('utf-8'), teams)
        t2 = CParser.parser_team_from_str(lines.cssselect('td:nth-child(5) b')[0].text.encode('utf-8'), teams)

        line_time =  datetime.datetime.strptime(line_date + " " + lines.cssselect('td:nth-child(1)')[0].text.encode('utf-8') + ":00", "%d.%m.%Y %H:%M:%S")
        team1_coef = lines.cssselect('td:nth-child(4) a')[0].text.encode('utf-8')
        team2_coef = lines.cssselect('td:nth-child(7) a')[0].text.encode('utf-8')
        first = lines.cssselect('td:nth-child(8) a')[0].text.encode('utf-8')
        x = lines.cssselect('td:nth-child(9) a')[0].text.encode('utf-8')
        second = lines.cssselect('td:nth-child(10) a')[0].text.encode('utf-8')
        first_x = lines.cssselect('td:nth-child(11) a')[0].text.encode('utf-8')
        first_second = lines.cssselect('td:nth-child(12) a')[0].text.encode('utf-8')
        x_second = lines.cssselect('td:nth-child(13) a')[0].text.encode('utf-8')

        title = t1 + " - " + t2

        occurrence = 1
        for row in data:
            if (row[0].encode('utf-8') == title):
                occurrence = 0

        if (occurrence):
            cursor.execute ("INSERT INTO matches (challenge_id, title, time) VALUES(%s, %s, %s)", (challenge_id, title, line_time))

        #cursor.execute ("INSERT INTO coefficients (kontora_name, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", (kontora, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second))

        match_id += 1

db.commit()
db.close()





