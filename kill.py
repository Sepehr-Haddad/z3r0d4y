#!/usr/bin/python
import os,hashlib,subprocess,signal,time,multiprocessing,time,sys,httplib,pickle,socket,re,urllib2 #import modules
stop_event = multiprocessing.Event()  #start multiprocessing 
err_c = 0
while 1:
	time.sleep(0.5)
	try:
		opnurl = urllib2.urlopen('http://z3r0d4y.com').read()
		E = 1
		if 'z3r0d4y' in opnurl:
			E = 0
	except:
		E = 0
		err_c += 1
	if E is 1:
		os.system('python /root/ban.py')
		err_c = 0
	if err_c is 100:
		time.sleep(60)
