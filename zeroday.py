#!/usr/bin/python
#Ali Razmjoo 
import os,hashlib,subprocess,signal,time,multiprocessing,time,sys,httplib,pickle,socket,re,urllib2 #import modules
stop_event = multiprocessing.Event()  #start multiprocessing
def stop(signum, frame):
    stop_event.set()
signal.signal(signal.SIGTERM, stop)
if __name__ == '__main__': #start software
	Attack = 0
	outserver = 0
	outserver_error = 0
	outserverdisable = 0
	outserverenable = 0
	chk_manual = 0
	while not stop_event.is_set(): #while bash script not stop ....
		subpro_in = subprocess.Popen(['python','/root/in.py'],stdout=subprocess.PIPE)
		pid_in = str(subpro_in.pid)
		subpro_out = subprocess.Popen(['python','/root/out.py'],stdout=subprocess.PIPE)
		pid_out = str(subpro_out.pid)
		subpro_24 = subprocess.Popen(['python','/root/24ban.py'],stdout=subprocess.PIPE)
		pid_24 = str(subpro_24.pid)		
		subpro_md5 = subprocess.Popen(['python','/root/md5.py'],stdout=subprocess.PIPE)
		pid_md5 = str(subpro_md5.pid)		
		while 1:
			loop = 1
			time.sleep(1000)
