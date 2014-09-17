function validateCustomerFeedback()
{
    var contactFormObj = document.getElementById("feedbackForm");
    var fullName = contactFormObj.fullName.value;
    var memberId = contactFormObj.memberId.value;
    var phone = contactFormObj.phoneNum.value;
    var email = contactFormObj.email.value;
    var everythingOK = true;
    
    if (!validateName(fullName))
    {
        alert("Error: Invalid name.");
        everythingOK = false;
    }

    //if (!validateMemberId(memberId))
    //{
        //alert("Error: Invalid member ID.\n Example(A12345)");
        //everythingOK = false;
    //}

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
    
    if (everythingOK)
    {
        alert("Thank you for your feedback!");
        return true;
    }
    else
        return false;
}

function validateName(name)
{
    var p = name.search(/^[-'\w\s]+$/);
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
function validateMemberId(memberId)
{
    var p = name.search(/[A-Z]_\d{5}/);
    if (p == 0)
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
