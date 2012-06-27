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
import Config

config = Config.getConfig( 'config/betscity.xml', 'section')

db = MySQLdb.connect(host="localhost", user="root", passwd="asa44wefdfSHSSd", db="betsmaster", charset='utf8')
cursor = db.cursor()

for section in config:
    section_id = int(section.getElementsByTagName('id')[0].getAttribute('value'))
    challenge_id = int(section.getElementsByTagName('challenge_id')[0].getAttribute('value'))
    sport_id = int(section.getElementsByTagName('sport_id')[0].getAttribute('value'))

    teams_for_challenge = teams[sport_id][challenge_id]

    payload = {'gcheck':9, 'line_id[0]': section_id, 'time':1}
    page = requests.post("http://betcityru.com/bets/bets2.php?rnd=1333553020", data=payload)

    doc = lxml.html.document_fromstring(page.content)


    today = datetime.date.today()
    today_format = today.strftime("%Y-%m-%d %H:%M:%S")
    sql = "DELETE FROM matches, coefficients USING matches, coefficients WHERE matches.time < '%s' AND matches.id = coefficients.match_id" % today_format
    cursor.execute(sql)

    line_time = 0
    match_id = 0
    bets_id = 0

    cursor.execute ("SELECT title FROM matches  WHERE challenge_id = %s", (challenge_id))
    data = cursor.fetchall()

    for lines in doc.cssselect('tbody'):
        if (lines.get('class') == "date"):
            line_date = lines.cssselect('tr td')[0].text.encode("utf-8")

        if (lines.get('id') == "line"):
            t1 = CParser.parser_team_from_str(lines.cssselect('td:nth-child(2) b')[0].text.encode('utf-8'), teams_for_challenge)
            t2 = CParser.parser_team_from_str(lines.cssselect('td:nth-child(5) b')[0].text.encode('utf-8'), teams_for_challenge)

            line_time =  CParser.time_conversion_for_betscity(line_date, lines.cssselect('td:nth-child(1)')[0].text.encode('utf-8'))
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

            cursor.execute ("INSERT INTO coefficients (bets_id, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", (bets_id, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second))

            match_id += 1

db.commit()
db.close()





