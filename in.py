#!/usr/bin/python
#By G3n3Rall 
import os,hashlib,subprocess,signal,time,multiprocessing,time,sys,httplib,pickle,socket,re,urllib2 #import modules
stop_event = multiprocessing.Event()  #start multiprocessing
Attack = 0
while 1:
	time.sleep(0.2)
	try:
		Ready_Target = 'black-hg.org'  
		connection = httplib.HTTPConnection(Ready_Target) 
		connection.request("GET",'/')
		response = connection.getresponse()
		E404 = '404'       
		ENot = 'Not Found' #
		if E404 == response.status or E404 == response.reason or ENot == response.status or ENot == response.reason:
			print 'yes'			
			time.sleep(0.1)
		else:
			print 'yes'			
			time.sleep(0.1)
		E = 0
	except httplib.HTTPException, e:
		E = 1 
		Attack += 1
	except ValueError:
		E = 1
		Attack += 1
	except socket.timeout:
		E = 1
		Attack += 1
	except IOError:
		E = 1
		Attack += 1
	if Attack is 10:
		os.system('python /root/ban.py')
		Attack = 0
