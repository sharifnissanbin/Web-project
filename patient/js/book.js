function validateForm(event) {
    var isValid = true;
    var errorMessage = "";

    var doctorName = document.getElementById("doctorname");
    if (doctorName === "") {
        isValid = false;
        errorMessage += "Doctor Name is required.\n";
    }

    var schedule = document.getElementById("schedule");
    if (schedule === "") {
        isValid = false;
        errorMessage += "Schedule is required.\n";
    }

    var patientName = document.getElementById("patientname");
    if (patientName === "") {
        isValid = false;
        errorMessage += "Patient Name is required.\n";
    }

    var phoneNumber = document.getElementById("phonenumber");
    if (phoneNumber === "") {
        isValid = false;
        errorMessage += "Phone Number is required.\n";
    }

    var problemStatement = document.getElementById("problemstatement");
    if (problemStatement === "") {
        isValid = false;
        errorMessage += "Problem Statement is required.\n";
    }

    if (!isValid) {
        alert(errorMessage);
        event.preventDefault(); 
    }

    return isValid;
}
