<!--#include virtual="../common/header.html"-->

<body>
<script type="text/javascript" src="scripts/validateSignUp.js">
    </script>

 <!--#include virtual="../common/logo.php"-->
  <!--#include virtual="../common/mainmenu.html"-->
        

<form id="custometSignupForm" action="" onsubmit="validateSignUpInformation()">
    <fieldset>
      <legend>Customer Information</legend>
	      <table summary="signup">

        <tr>
			<td align="left"><label for="signUpFirstName">First Name
			:</label></td>
			<td align="left"><label for="signUpLastName">Last Name
			:</label></td>
		</tr>
		<tr>
          <td><input id="signUpFirstName" type="text" name="signUpFirstName"
          size="40"/></td>
		  <td><input id="signUpLastName" type="text" name="signUpLastName"
          size="40"/></td>
		</tr>

        <tr>
			<td align="left"><label for="signUpStreetAddress1">Street Address 1
            :</label></td>
			<td align="left"><label for="signUpStreetAddress2">Street Address 2
             :</label></td>
		</tr>
		<tr>
          <td><input id="signUpStreetAddress1" type="text" name="signUpstAddress1"
          size="20"/></td>
		  <td><input id="signUpStreetAddress2" type="text" name="signUpstAddress2"
          size="20"/></td>
		</tr>

        <tr>
			<td align="left"><label for="signUpstCity">City
            :</label></td>
			<td>
			<label for="signUpFirstName">State</label>
			<label for="signUpZipCode">Zip Code</label>
			</td>	
		</tr>
		<tr>
          <td><input id="signUpstCity" type="text" name="signUpstCity"
          size="20"/></td>
		  
		
		  <td><select name="title">
            <option>
              NS
            </option>

            <option>
              NB
            </option>

            <option>
              ON
            </option>

            <option>
              MO
            </option>
          </select>

		  <input id="signUpZipCode" type="text" name="signUpZipCode"
          size="20"/>
		  </td>
		</tr>

          <tr><td align="left"><label for="signUpPhoneNum">Phone Number
          :</label></td>
<td align="left"><label for="signUpEmail">Email address* :</label></td>
          
        </tr>

        <tr>
<td><input id="signUpPhoneNum" type="text" name="signUpPhoneNum"
          size="20"/></td>
          

          <td><input id="signUpEmail" type="text" name="email" size=
          "40"/></td>
        </tr>
<tr>
        <td><input type="submit" value="Submit"/>

        <input type="reset" value="Reset form"/></td>
      </tr>

      </table>

    </fieldset>
</form>
    <!--#include virtual="../common/footer.php"-->
 </body>
</html>
