<!--#include virtual="../common/header.html"-->

 <body>
 <!--#include virtual="../common/logo.php"-->
  <!--#include virtual="../common/mainmenu.html"-->
  <div id="content">
  
    <form id="feedbackForm" action="" >
	<fieldset>
		<legend>Send email</legend><br/>

		<table>
			<tr><td><label for="fullName">Subject*:</label></td></tr>

			<tr><td><input id="fullName" type="text" name="fullName" size="51"/></td></tr>
			
		</table>
		<table>

			<tr>
				<td><textarea name="message" rows="10" cols="50"></textarea></td>
			</tr>
		</table>
		
	</fieldset>
	<table summary="Processing">
		<tr>
			<td><input type="submit" value="Send"/></td>

			<td><input type="reset" value="Reset form"/></td>
		</tr>
       </table>

</form>
   
  </div>
 <!--#include virtual="../common/footer.php"-->
</body>
</html>
   
 
