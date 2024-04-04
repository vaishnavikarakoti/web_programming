<!DOCTYPE html>
<html>

    <form action="process2.php" method="post">
	<table>
	  <tr> <td>NAME: </td> <td><input type="text" name="nm"></td> </tr>
	  
	  <tr> <td>ADDRESS:</td> <td><input type="text" name="adr"></td> </tr>
	  
	  <tr> <td> CONTACT NO:</td> <td><input type="text" name="cn"></td> </tr>
	  
	  <tr> <td> AGE:</td> <td><input type="text" name="age"></td> </tr>
	  
	  <tr> <td> GENDER:</td> <td> <input type="radio" name="gender" value="male"> Male
                                  <input type="radio" name="gender" value="female"> Female</td>
								  
	  <tr> <td>HOBBIES:</td> <td><input type="checkbox" name="read" value="reading"> Reading
                                 <input type="checkbox" name="crick" value="cricket"> Cricket
                                 <input type="checkbox" name="ch" value="chess"> Chess
                                 <input type="checkbox" name="out" value="outing"> Outing</td></tr>
								 
	  <tr> <td>LOVE TO EAT:</td> <td> <select multiple name="eat[]">
                                       <option>pizza</option>	  
									   <option>noodles</option>
									   <option>ice-cream</option>
									   <option>chocolate</option>
									   </select></td> </tr>
	   
	   <tr> <td><input type="submit" value="Submit"></td> 
            <td><input type="reset" value="Clear"></td> </tr>
	</table>
    </form>

</html>