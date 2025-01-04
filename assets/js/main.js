let currentDate = new Date;
let currentYear = currentDate.getFullYear();
let years = document.getElementById('years');
if (currentYear > 2020) years.innerHTML = '2020 - ' + currentYear
	else years.innerHTML = '2020'
let hostName = document.location.href;
let hostNameLink = document.querySelector('.host-name');
hostNameLink.innerHTML = hostName;
