# (c) 2020 Keker LLC

import mysql.connector
import time
import os

cnx = mysql.connector.connect(user='', password='', host='', database='plexSleepTimer')
mycursor = cnx.cursor()

mycursor.execute("SELECT * FROM users")

myresult = list(mycursor.fetchall())

currentUser = myresult[0][0]
minute = type(int(myresult[0][1]))

if (minute > 0):
    mycursor.execute("UPDATE users SET minuteValue='0' WHERE user='" + currentUser + "'")
    time.sleep(minute * 60)
    os.system("kill_a_stream.py -u" + currentUser)