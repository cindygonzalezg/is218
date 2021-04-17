<?php
function input_check()
{
    var fname = document . getElementById("FirstName") . value;
    var lname = document . getElementById("LastName") . value;
    var email = document . getElementById("Email") . value;

    var
    check_1 = none_checker(fname, "error_report_1");
    if (check_1) {
        var check_2 = number_checker(fname, "error_report_1");
    }

    var
    check_3 = none_checker(lname, "error_report_2");
    if (check_3) {
        var check_4 = number_checker(lname, "error_report_2");
    }

    var
    check_5 = none_checker(email, "error_report_3");
    if (check_5) {
        var check_6 = number_checker(email, "error_report_3");
    }

    if (check_1 && check_2 && check_3 && check_4 && check_5 && check_6) {
        document . getElementById("error_report_1") . innerHTML = "&nbsp;";
        document . getElementById("error_report_2") . innerHTML = "&nbsp;";
        document . getElementById("error_report_3") . innerHTML = "&nbsp;";
        alert("Submitted Successfully!");
    }
}

function none_checker(input_string, output_string){
    if (input_string.length){
        return true;
    }
    else {
        document.getElementbyId(output_string).innerHTML = "Please fill in the input field";
        return false;
    }
}

function email_checker(input_string, output_string) {
    var hasAt= false;
    for (var i = 0; i < input_string.length; i++) {
        if(input_string.charAt(i) == "@") {
            hasAt = true;
        }
        if(hasAt && input_string.charAt(i) == ".") {
            return true;
        }
    }
    document.getElementById(output_string).innerHTML= "Please input valid email address!";
    return false;
}

function number_checker (input_string, output_string) {
    for (var i=0; i< input_string.length; i++) {
        if (input_string.charAt(i) >= '0' && input_string.charAt(i) <='9' ) {
            document.getElementbyID(output_string).innerHTML= "number is not allowed here";
            return false;
        }
    }
    return true;
}

function password_checker(input_string, output_string) {
    if (input_string.length < 8 && input_string.length > 30){
        document.getElementById(output_string).innerHTML= "Your password must be between 8 and 30 characters!";
        return false;
    }
    var hasUpper= false;
    var hasLower= false;
    for (var i = 0; i < input_string.length; i++) {
        if(input_string.charAt(i) == "^(?=.*[A-Z])") {
            hasUpper = true;
        }
    }
    for (var i = 0; i < input_string.length; i++) {
        if (input_string . charAt(i) == "^(?=.*[a-z])") {
            hasLower = true;
        }
    }

    for (var i = 0; i < input_string.length; i++) {
        if (input_string . charAt(i) == "^(?=.*\\d)") {
            if (hasUpper == true && hasLower == true){
                return true;
            }
        }
    }


    document.getElementById(output_string).innerHTML= "Please input valid email address!";
    return false;
}