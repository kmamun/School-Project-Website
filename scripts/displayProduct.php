<?php
 //displayCategory.php
 $cat = stripslashes($cat);
 $query = "SELECT * FROM my_Products WHERE
 product_id = $cat
 ORDER BY product_name ASC";
 $category = mysql_query($query)
 or die(mysql_error());
 $numRecords = mysql_num_rows($category);
 echo "<p><a class=\"noDecoration\"

 href='pages/products.php'><strong><br/>Back to Product Page</strong></a></p>";
 echo "<table border='1px' cellpadding='101'>";
  echo "<tr>
 <td align='center'><strong>Product Name</strong></td>
 <td align='center'><strong>Brand Name</strong></td>
 <td align='center'><strong>Price</strong></td>
 <td align='center'><strong>Description of the Product</strong></td>";
 for ($i = 0; $i < $numRecords; $i++)
 {
 echo "<tr>";
 $row = mysql_fetch_array($category);
 echo "</td><td>";
 echo $row["product_name"];
echo "</td><td align='center'>";

 echo $row["product_brand"];
 echo "</td><td align='center'>";
 printf("$%.2f",$row["product_price"]);
 echo "</td><td align='center'>";
 echo $row["product_description"];
 echo "</td><td align='center'>";
 //echo "<a href=\"purchase.php?prod='".$row["product_id"]."'\">";
 echo "</td></tr>";
 }
 echo "</table><br />";
 ?>