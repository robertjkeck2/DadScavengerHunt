#!/usr/bin/env python

import smtplib
import sys

to_address = sys.argv[1]

conn = smtplib.SMTP('smtp.gmail.com', 587)

conn.ehlo()

conn.starttls()

conn.login('EMAIL ADDRESS', 'PASSWORD')

conn.sendmail('EMAIL ADDRESS', to_address, 'Subject: Christmas Challenge \n\nHey,\n\nGreat job cracking the code!\nReady to begin the next phase of the scavenger hunt?\n\nGo to part2.robertjohnkeck.com to begin.\n\nYour credentials are:\n\nUsername: USER\nPassword: PASSWORD\n\nGood luck!\nJohn')
