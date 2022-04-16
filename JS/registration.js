//FORM VALIDATION

function validateform() {
    // EMAIL Validation

    var myEmail = document.getElementById("email").value;
    var myEmailConfirm = document.getElementById("emailConf").value;
    var errorlist = [];

    //EMAIL Match
    if (myEmail != myEmailConfirm) {
        errorlist.push("Email does not match!!!");
    }

    if (errorlist.length > 0) {
        alert(errorlist.join("\n"));
        return false;
    }

    // PASSWORD Validation
    var myPass = document.getElementById("password").value;
    var p2 = document.getElementById("pass2").value;
    // Restricts password length
    if (myPass.length < 6) {
        alert("Password must be at least 6 characters long!!");
        return false;
    }

    // // PASSWORD MATCH
    if (myPass != p2) {
        alert("Password does not match!!!");
        return false;
    }

    var errorlist = [];
    //Checks for Lowercase letter's presence
    if (myPass.search(/[a-z]/) < 0) {
        errorlist.push("Your password must contain at least one Lowercase letter!!");
    }

    // Checks for Uppercase letter's presence
    if (myPass.search(/[A-Z]/) < 0) {
        errorlist.push("Your password must contain at least one Uppercase letter!!");
    }

    // Checks for numeric digit's presence
    if (myPass.search(/[0-9]/) < 0) {
        errorlist.push("Your password must contain at least one digit!!");
    }

    // Checks for special character's presence
    if (myPass.search(/[!*@#$%^&*]/) < 0) {
        errorlist.push("Your password must contain at least one special character!!");
    }

    // Lists all the errors present in password
    if (errorlist.length > 0) {
        alert(errorlist.join("\n"));
        return false;
    }

    // Checks if fname is filled or not
    var name = document.getElementById("username").value;

    if (name.length == 0) {
        alert("Name must be filled out!!");
        return false;
    }


    // Validate Telephone Number
    var tele = document.getElementById("contact").value;

    if (tele.search(/[0-9]/) < 0) {
        alert("Contact can only contain numeric values!!");
        return false;
    }


}

