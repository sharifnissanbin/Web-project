function validateForm(event) {
    var isValid = true;
    var errorMessage = "";

    var username = document.getElementById("username");
    if (username === "") {
        isValid = false;
        errorMessage += "User Name is required.\n";
    }

    var email = document.getElementById("email");
    if (email === "") {
        isValid = false;
        errorMessage += "Email is required.\n";
    }

    var op = document.getElementById("op");
    if (op === "") {
        isValid = false;
        errorMessage += "Select Operator is required.\n";
    }

    var phone = document.getElementById("phone");
    if (phone === "") {
        isValid = false;
        errorMessage += "Phone Number is required.\n";
    }

    var rphone = document.getElementById("rphone");
    if (rphone === "") {
        isValid = false;
        errorMessage += "Recipient Phone Number is required.\n";
    }

    var pm = document.getElementById("pm");
    if (pm === "") {
        isValid = false;
        errorMessage += "Select Payment Method is required.\n";
    }

    var pin = document.getElementById("pin");
    if (pin === "") {
        isValid = false;
        errorMessage += "Pin Number is required.\n";
    }

    var refer = document.getElementById("refer");
    if (refer === "") {
        isValid = false;
        errorMessage += "Reference is required.\n";
    }

    if (!isValid) {
        alert(errorMessage);
        event.preventDefault(); // error ashle form submit korbena server er kache
    }

    return isValid;
}