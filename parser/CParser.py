#!/usr/local/bin/python
# -*- coding: utf-8 -*-
import datetime

def parser_team_from_str( team_name_str, teams_list ):
    for key_team, value_team in teams_list.items():
        for part_of_name_team in value_team:
            for part_of_name_team_site in team_name_str.split(" "):
                if (part_of_name_team_site.lower().find(part_of_name_team.lower()) == 0):
                    return key_team
    return 0

def time_conversion_for_marathon( str ):
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

def time_conversion_for_betscity( line_date, line_time ):
            return datetime.datetime.strptime(line_date + " " + line_time + ":00", "%d.%m.%Y %H:%M:%S")
