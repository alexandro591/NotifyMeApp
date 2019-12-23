function notifymeapp(email,app,notification) {
	const data = { 'email': email, 'app': app, 'notification': notification };
	const urlp1="https://notifymeapp.netlify.com/url.html?"
	const ret = [];
	for (let d in data)
		ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
	url = urlp1+ret.join('&');
	window.open(url, '__blank')
}


