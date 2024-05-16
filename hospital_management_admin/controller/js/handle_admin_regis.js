function validateRegistration()
{
        // Get form inputs
        var fullname = document.getElementById('fullname').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var phone = document.getElementById('phone').value;
        var dob = document.getElementById('dob').value;
        var address = document.getElementById('address').value;
        var profile_pic = document.getElementById('profile_pic').value;
        var terms = document.getElementById('terms').checked;
    
        // Regular expression for email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var phoneRegex = /^(\+880)?\s?1[1-9]\d{8}$/;
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

    
        // Validate each field
        if (fullname.trim() === '') {
            document.getElementById('err1').innerText = 'Please enter your full name';
            document.getElementById('err1').style.color = 'red';
            return false;
        }
    
        if (!emailRegex.test(email)) {
            document.getElementById('err2').innerText = 'Please enter a valid email address';
            document.getElementById('err2').style.color = 'red';
            return false;
        }
    
        if (!passwordRegex.test(password)) {
            document.getElementById('err3').innerText = 'Password is not valid';
            document.getElementById('err3').style.color = 'red';
            return false;
        }
    
        if (!phoneRegex.test(phone)) {
            document.getElementById('err4').innerText = 'Please enter a valid phone number';
            document.getElementById('err4').style.color = 'red';
            return false;
        }
    
        if (dob.trim() === '') {
            document.getElementById('err5').innerText = 'Please enter your date of birth';
            document.getElementById('err5').style.color = 'red';
            return false;
        }
    
        if (address.trim() === '') {
            document.getElementById('err7').innerText = 'Please enter your address';
            document.getElementById('err7').style.color = 'red';
            return false;
        }
    
        if (profile_pic.trim() === '') {
         
            document.getElementById('err8').innerText = 'Please upload a profile picture';
            document.getElementById('err8').style.color = 'red';
            return false;
        } 
    
        if (!terms) {
            document.getElementById('err9').innerText = 'Please accept the terms and conditions';
            document.getElementById('err9').style.color = 'red';
            return false;
        }
    
        // If all validations pass, return true to submit the form
        return true;
    
    
}