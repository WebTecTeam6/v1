<html>
<head><title>sdfasdf</title></head>
<body>
<script type="text/javascript">

function test()
{
var lat = document.forms.tripForm.lat.value;
var lng = document.forms.tripForm.lng.value;

console.log(lat);
console.log(lng);

// 47 N 9 E
var regExpOneLat = /^([0-9]{1,2}\s[N])$/;
var regExpOneLng = /^([0-9]{1,3}\s[E])$/;

// 47.4989N9.005E
var regExpTwoLat = /^([0-9]{1,2}[.][0-9]{1,4}[N])$/;
var regExpTwoLng = /^([0-9]{1,3}[.][0-9]{1,4}[E])$/;

// 47°49.89N 009°00.50E
// 47°4989'N 9°0.50'E
var regExpThreeLat = /^([0-9]{1,2}[°][0-9]{1,2}[.]?[0-9]{1,2}[']?[N])$/;
var regExpThreeLng = /^([0-9]{1,3}[°][0-9]{1,2}[.]?[0-9]{1,2}[']?[E])$/;

// Output: 47 N 9 E -> 47° 00.00'N 009° 00.00'E
var inputLat = '47 N';
var inputLng = '9 E';

var valuesLat = inputLat.split(' ');
var valuesLng = inputLng.split(' ');

var outputLat = pad(valuesLat[0], 2)+'° 00.00\''+valuesLat[1];
var outputLng = pad(valuesLng[0], 3)+'° 00.00\''+valuesLng[1];

console.log(outputLat+' '+outputLng);

// Output: 47.4989N9.005E -> 47° 49.89'N 009° 00.50'E
var inputLat = '47.4989N';
var inputLng = '9.005E';

var tempLat = inputLat.substring(0, inputLat.length-1);
var tempLng = inputLng.substring(0, inputLng.length-1);

var valuesLat = tempLat.split('.');
var valuesLng = tempLng.split('.');

var outputLat = pad(valuesLat[0], 2)+'° '+formatValue(valuesLat[1])+'\'N';
var outputLng = pad(valuesLng[0], 3)+'° '+formatValue(valuesLng[1])+'\'E';

console.log(outputLat+' '+outputLng);

// Output: 47°4989'N 9°0.50'E -> 47° 49.89'N 009° 00.50'E
var inputLat = '47°4989\'N';
var inputLng = '9°0.50\'E';

if (inputLat.indexOf('\'') > 0)
	var tempLat = inputLat.substring(0, inputLat.length-2);
else
	var tempLat = inputLat.substring(0, inputLat.length-1);
	
if (inputLng.indexOf('\'') > 0)
	var tempLng = inputLng.substring(0, inputLng.length-2);
else
	var tempLng = inputLng.substring(0, inputLng.length-1);
	
var valuesLat = tempLat.split('°');
var valuesLng = tempLng.split('°');

var outputLat = pad(valuesLat[0], 2)+'° '+formatValue(valuesLat[1])+'\'N';
var outputLng = pad(valuesLng[0], 3)+'° '+formatValue(valuesLng[1])+'\'E';

console.log(outputLat+' '+outputLng);

return false;
}

function pad(num, size) {
    var s = num+"";
    while (s.length < size) s = "0" + s;
    return s;
}

function padReverse(num, size) {
    var s = num+"";
    while (s.length < size) s = s + "0";
    return s;
}

function formatValue(num) {
	var string = num+"";
	var length = string.length;
	var pre = "";
	var post = "";
	
	if (string.indexOf('.') > 0) {
		var values = string.split('.');
		
		if (values[0].length < 2)
			pre = pad(values[0], 2);
		else
			pre = values[0];
			
		if (values[1].length < 2)
			post = padReverse(values[1], 2);
		else
			post = values[1];
			
	}
	else {
		if (length < 4)
			string = padReverse(string, 4);
		
		pre = string.slice(0,2);
		post = string.slice(2,4);
	}
	
	return pre+"."+post;
}
/*
function formatValue(num) {
	var string = num+"";
	var count = 0;
	var numInt = parseInt(num);
	var output = "";
	
	for (index = 0; index < string.length; index++) {
		if (string.charAt(index) == '0')
			count++;
		else
			break;
	}
	
	switch (count) {
		case 0:
			output = numInt;
			break;
			
		case 2:
			output = "00."+numInt;
			break;
			
		case 3:
			output = "00.0"+numInt;
			break;
	}
	
	console.log(parseFloat(output).toFixed(2));
}
*/
</script>
<form name="tripForm" onsubmit="return test();">
Lat <input name="lat" type="text" /><br />
Lng <input name="lng" type="text" />
<br /><input type="submit" />
</form>
</body>
</html>