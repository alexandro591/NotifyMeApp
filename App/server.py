import imaplib
import base64
import re
import  time
from pynput.keyboard import Controller, KeyCode

email_user = "notifymelocalhost@gmail.com"
email_pass = "elhuevo591"
print("-----------------------------------------------------------------------------------")
while(True):
    try:
        M = imaplib.IMAP4_SSL('imap.gmail.com', 993)
        M.login(email_user, email_pass)
        M.select()
        typ, message_numbers = M.search(None, 'ALL')
        for num in message_numbers[0].split():
            typ, data = M.fetch(num, '(RFC822)')
            message = str(data[0][1].decode('utf-8'))
            message = message.replace('\n', '').replace('\r', '').replace('=', '').replace('***',' ')
            try:
                email = str(re.search('XXX(.+?)XXX', message).group(1))
                app = str(re.search('YYY(.+?)YYY', message).group(1))
                notification = str(re.search('ZZZ(.+?)ZZZ', message).group(1)).lower().replace('---','\n')
                print("to: " + email)
                print("application: " + app)
                print("body:\n" + notification)
                print("-----------------------------------------------------------------------------------")
                if(email=="alexandrotapiaflores@gmail.com"):
                    if(("spotify" in notification or "youtube" in notification or "music" in notification) and ("play" in notification or "stop" in notification or "pause" in notification or "para" in notification)):
                        keyboard = Controller()
                        keyboard.press(KeyCode.from_vk(0xB3))
                        
            except :
                print("A problem has occured")
                print("-----------------------------------------------------------------------------------")
            M.store(num, '+FLAGS', '\\Deleted')
        M.close()
        M.logout()
    except:
        print("An error has occurred, if it persists restart the server")
        print("-----------------------------------------------------------------------------------")