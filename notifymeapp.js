function notifymeapp(email,app,notification) {
	const data = { 'email': email, 'app': app, 'notification': notification };
	const urlp1="https://notifymeapp.netlify.com/url?"
	const ret = [];
	for (let d in data)
		ret.push(encodeURIComponent(d) + '=' + encodeURIComponent(data[d]));
	querystring = urlp1+ret.join('&');
	console.log(querystring)
	$.get(querystring, function(data){console.log(data)})
}


