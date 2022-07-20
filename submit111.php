
<?php //include('process2.php') ?>
<html>
<head>
<title>Online Hotel Reservation</title>
<script>
function fun()
{
var x=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(document.getElementById('t1').value.match(x))
alert("the entered email is verified and correct and matched with the pattern");
else
alert("please enter the correct email");
}
</script>
</head>
<form method="POST" action="process2.php">
<body>
<center><h1>Hotel Reservation</h1></center>
<p><font color="red">* </font> - required fields</p>
<hr size="4" color="blue">
<fieldset>
<legend>login</legend>
<!--<p><lable>First Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="text" size="50" placeholder="fill the name" required></label></p>
<p><lable>Last Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="text" size="50" required></label></p>-->
<p><lable>Phone:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="tel" pattern="[0-9]{10}" size="50" name="phone" required></label></p>
<!--<p><lable>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  <input type="email" size="50" id="t1" required></label></p>
<p><label>email_password:<input type="password" required></label></p>-->
<p><label>Arrival date:&nbsp&nbsp&nbsp&nbsp <input type="date"  name="arrival" required ></label></p>
<p><label>Departure date:&nbsp&nbsp<input type="date"  name="date" required></label></p>
<p><label>Arrival time:&nbsp&nbsp&nbsp&nbsp <input type="time" name="time" required></label>
<label>Departure time:&nbsp&nbsp<input type="time" name="timeout" required></label></p>
<p><label>No of Adults:&nbsp&nbsp&nbsp&nbsp <input type="number" min="0"max="100"  ></label></p>
<p><label>No of Children:&nbsp <input type="number" min="0"max="100"  ></label></p>
<p><label>select room:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><select><option selected hidden style="none">room type</option>
<option>normal</option>
<option>delux</option>
<option>super_delux</option></select>
<label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspfood_type:</label><select><option selected hidden style="none"> food_type</option>
<option>veg</option>
<option>non_veg</option>
</select></p>
<p>OPTIONS: </p>
<p><label>veg</label><input type="checkbox" name="source">&nbsp&nbsp
<label>non veg</label><input type="checkbox" name="source"></p>
<p> select the room:<br>
<input type="radio" name="source" >AC<br>
<input type="radio" name="source" > NON AC</p>
<p><label>Comments/Questions</label><br><textarea rows="10" cols="100" name="comments"></textarea></p>

<p><input type="submit"  value="regis"  onClick="fun()"></p></center>
</body>
</fieldset>
</form>
</html>