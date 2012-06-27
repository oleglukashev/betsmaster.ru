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
import re

config = Config.getConfig('config/marathon.xml', 'section')

db = MySQLdb.connect(host="localhost", user="root", passwd="asa44wefdfSHSSd", db="betsmaster", charset='utf8')
cursor = db.cursor()

for section in config:
    section_id = int(section.getElementsByTagName('id')[0].getAttribute('value'))
    challenge_id = int(section.getElementsByTagName('challenge_id')[0].getAttribute('value'))
    sport_id = int(section.getElementsByTagName('sport_id')[0].getAttribute('value'))

    page = urllib.urlopen("http://www.marathonbet.com/ru/betting/" + str(section_id))
    doc = lxml.html.document_fromstring(page.read())

    teams_for_challenge = teams[sport_id][challenge_id]

    match_id = 0
    bets_id = 1

    today = datetime.date.today()
    today_format = today.strftime("%Y-%m-%d %H:%M:%S")
    sql = "DELETE FROM matches, coefficients USING matches, coefficients WHERE matches.time < '%s' AND matches.id = coefficients.match_id" % today_format
    cursor.execute(sql)


    cursor.execute ("SELECT title FROM matches WHERE challenge_id = %s", (challenge_id))
    data = cursor.fetchall()

    for tables in doc.cssselect('table.foot-market > tbody tr.event-header'):
        t1 = CParser.parser_team_from_str(tables.cssselect('tr.event-header > td.first > table > tr:nth-child(1) td.name span div')[0].text.encode('utf-8'), teams_for_challenge)
        t2 = CParser.parser_team_from_str(tables.cssselect('tr.event-header > td.first > table > tr:nth-child(1) td.name span div')[1].text.encode('utf-8'), teams_for_challenge)

        title = t1 + " - " + t2
        time = CParser.time_conversion_for_marathon(tables.cssselect('tr.event-header > td.first > table > tr:nth-child(1) td.date')[0].text.encode('utf-8').strip(" \r\n"))
        first = tables.cssselect('tr.event-header > td:nth-child(2) span')[0].text.encode('utf-8')
        x = tables.cssselect('tr.event-header > td:nth-child(3) span')[0].text.encode('utf-8')
        second = tables.cssselect('tr.event-header > td:nth-child(4) span')[0].text.encode('utf-8')
        first_x = tables.cssselect('tr.event-header > td:nth-child(5) span')[0].text.encode('utf-8')
        first_second = tables.cssselect('tr.event-header > td:nth-child(6) span')[0].text.encode('utf-8')
        x_second = tables.cssselect('tr.event-header > td:nth-child(7) span')[0].text.encode('utf-8')
        team1_coef = tables.cssselect('tr.event-header > td:nth-child(8) span')[0].text.encode('utf-8')
        team2_coef = tables.cssselect('tr.event-header > td:nth-child(9) span')[0].text.encode('utf-8')

        first = re.sub("\s*\n\s*", ' ', first.strip())
        x = re.sub("\s*\n\s*", ' ', x.strip())
        second = re.sub("\s*\n\s*", ' ', second.strip())
        first_x = re.sub("\s*\n\s*", ' ', first_x.strip())
        first_second = re.sub("\s*\n\s*", ' ', first_second.strip())
        x_second = re.sub("\s*\n\s*", ' ', x_second.strip())
        team1_coef = re.sub("\s*\n\s*", ' ', team1_coef.strip())
        team2_coef = re.sub("\s*\n\s*", ' ', team2_coef.strip())

        occurrence = 1
        for row in data:
            if (row[0].encode('utf-8') == title):
                occurrence = 0

        if (occurrence):
            cursor.execute("INSERT INTO matches (challenge_id, title, time) VALUES(%s, %s, %s)", (challenge_id, title, time))

        cursor.execute("INSERT INTO coefficients (bets_id, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", (bets_id, match_id, team1_coef, team2_coef, first, x, second, first_x, first_second, x_second))

        match_id += 1

db.commit()
db.close()

