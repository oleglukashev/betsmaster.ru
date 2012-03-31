#!/usr/local/bin/python
# -*- coding: utf-8 -*-
import sys
import locale
import urllib
import lxml.html
import requests
import MySQLdb

def time_conversion( str ):
    months = {'апр': '3'}
    date_in_obj = str.split(" ")

    return  "2012-" + date_in_obj[0] + "-" + months[date_in_obj[1]] + " " + date_in_obj[2] + ":00"


page = urllib.urlopen("http://www.marathonbet.com/ru/betting/634268,634269")
doc = lxml.html.document_fromstring(page.read())

db = MySQLdb.connect(host="localhost", user="root", passwd="asa44wefdfSHSSd", db="bets_agregator", charset='utf8')
cursor = db.cursor()

for tables in doc.cssselect('table.foot-market > tbody tr.event-header'):
    row_in_mass = []
    i = 0
    for rows in tables.cssselect('tr.event-header > td'):
        if (i == 0):
            team = rows.cssselect('table tr:nth-child(1) td:nth-child(1) span div')
            title = team[0].text.encode('utf-8') + " - " + team[1].text.encode('utf-8')
            row_in_mass.append(title)

            time_match = time_conversion(rows.cssselect('table tr:nth-child(1) td.date')[0].text.encode('utf-8').strip(" \r\n"))
            row_in_mass.append(time_match)
        else:
            row_in_mass.append(rows.cssselect('a')[0].text.encode('utf-8').strip(" \r\n").strip(" \t"))

        i += 1
    i = 0

    cursor.execute ("INSERT INTO matches (title, time, first, X, second, firstX, firstsecond, Xsecond, fora1, fora2, totalless, totalmore) VALUES(%s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s)", (row_in_mass[0], row_in_mass[1], row_in_mass[2], row_in_mass[3],row_in_mass[4], row_in_mass[5],row_in_mass[6], row_in_mass[7],row_in_mass[8], row_in_mass[9],row_in_mass[10], row_in_mass[11]))

db.commit()
db.close()

