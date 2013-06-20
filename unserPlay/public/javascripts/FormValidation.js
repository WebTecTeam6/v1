// ----------------   Form Validation -------------------

function validateTrip() {

	var meg = new Array();
	var count = 0;
	var valid = true;

	if (!validateLatitude(document.forms.tripForm.lat, 'lat')) {

		valid = false;
	} else {

		meg[count++] = "Correct latitude.";
	}

	if (!validateLongitude(document.forms.tripForm.lng, 'lng')) {

		valid = false;
	} else {

		meg[count++] = "Correct longitude.";
	}

	var messages = "";
	for ( var i = 0; i < meg.length; i++) {
		messages = messages + meg[i];
		messages = messages + "\n";
	}

	if (valid == true) {

		return false;
	} else {
		return false;
	}
}

// latitude validation
function validateLatitude(valfield, infofield) {

	var valid = false;
	// 47 N
	var regExpOneLat = /^([0-9]{1,2}\s[N])$/;

	// 47.4989N
	var regExpTwoLat = /^([0-9]{1,2}[.][0-9]{1,4}[N])$/;

	// 47°49.89N
	// 47°4989'N
	var regExpThreeLat = /^([0-9]{1,2}[°][0-9]{1,2}[.]?[0-9]{1,2}[']?[N])$/;

	if (valfield.value == "") {

		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else {
		if (regExpOneLat.test(valfield.value) == true) {

			var valuesLat = valfield.value.split(' ');

			var outputLat = pad(valuesLat[0], 2) + '° 00.00\'' + valuesLat[1];
			valid = true;
			msg(infofield, "error", "Right formatting: " + outputLat);
		}

		if (regExpTwoLat.test(valfield.value) == true) {

			var tempLat = valfield.value.substring(0,
					(valfield.value.length - 1));
			var valuesLat = tempLat.split('.');
			var outputLat = pad(valuesLat[0], 2) + '° '
					+ formatValue(valuesLat[1]) + '\'N';
			valid = true;
			msg(infofield, "error", "Right formatting: " + outputLat);
		}

		if (regExpThreeLat.test(valfield.value) == true) {

			if (valfield.value.indexOf('\'') > 0) {
				var tempLat = valfield.value.substring(0,
						(valfield.value.length - 2));
			} else {
				var tempLat = valfield.value.substring(0,
						(valfield.value.length - 1));
			}
			var valuesLat = tempLat.split('°');
			var outputLat = pad(valuesLat[0], 2) + '° '
					+ formatValue(valuesLat[1]) + '\'N';
			valid = true;
			msg(infofield, "error", "Right formatting: " + outputLat);

		}

	}

	if (valid == true) {

		return true;
	} else {
		msg(infofield, "error", "ERROR: invalid latitude.");

		return false;
	}

}

// longitude validation
function validateLongitude(valfield, infofield) {

	var valid = false;
	// 9 E
	var regExpOneLng = /^([0-9]{1,3}\s[E])$/;

	// 9.005E
	var regExpTwoLng = /^([0-9]{1,3}[.][0-9]{1,4}[E])$/;

	// 009°00.50E
	// 9°0.50'E
	var regExpThreeLng = /^([0-9]{1,3}[°][0-9]{1,2}[.]?[0-9]{1,2}[']?[E])$/;

	if (valfield.value == "") {

		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else {

		if (regExpOneLng.test(valfield.value) == true) {
			var valuesLng = valfield.value.split(' ');
			var outputLng = pad(valuesLng[0], 3) + '° 00.00\'' + valuesLng[1];
			msg(infofield, "error", "Right formatting: " + outputLng);
			valid = true;
		}
		if (regExpTwoLng.test(valfield.value) == true) {
			var tempLng = valfield.value.substring(0,
					(valfield.value.length - 1));
			var valuesLng = tempLng.split('.');
			var outputLng = pad(valuesLng[0], 3) + '° '
					+ formatValue(valuesLng[1]) + '\'E';

			msg(infofield, "error", "Right formatting: " + outputLng);
			valid = true;
		}

		if (regExpThreeLng.test(valfield.value) == true) {

			if (valfield.value.indexOf('\'') > 0) {
				var tempLng = valfield.value.substring(0,
						(valfield.value.length - 2));
			} else {
				var tempLng = valfield.value.substring(0,
						(valfield.value.length - 1));
			}
			var valuesLng = tempLng.split('°');
			var outputLng = pad(valuesLng[0], 3) + '° '
					+ formatValue(valuesLng[1]) + '\'E';

			msg(infofield, "error", "Right formatting: " + outputLng);
			valid = true;
		}
	}

	if (valid == true) {

		return true;
	} else {
		msg(infofield, "error", "ERROR: invalid longitude.");

		return false;
	}

}
function clear_error_msg(fId) {

	var elem = document.getElementById(fId);

	if ($(elem).next().hasClass('alert-error')) {
		$(elem).next().remove();
	}
}
function msg(fld, msgtype, message) {
	var elem = document.getElementById(fld);

	if ($(elem).next().hasClass('alert-error')) {
		$(elem).next().remove();
	}
	elem.className = msgtype;
	$(elem).after('<div class="alert-error">' + message + '</div>');
}

function validateOnSubmit() {
	var meg = new Array();
	var count = 0;
	var valid = new Boolean(true);

	if (!validateWindStrength(document.forms.weatherForm.windStrength,
			'windStrength')) {
		valid = false;
	} else {
		meg[count++] = "Correct windStrength.";
	}

	if (!validateAirPressure(document.forms.weatherForm.airPressure,
			'airPressure')) {
		valid = false;
		// return false;
	} else {
		meg[count++] = "Correct airPressure.";
	}

	if (!validateClouds(document.forms.weatherForm.clouds, 'clouds')) {
		valid = false;
	} else {
		meg[count++] = "Correct clouds.";
	}

	if (!validateWaveHight(document.forms.weatherForm.waveHight, 'waveHight')) {
		valid = false;
	} else {
		meg[count++] = "Correct waveHight.";
	}

	if (!validateTemperature(document.forms.weatherForm.temperature,
			'temperature')) {
		valid = false;
	} else {
		meg[count++] = "Correct temperature.";
	}

	if (!validateRain(document.forms.weatherForm.rain, 'rain')) {
		valid = false;
	} else {
		meg[count++] = "Correct rain.";
	}

	if (!validateWaveDirection(document.forms.weatherForm.waveDirection,
			'waveDirection')) {
		valid = false;
	} else {
		meg[count++] = "Correct waveDirection.";
	}

	var messages = "";
	for ( var i = 0; i < meg.length; i++) {
		messages = messages + meg[i];
		messages = messages + "\n";
	}

	if (valid == true) {
		return true;
	} else {
		return false;
	}
}
// _____________________________________________________________________________________________________________________________
// Wind Strength Validation
function validateWindStrength(valfield, infofield) {

	var regExp = /^[0-9]+\.([0-9])$/; // Format: Numbers.OneNumber

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {
		msg(infofield, "error",
				"ERROR: invalid wind strength. Please enter wind strength in format nn.n");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}

// Air Pressure Validation
function validateAirPressure(valfield, infofield) {
	var regExp = /^[0-9]+\.([0-9])$/; // Format: Numbers.OneNumber

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {
		msg(infofield, "error",
				"ERROR: invalid air pressure. Please enter air pressure in format nn.n");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}

// Cloud Validation
function validateClouds(valfield, infofield) {
	var regExp = /^([A-Za-z]{3,})/;

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {

		msg(
				infofield,
				"error",
				"ERROR: invalid cloud expression. Non alphabetical character(s) found or less than 3 characters.");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}

// Wave Hight Validation
function validateWaveHight(valfield, infofield) {
	var regExp = /^[0-9]+\.([0-9])$/;

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {
		msg(infofield, "error",
				"ERROR: invalid wave hight. Please enter wave hight in format nn.n");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}

// Temperature Validation
function validateTemperature(valfield, infofield) {
	var regExp = /^[0-9]+\.([0-9])$/;

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {
		msg(infofield, "error",
				"ERROR: invalid temperature. Please enter temperature in format nn.n degree");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}

// Rain Validation
function validateRain(valfield, infofield) {
	var regExp = /^[0-9]+\.([0-9])$/;

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {
		msg(
				infofield,
				"error",
				"ERROR: invalid rain expression. Please enter rain expression in format nn.n l/m^2");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}

// Direction Validation
function validateWaveDirection(valfield, infofield) {
	var regExp = /^[a-zA-Z]+/;

	if (valfield.value == "") {
		msg(infofield, "error", "ERROR: empty field.");
		return false;
	} else if (regExp.test(valfield.value) == false) {
		msg(infofield, "error", "ERROR: non-letter character(s) found.");
		return false;
	} else {
		clear_error_msg(infofield);
		return true;
	}
}
function pad(num, size) {
	var s = num + "";
	while (s.length < size) {
		s = "0" + s;
	}
	return s;
}

function padReverse(num, size) {
	var s = num + "";
	while (s.length < size) {
		s = s + "0";
	}
	return s;
}
function formatValue(num) {
	var string = num + "";
	var length = string.length;
	var pre = "";
	var post = "";

	if (string.indexOf('.') > 0) {
		var values = string.split('.');

		if (values[0].length < 2) {
			pre = pad(values[0], 2);
		} else {
			pre = values[0];
		}
		if (values[1].length < 2) {
			post = padReverse(values[1], 2);
		} else {
			post = values[1];
		}
	} else {
		if (length < 4) {
			string = padReverse(string, 4);
		}
		pre = string.slice(0, 2);
		post = string.slice(2, 4);
	}

	return pre + "." + post;
}
