#!/usr/local/bin/python
# -*- coding: utf-8 -*-
from xml.dom.minidom import parseString

def parseConfig( file_address ):
    config_file = open(file_address, 'r')
    config_read = config_file.read()
    config_file.close()
    return parseString(config_read)

def getConfig( file_address, str ):
    config = parseConfig( file_address )
    return config.getElementsByTagName( str )
