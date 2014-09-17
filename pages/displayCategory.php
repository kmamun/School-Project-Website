 <?php 
		include("../common/header.html");
	include("../scripts/dataBase.php");
		?>
  <body>
    <div id="page">
      <?php
      include("../common/logo.php");

      include ("../common/mainmenu.html");
      ?>
      <div id="content">
        <div id="productList">
          <?php include "../scripts/displayProduct.php" ?>
        </div>      
      </div>
      <?php include("../common/footer.php"); ?>
    </div>
  </body>
</html> 