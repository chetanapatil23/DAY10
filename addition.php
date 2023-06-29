<?php
if(isset($_GET["sumbit"])){
if(isset($_GET["number1"])&& isset($_GET["number2"]))
{
	$number1=$_GET["number1"];
	$number2=$_GET["number2"];
	$res=$number1+$number2;
}
}
?>
<html>
<form>
<table>
<tr>
   <td>
     <label>First number:</label>
     <input type="text"name="number1">
   </td>
</tr>
<tr>
   <td>
  <label>Second number:</label>
  <input type="text"name="number2">
  </td>
</tr>
<tr>
   <td>
  <button type="submit" name="sumbit">sumbit</button><br>
  <br>Result:<input type='text' value="<?php echo $res; ?>"><br>
  </td>
</tr>
</table>
</form>
</body>
</html>