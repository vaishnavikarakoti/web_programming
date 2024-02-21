<html>
<body>
<form action="catch_form.php" method="get">
<table bgcolor="#EEDFDE" align="center">
<tr><td><th><b>Registration Form</b></th></tr></td>
<tr><td>Username:</td><td><input type="text" name="usernm"/></td></tr>
<tr><td>Password:</td><td> <input type="password" name="pwd" required"></td></tr>
<tr><td>Name: </td><td><input type="text" name="nm"/></td></tr>
<tr><td>Address:</td><td> <input type="text" name="add"></td></tr>
<tr><td>Country: </td><td><select id="Country" name="Country">
         <option>(Please select a country)</option>
		 <option>India</option>
         <option>US</option>
		 <option>Australia</option></select></td></tr>
<tr><td>ZIP Code:</td><td> <input type="text" name="cod"></td></tr>
<tr><td>Email:</td><td> <input type="email" name="email"></td></tr>
<tr><td>Sex: </td><td><label><input type="radio" name="Sex" id="male" value="male" checked>Male</label>
     <label><input type="radio" name="Sex" id="female" value="male">Female</label></td></tr>
<tr><td>Language:</td><td> <label><input type="checkbox" name="langu" value="English" id="english" checked>English
          <input type="checkbox" name="langu" value="Non English" id="non english">Non English</td></tr></label>
<tr><td>About:</td><td> <textarea rows="5" cols="20" name="detail" id="about"></textarea></td></tr>	 
      
	  <tr align="center"><td> <input type="submit" name="submit"> </tr></td>
</table>
</form>
</body>
</html>
