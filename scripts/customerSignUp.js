function validateCustomerSignUp() {
    var customerSignUp = document.getElementById("signUpForm");

    var fName =    customerSignUp.signUpFirstName.value;
    var lName =    customerSignUp.signUpLastName.value;
    var Address =  customerSignUp.signUpAddress.value;
    var CityName = customerSignUp.signUpCityName.value;
    var Pcode =    customerSignUp.signUpPcode.value;
    var phone =    customerSignUp.signUpPhone.value;
    var email =    customerSignUp.signUpEmail.value;

    var custUsername = customerSignUp.customerUserName.value;
    var custPassword = customerSignUp.customerPasswordPcode.value;
       
    var everythingOK = true;
    
    if (!validateFirstName(fName))
    {
        alert("Error: Invalid first name.");
        everythingOK = false;
    }
    if (!validateLastName(lName))
    {
        alert("Error: Invalid last name.");
        everythingOK = false;
    }

    if (!validateDelvAddress(Address))
    {
        alert("Error: Invalid delivery address.");
        everythingOK = false;
    }
    if (!validateCityName(CityName))
    {
        alert("Error: Invalid city name.");
        everythingOK = false;
    }
     if (!validatePostalCode(Pcode))
    {
        alert("Error: Invalid postal code.");
        everythingOK = false;
    }
    
    
   
    if (!validatePhone(phone))
    {
        alert("Error: You have entered a invalid phone number.\nYour phone # should be 7 digit after area code.");
        everythingOK = false;
    }
    
    if (!validateEmail(email))
    {
        alert("Error: Invalid e-mail address.");
        everythingOK = false;
    }
  
  
       else

        return false;
}

function validateFirstName(fName)
{
    var p = fName .search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}
function validateLastName(lName)
{
    var p = lName .search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateDelvAddress(Address)
{
    var p = Address .search(/^([0-9]+ )?[a-zA-Z ]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validatePhone(phone)
{
    var p1 = phone.search(/^\d{3}[-\s]{0,1}\d{3}[-\s]{0,1}\d{4}$/);
    var p2 = phone.search(/^\d{3}[-\s]{0,1}\d{4}$/);
    if (p1 == 0 || p2 == 0)
        return true;
    else
        return false;
}

function validateEmail(email)
{
    var p = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}
function validatePostalCode(Pcode)
{
    var p = Pcode.search(/^([a-zA-Z]\d[a-zA-z]( )?\d[a-zA-Z]\d)$/);
    if (p == 0)
        return true;
    else
        return false;
}
function validateCityName(CityName)
{
    var p = CityName.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}



