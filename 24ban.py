#!/usr/bin/python 
import os,hashlib,subprocess,signal,time,multiprocessing,time,sys,httplib,pickle,socket,re,urllib2 #import modules
stop_event = multiprocessing.Event() 
while 1:
	time.sleep(0.2)
	os.system('netstat -ntu | awk \'{print $5}\' | cut -d: -f1 | sort | uniq -c | sort -n >> /root/IPz.txt') 
	file = open('/root/IPz.txt')  
	for line in file:
		ip = line
		Ban = 0
		word_num = 0
		words = ip.split()
		for text_word in words:
			word_num += 1
			if word_num is 1:
				if int(text_word) > 20: 
					Ban = 1
				if word_num is 2:
					if Ban is 1:
						if '.' in text_word:
							skip = 0
							if '127.0.0.1' or '176.9.183.142' or '79.175.163.84' in text_word:
								skip = 1
							if skip is 0:	
								deny = 'iptables -I INPUT -s %s -j DROP' %text_word # it use iptables to ban users
								os.system(deny)
								deny = 'iptables -A INPUT  -s %s -j DROP' %text_word
								os.system(deny)
								os.system('service iptables-persistent save')
								os.system('service iptables-persistent restart')
								ipsave = open('/root/Banned.txt','a') #save ip banned for me
								ip_add = text_word + '\n'
								ipsave.write(ip_add)
								ipsave.close()	
	os.system('rm -rf /root/IPz.txt')		
