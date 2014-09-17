function validateSignInForm()
{
   var userName = sifnInForm.userName .value;
   var passWord = sifnInForm.passWord .value;
   var check = true;
   if (!validateWord(customer_nm))
   {
       alert("Error: Invalid username!");
       check = false;
   }
   if (!validateWord(customer_pw))
   {
       alert("Error: Invalid password!");
       check = false;
   }
   return check;
}

function validateWord(name)
{
    var p1 = name.search(/^\w+$/);
    return (p1 == 0) ? true : false;
}