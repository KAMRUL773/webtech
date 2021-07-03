<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>REGISTRATION</title>

  <script>
function validateForm(){
  var username = document.getElementById("username").value;
  if(username == ""){
    alert("User Name must be filled out");
    return false;
  }
  var firstname = document.getElementById("firstname").value;
  if(firstname == ""){
    alert("First Name Name must be filled out");
    return false;
  }
  var email = document.getElementById("email").value;
  if(email == ""){
    alert("email must be filled out");
    return false;
  }
  var password = document.getElementById("password").value;
  if(password == ""){
    alert("password must be filled out");
    return false;
  }
  var confirmPassword = document.getElementById("confirmPassword").value;
  if(confirmPassword == ""){
    alert("confirm password must be filled out");
    return false;
  }
  var gender1 = document.getElementById("male").checked;
  var gender2 = document.getElementById("female").checked;
  if(gender1 == flase || gender2 == false){
    alert("plase checked of gender section");
  }
  
  var dob = document.getElementById("profession").value;
  if(profession == ""){
    alert("profession field must be filled out");
    return false;
  }

  var interests = document.getElementById("interests").value;
  if(profession == ""){
    alert("interests field must be filled out");
    return false;
  }

  var dob = document.getElementById("dob").value;
  if(dob == ""){
    alert("date of birth must be filled out");
    return false;
  }
}
</script>

</head>

<body style="background-color:#D5D8DC">

<h2>REGISTRATION</h2>
<p> Please fill up the registration form </p>
<br>

<form name="form" action="dbconnect.php"  method='POST'>
<table style="width:46%">
    <tr>
      <td><label for="username">User Name:</label></td>
      <td><input type="text" id="username" name="username"></td>
    </tr>
    </table>
    <hr>
<table style="width:46%">
  <tr>
    <td><label for="firstname">First Name:</label></td>
    <td><input type="text" id="firstname" name="firstname"></td>
  </tr>
  </table>

<hr>
<table style="width:70%">
  <tr>
    <td><label for="email">Email:</label></td>
    <td><input type="email" id="email" name="email"></td>
  </tr>
  </table>

  <hr>
<table style="width:56%">
  <tr>
    <td><label for="address">Address:</label></td>
    <td><input type="text" id="address" name="address"></td>
  </tr>
  </table>

  


<hr>
<table style="width:48%">
  <tr>
    <td><label for="profession">profession:</label></td>
    <td><input type="text" id="profession" name="profession"></td>
  </tr>
  </table>

  <hr>
<table style="width:56%">
  <tr>
    <td><label for="interests">Interests:</label></td>
    <td><input type="text" id="interests" name="interests"></td>
  </tr>
  </table>

<hr>
<table style="width:51%">
  <tr>
    <td><label for="password">Password:</label></td>
    <td><input type="password" id="pdw" name="password"></td>
  </tr>
  </table>

<hr>
<table style="width:34%">
  <tr>
    <td><label for="confirmPassword">Confirm Password:</label></td>
    <td><input type="password" id="Cpdw" name="confirmPassword"></td>
  </tr>
  </table>

<hr>

<label for="gender">Gender:</label>

<table style="width:30%">

  
  <tr>
  
   <td style="width:46%"></td>
   <td><input type="radio" id="male" name="gender" value="m"><label for="male">Male</label> <input type="radio" id="female"name="gender"value="f"><label for="female">Female</label></td>
   
   
   
  </tr>
</table>

<hr>

<table style="width:37%">
  <tr>
  <td><label for="dob">Date of Birth:</label></td>
  <td><input type="date" id="dob" name="dob"></td>
  </tr>
  </table>

  <hr>
  <br>

  <input type="submit" value="Submit">
  

</body>
</html>
