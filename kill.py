#!/usr/bin/python
#By Ali Razmjoo 
import os,hashlib,subprocess,signal,time,multiprocessing,time,sys,httplib,pickle,socket,re,urllib2 #import modules
stop_event = multiprocessing.Event()  #start multiprocessing 
os.system('ps aux | grep .py > /root/id.txt')
f = open('/root/id.txt')
for line in f:
	line = line.rsplit()
	try:
		pid = int(line[1])
		cmd = 'kill -9 ' + str(pid)
		os.system(cmd)
	except:
		skip = 1
