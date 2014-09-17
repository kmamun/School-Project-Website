<?php
 //showProductCatagory.php
 $query = "SELECT * FROM  CODE 
 WHERE Ref_Date =2000 AND Value >120000";
 $category= mysql_query($query)
 or die(mysql_error());
 $numRecords = mysql_num_rows($category);
 $catCount = 0;
 $currentDepartment = "";
 echo "<table><tr><td><ul>";
echo ("Year"."&nbsp; "."Gender"."  "."Value"." &nbsp;&nbsp;&nbsp; "."INCOME"."</br>");
 for ($i = 0; $i < $numRecords; $i++)
 {
 $row = mysql_fetch_array($category);
 if ($currentDepartment != $row["Ref_Date"])
 {
 if ($currentDepartment != "") echo "</ol></li>";
 if ($catCount > $numRecords/2)
 {
 echo "</ul></td><td valign='top'><ul>";
 $catCount = 0;
 }
 $currentDepartment = $row["Ref_Date"];

 }
echo ("$row[Ref_Date]"."  "."$row[SEX]"."  "."$row[Value]"."  "."$row[INCOME]");
echo ("<br />");
 $catCount++;
 }
 echo "</ol></li></ul></td></tr></table>";
 ?>