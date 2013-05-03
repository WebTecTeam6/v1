
//Wind Strength Validation
function validateFirstname(valfield, infofield) {

    alert("drin!");
    alert(valfield);

    var regExp = /^[0-9]+\.([0-9])$/;

    if (valfield.value == "") {
        msg(infofield, "error", "ERROR: empty field.");
        alert(infofield, "error", "ERROR: empty field.");
        return false;
    }
    else if (regExp.test(valfield.value) == false) {

        msg(infofield, "error", "ERROR: non-number character(s) found.");
        return false;
    }
    else {
        alert("prüfung ok");
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
