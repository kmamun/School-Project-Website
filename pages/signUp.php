<?php
   include("../common/header.html");
   include("../scripts/dataBase.php");
   ?>
<body>
   <?php
      include("../common/logo.php");
      include("../common/mainmenu.html");
      ?>
   <div id="content">
      <form id="signUpForm" name="signUpForm" action="pages/registration.php"
         method="post" onsubmit="return customerSignUp();">
         <table summary="signUpInformation">
            <tr valign="top">
               <td align="right">Title:</td>
               <td>
                  <select name="signUptitle">
                     <option>
                        Mrs.
                     </option>
                     <option>
                        Ms.
                     </option>
                     <option>
                        Mr.
                     </option>
                     <option>
                        Dr.
                     </option>
                  </select>
               </td>
            </tr>
            <tr>
               <td align="right"><label for="signUpFirstName">First Name*:</label></td>
               <td><input id="signUpFirstName" type="text" name="signUpFirstName"
                  size="20"/></td>
               <td align="right"><label for="signUpLastName">Last Name*:</label></td>
               <td><input id="signUpLastName" type="text" name="signUpLastName"
                  size="20"/></td>
            </tr>
            <tr>
               <td align="right"><label for="signUpAddress">Address*:</label></td>
               <td><input id="signUpAddress" type="text" name="signUpAddress"
                  size="20"/></td>
               <td><label for="signUpPcode">Postal code*:</label></td>
               <td><input id="signUpPcode" type="text" name="signUpPcode" size="20" /></td>
            </tr>
            <tr>
               <td  align="right"><label for="signUpCityName" >City*:</label></td>
               <td><input id="signUpCityName" type="text" name="signUpCityName" size="20" /></td>
               <td align="right"><label for="signUpProvName">Province*:</label></td>
               <td>
                  <select name="signUpProvName">
                     <option> </option>
                     <option>Nova Scotia</option>
                     <option>Quebec</option>
                     <option>Ontario</option>
                     <option>British Columbia</option>
                     <option>Northwest Territories</option>
                     <option>Alberta</option>
                     <option>Saskatchewan</option>
                     <option>Manitoba</option>
                     <option> Newfoundland</option>
                     <option>New Brunswick</option>
                     <option>Prince Edward Island</option>
                  </select>
               </td>
            </tr>
            <tr>
               <td align="right"><label for="signUpPhone">Phone*:</label></td>
               <td><input id="signUpPhone" type="text" name="signUpPhone"
                  size="20"/></td>
            </tr>
            <tr>
               <td align="right"><label for="customerUserName">User Name:</label></td>
               <td><input id="customerUserName" type="text" name="customerUserName"
                  size="20"/></td>
               <td><label for="customerPasswordPcode">Password*:</label></td>
               <td><input id="customerPasswordPcode" type="text" name="customerPasswordPcode" size="20" /></td>
            </tr>
            <tr>
               <td><label for="signUpEmail">Email address*:</label></td>
               <td><input id="signUpEmail" type="text" name="signUpEmail" size=
                  "40"/></td>
            </tr>
         </table>
         <table summary="Processing">
            <tr>
               <td><input type="submit" value="Sign Up"/></td>
            </tr>
         </table>
      </form>
   </div>
   <?php
      include("../common/footer.php");
      ?>
   <!--#include virtual=-->
</body>
</html>