

function validateCustomerFeedback()
{
	
    var contactFormObj = document.getElementById("feedbackForm");

    // Delivary detail
    var fName = contactFormObj.fName.value;
    var lName = contactFormObj.lName.value;
    var delvAddress = contactFormObj.deliveryAddress.value;
    var orderCityName = contactFormObj.orderCityName.value;
    var orderPcode = contactFormObj.orderPcode.value;
   
    var phone = contactFormObj.phoneNum.value;
    var email = contactFormObj.email.value;

    // Payment Information
    var cHolderName = contactFormObj.cHolderName.value;
    var cNum = contactFormObj.cNum.value;
    var sCode = contactFormObj.sCode.value;
     

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

    if (!validateDelvAddress(delvAddress))
    {
        alert("Error: Invalid delivery address.");
        everythingOK = false;
    }
    if (!validateCityName(orderCityName))
    {
        alert("Error: Invalid city name.");
        everythingOK = false;
    }
     if (!validatePostalCode(orderPcode))
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
   

    
  
    // Payment Information

	 if (!validateCardHolderName(cHolderName))
    {
        alert("Error: Invalid card holder name.");
        everythingOK = false;
    }
    
    if (!validateCardNumber(cNum))
    {
        alert("Error: Invalid card number.");
        everythingOK = false;
    }
    if (!validateSecurityCode(sCode))
    {
        alert("Error: Invalid security code.");
        everythingOK = false;
    }

    // End of payment section 

    if (everythingOK)
    {
        alert("Thank you for your having business with us!");
        return true;
    }

    else
        return false;
}
// Functions for Delivery Information

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

function validateDelvAddress(delvAddress)
{
    var p = delvAddress .search(/^([0-9]+ )?[a-zA-Z ]+$/);
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

function validateEmail(address)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}
function validatePostalCode(orderPcode)
{
    var p = orderPcode.search(/^([a-zA-Z]\d[a-zA-z]( )?\d[a-zA-Z]\d)$/);
    if (p == 0)
        return true;
    else
        return false;
}
function validateCityName(orderCityName)
{
    var p = orderCityName.search(/^[-'\w\s]+$/);
    if (p == 0)
        return true;
    else
        return false;
}


// Payment Info functions

function validateCardHolderName(cHolderName)
{
    var p = cHolderName.search(/^[a-zA-Z]+( )[a-zA-Z]+$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateCardNumber(cNum)
{
    var p1 = cNum.search(/^4[0-9]{12}(?:[0-9]{3})?$/);
    var p2 = cNum.search(/^5[1-5][0-9]{14}$/);
    var p3 = cNum.search(/^3[47][0-9]{13}$/);

    if (p1 == 0 || p2 == 0 || p3 == 0)
        return true;
    else
        return false;
}

function validateSecurityCode(sCode)
{
    var p = sCode.search(/\d{3}/);
    if (p == 0)
        return true;
    else
        return false;
}
