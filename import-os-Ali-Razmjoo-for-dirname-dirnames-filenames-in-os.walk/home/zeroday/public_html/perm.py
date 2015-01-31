import os
#Ali Razmjoo
for dirname, dirnames, filenames in os.walk('/home/zeroday/public_html/'): #change directory or copy file to public_html directory and set directory ('.')
        for subdirname in dirnames:
                f = os.path.join(dirname, subdirname)
                f = f[2:]
                cmd = 'chmod 555 ' + str(f) #555 Perm for Folders
                os.system(cmd)
        for filename in filenames:
                f = os.path.join(dirname, filename)
                f = f[2:]
                cmd = 'chmod 444 ' + str(f) #444 Perm for Files
                os.system(cmd)
