<?php
   include("../common/header.html");
   ?>
<body>
   <script type="text/javascript" src="scripts/customerFeedbackValidation.js"></script>
   <?php
      include("../common/logo.php");
      include("../common/mainmenu.html");
      ?>
   <h4 class="Centered"><br/><br/>Customer satisfaction</h4>
   <p>Your opinion has weight! We encourage<br/>
      you to appraise our services.<br/><br/>
   </p>
   <form id="feedbackForm" onsubmit="return validateCustomerFeedback()" 
      action="scripts/customerFeedbackCollection.php" method="post">
      <fieldset">
         <legend>Customer Info</legend>
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
               <td align="right"><label for="fullName">Full Name*
                  :</label>
               </td>
               <td><input id="fullName" type="text" name="fullName"
                  size="20"/></td>
               <td><label for="memberId">Member Id:</label></td>
               <td><input id="memberId" type="text" name="memberId"
                  size="20"/></td>
               <td align="right"><label for="phoneNum">Phone Number
                  :</label>
               </td>
               <td><input id="phoneNum" type="text" name="phoneNum"
                  size="20"/></td>
            </tr>
            <tr>
               <td><label for="email">Email address* :</label></td>
               <td><input id="email" type="text" name="email" size=
                  "40"/></td>
            </tr>
         </table>
         <br/>
      </fieldset>
      <fieldset>
         <legend>Feedback</legend>
         <br/>
         Overall, how satisfied were you with the product / service?
         <table summary="feedback1">
            <tr>
               <td></td>
            </tr>
            <tr>
               <td><input type="radio" name="overallsat" value="Very Satisfied"/>
                  Very Satisfied
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="overallsat" value="Satisfied"/>
                  Satisfied
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="overallsat" value="Nutral"/>
                  Nutral
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="overallsat" value="Unsatisfied"/>
                  Unsatisfied
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="overallsat" value="No Comments"/>
                  No Comments
               </td>
            </tr>
         </table>
         <br/>
         Would you recommend our product / service to colleagues or
         contacts within your industry?
         <table summary="feedback2">
            <tr>
               <td><input type="radio" name="recommend" value="lb"/>
                  Definitely
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="recommend" value="lb"/>
                  Probably
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="recommend" value="lb"/>
                  Not Sure
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="recommend" value="lb"/>
                  Probably Not
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="recommend" value="lb"/>
                  Definitely
               </td>
            </tr>
         </table>
         What aspect of the product / service were you most
         satisfied by?
         <table summary="feedback3">
            <tr>
               <td></td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/>
                  Quality
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/>
                  Price
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/>
                  Purchase Experience
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/>
                  Installation or First Use Experience
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/> Usage
                  Experience
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/>
                  Customer Service
               </td>
            </tr>
            <tr>
               <td><input type="radio" name="aspect" value="lb"/>
                  Repeat Purchase Experience
               </td>
            </tr>
         </table>
         <br/>
         <table>
            <tr valign="top">
               <td>Comments*</td>
               <td>
                  <textarea name="message" rows="10" cols="50">
                  </textarea>
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