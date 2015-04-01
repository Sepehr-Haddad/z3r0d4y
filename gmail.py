#!/usr/bin/python2.7
import smtplib
user = 'xxx@gmail.com'
passw = 'xxx'
smtp_host = 'smtp.gmail.com'
smtp_port = 587
server = smtplib.SMTP()
server.connect(smtp_host,smtp_port)
server.ehlo()
server.starttls()
server.login(user,passw)
