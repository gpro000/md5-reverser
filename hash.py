import hashlib
import sys

if sys.version_info[0] !=3: 
	print("try : python3 hash.py")
	sys.exit()
	
print('\n\033[1;31m-----------> Welcome To hash reverser <-----------\n')
print('------------------> Gue Rachid <------------------\n')
print('\033[0;1m')
statu = 0
pass_hash = input("\n[+] Md5 hash > ")
wordlist = input("\n[+] File name > ")
try:
	pass_file = open(wordlist ,"r")
except:
	print("\033[1;5m\n[!] No file found!!!\033[0;1m\n")
	quit()
for word in pass_file:
	enc_wrd = word.encode('utf-8')
	digest = hashlib.md5(enc_wrd.strip()) .hexdigest()
	if digest.strip() == pass_hash.strip():
		print("\033[0;1m\n[+] The Password is > " + word)
		print("\033[1;5m\n[+] Done\033[0;1m\n")
		statu = 1
		break
if statu == 0:
	print("\033[1;5m\n[!] The Password not in the list!!!\033[0;1m\n")
