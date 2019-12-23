import subprocess

#-------------------------------------------
#Your variables go here
email="alexandrotapiaflores@gmail.com"

app="notifyme send from ubuntu"

notification="this is your notification\n\
make good use of it\n\
good luck!\n\
wish you my best,! please continue exploring"
#--------------------------------------------

urlp1="http://notifymeapp.ddns.net/url.php?"

email = email.replace(' ','%20').replace('\n','%0A')
app = app.replace(' ','%20').replace('\n','%0A')
notification = notification.replace(' ','%20').replace('\n','%0A')

urlp2="email="+email+"&app="+app+"&notification="+notification

urlFinal=urlp1+urlp2
print(urlFinal)
#Call your browser
subprocess.call('wget --spider '+'"'+urlFinal+'"',shell=True)
