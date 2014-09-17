<?php
   include("../common/header.html");
   ?>
<body>
   <?php
      include("../common/logo.php");
      include("../common/mainmenu.html");
      ?>
   <div id="content">
      <form id="loginForm" name="loginForm" action=""
         onsubmit="return validateSignInForm();">
      <form id="sifnInForm" action="" onsubmit="return validateSignInForm();">
         <table>
            <tr>
               <td><label for="userName">Email or Phone*:</label></td>
            </tr>
            <tr>
               <td><input id="userName" type="text" name="userName" size="30"/></td>
            </tr>
            <tr>
               <td><label for="passWord">Password*:</label></td>
            </tr>
            <tr>
               <td><input id="passWord" type="text" name="passWord" size="30"/></td>
            </tr>
            <tr>
               <td><input type="submit" value="Log In"/></td>
            </tr>
         </table>
      </form>
   </div>
   <?php
      include("../common/footer.php");
      ?> 
</body>
</html>