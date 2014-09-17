<?php
   include("../common/header.html");
   ?>
<body>
   <?php
      include("../common/logo.php");
      include("../common/mainmenu.html");
      ?>
   <table summary="Search Options">
      <tr>
         <td>
            <select name="title">
               <option>
                  Select Department            
               </option>
               <option>
                  Food Catagory
               </option>
               <option>
                  Kitchen Stuff
               </option>
               <option>
                  Seasoning and Spices
               </option>
               <option>
                  Resturant Disposables
               </option>
               <option>
                  Cleaning and Sanitation
               </option>
            </select>
         </td>
         <td align="right"><label for="searchItem">Search:</label></td>
         <td><input id="searchItem" type="text" name="searchItem"  size="30"/></td>
         <td><button type="button" ><img src="images/search.ico" alt="Search" width="30" height="15" /></button></td>
      </tr>
   </table>
   <?php
      include("../common/footer.php");
      ?>  
</body>
</html>