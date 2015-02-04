#!/usr/bin/python2.7
import smtplib,email,os,sys
from email.MIMEMultipart import MIMEMultipart
from email.Utils import COMMASPACE
from email.MIMEText import MIMEText
#from email.MIMEBase import MIMEBase
#from email.parser import Parser
#from email.MIMEImage import MIMEImage
#from email.MIMEAudio import MIMEAudio
#import mimetypes
import email
import email.mime.application
user = 'xxx@gmail.com'
passw = 'xxx'
smtp_host = 'smtp.gmail.com'
smtp_port = 587
server = smtplib.SMTP()
server.connect(smtp_host,smtp_port)
server.ehlo()
server.starttls()
a = server.login(user,passw)
