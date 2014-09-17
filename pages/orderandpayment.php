<?php
   include("../common/header.html");
   ?>
<body>
   <script type="text/javascript" src="scripts/customerOrderValidation.js"></script>
   <?php
      include("../common/logo.php");
      include("../common/mainmenu.html");
      ?>
   <h4 class="Centered"><br/><br/>Order and Payment</h4>
   <form id="feedbackForm" action="" onsubmit="validateCustomerFeedback()">
      <fieldset>
         <legend>Delivery Details</legend>
         <br/>
         <table summary="Vital Statistics">
            <tr valign="top">
               <td align="right">Title:</td>
               <td>
                  <select name="title">
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
               <td align="right"><label for="fullName">First Name*:</label></td>
               <td><input id="fName" type="text" name="fullName"
                  size="20"/></td>
               <td align="right"><label for="fullName">Last Name*:</label></td>
               <td><input id="lName" type="text" name="fullName"
                  size="20"/></td>
            </tr>
            <tr>
               <td align="right"><label for="deliveryAddress">Address*:</label></td>
               <td><input id="deliveryAddress" type="text" name="deliveryAddress"
                  size="20"/></td>
               <td><label for="orderPcode">Postal code*:</label></td>
               <td><input id="orderPcode" type="text" name="pcode" size="20" /></td>
            </tr>
            <tr>
               <td  align="right"><label for="orderCityName" >City*:</label></td>
               <td><input id="orderCityName" type="text" name="cityName" size="20" /></td>
               <td align="right"><label for="provName">Province*:</label></td>
               <td>
                  <select name="provName">
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
               <td align="right"><label for="phoneNum">Phone*:</label></td>
               <td><input id="phoneNum" type="text" name="phoneNum"
                  size="20"/></td>
            </tr>
            <tr>
               <td><label for="email">Email address*:</label></td>
               <td><input id="email" type="text" name="email" size=
                  "40"/></td>
            </tr>
         </table>
         <br/>
      </fieldset>
      <fieldset>
         <legend>Total purchase<br/></legend>
         <table summary="orderPayment2">
            <tr>
               <td  align="right"><label for="totalParchase" >Total Product Cost :</label></td>
               <td><input id="totalParchase" type="text" name="totalParchase" size="20" /></td>
            </tr>
            <tr>
               <td  align="right"><label for="shipping" >Shipping :</label></td>
               <td><input id="shipping" type="text" name="shipping" size="20"  /></td>
            </tr>
            <tr>
               <td align="right"><input type="radio" name="sShipping" value="dollars"/> Standard shipping -C$0.00<br/></td>
               <td align="right"><input type="radio" name="sShipping" value="dollars"/> Express shipping C-$10.50<br/></td>
            </tr>
            <tr>
               <td  align="right"><label for="total" >Total Cost :</label></td>
               <td><input id="total" type="text" name="total" size="20" /></td>
            </tr>
         </table>
      </fieldset>
      <fieldset>
         <legend>Payment Information<br/></legend>
         <table summary="payInfo">
            <tr align="right">
               <td >
                  <select name="visa">
                     <option>Visa</option>
                     <option>Master Card</option>
                     <option>American Express</option>
                  </select>
               </td>
            </tr>
            <tr>
               <td  ><label for="cHolderName" >Card Holder Name :</label></td>
               <td><input id="cHolderName" type="text" name="cHolderName" size="20" /></td>
            </tr>
            <tr>
               <td  align="right"><label for="cNum" >Card Number :</label></td>
               <td><input id="cNum" type="text" name="cNum" size="20" /></td>
            </tr>
            <tr>
               <td  align="right"><label for="sCode" >Security Code :</label></td>
               <td><input id="sCode" type="text" name="sCode" size="20" /></td>
            </tr>
            <tr>
               <td  align="right"><label for="expiresDate" >Expires* :</label></td>
               <td>
                  <select name="pmonth">
                     <option>01</option>
                     <option>02</option>
                     <option>03</option>
                     <option>04</option>
                     <option>05</option>
                     <option>06</option>
                     <option>07</option>
                     <option>08</option>
                     <option>09</option>
                     <option>10</option>
                     <option>11</option>
                     <option>12</option>
                  </select>
                  <select name="Year">
                     <option>2011</option>
                     <option>2012</option>
                     <option>2013</option>
                  </select>
               </td>
            </tr>
         </table>
      </fieldset>
      <table summary="Processing">
         <tr>
            <td><input type="submit" value="Submit"/></td>
            <td><input type="reset" value="Reset form"/></td>
         </tr>
      </table>
   </form>
   <?php
      include("../common/footer.php");
      ?>  
</body>
</html>