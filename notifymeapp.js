function notifymeapp(email,app,notification) {
	const data = { 'email': email, 'app': app, 'notification': notification };
	const urlp1="http://notifymeapp.ddns.net/url.php?"
	const ret = [];
	for (let d in data)
		ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
	url = urlp1+ret.join('&');
	$.get(url)
}


