
//Wind Strength Validation
function validateFirstname(valfield, infofield) {

    alert("drin!");
    alert("und nochmal drin!");

    var regExp = /^[0-9]+\.([0-9])$/;

    if (valfield.value == "") {
        msg(infofield, "error", "ERROR: empty field.");
        return false;
    }
    else if (regExp.test(valfield.value) == false) {

        msg(infofield, "error", "ERROR: non-number character(s) found.");
        return false;
    }
    else {
        return true;
    }
}

function validateLastname(valfield, infofield) {
    var regExp = /^[0-9]+\.([0-9])$/;

    if (valfield.value == "") {
        msg(infofield, "error", "ERROR: empty field.");
        return false;
    }
    else if (regExp.test(valfield.value) == false) {

        msg(infofield, "error", "ERROR: non-number character(s) found.");
        return false;
    }
    else {
        return true;
    }
}

function validateAge(valfield, infofield) {
    var regExp = /^[0-9]+\.([0-9])$/;

    if (valfield.value == "") {
        msg(infofield, "error", "ERROR: empty field.");
        return false;
    }
    else if (regExp.test(valfield.value) == false) {

        msg(infofield, "error", "ERROR: non-number character(s) found.");
        return false;
    }
    else {
        return true;
    }
}
