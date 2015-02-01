#!/usr/bin/python
#By Ali Razmjoo 
import os,hashlib,subprocess,signal,time,multiprocessing,time,sys,httplib,pickle,socket,re,urllib2 #import modules
stop_event = multiprocessing.Event()  #start multiprocessing
def stop(signum, frame):
    stop_event.set()
signal.signal(signal.SIGTERM, stop)
if __name__ == '__main__': #start software
	while not stop_event.is_set(): #while bash script not stop ....
		time.sleep(0.6)
		os.system('rm -rf /home/size_public_html')
		f = open('/home/size_public_html','a')
		for dirname, dirnames, filenames in os.walk('/home/z3r0d4y/public_html/'):
			F = 0
			A = 0
			C = 1
			D = 1
			for subdirname in dirnames:
				A = os.path.join(dirname, subdirname)
				if 'error_log' in A:
					C = 0
				if 'access_log' in A:
					if 'data' in A:
						C = 0
				if C is 1:
					if 'public_html/' in A:
						size = os.path.getsize(A)
						wr = str(size) + ':::' + str(A) + '\n'
						f.write(wr)
				C = 1
			for filename in filenames:
				F = os.path.join(dirname, filename)
				if 'error_log' in F:
					D = 0
				if 'access_log' in F:
					D = 0
				if D is 1:
					if 'public_html/' in F:
						try:
							size = os.path.getsize(F)
							wr = str(size) + ':::' + str(F) + '\n'
							f.write(wr)
						except:
							e = 1
				D = 1
		f.close()
		hash = open('/home/size_public_html').read()
		md5 = hashlib.md5(hash).hexdigest()
		print md5
		os.system('rm -rf /home/size_public_html')
		L = 1
		if '9c5302d7c4115dcc4b66da2d5def389c' in md5:
			L = 0
		if L is 1:
			while 1:
				time.sleep(0.5)
				os.system('service httpd stop')
				os.system('echo \'Files Size changed ! danger !!!!\' > /home/lamer_detect.txt')
				print '\nAll Dead\n'
				os.system('python /root/kill.py')
			sys.exit(0)
		print 'pass , md5:', md5
