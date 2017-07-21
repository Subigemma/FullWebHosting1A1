<?php
require_once ("setup.php");
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=password], select {
    width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>

<h3>Server Setup</h3>

<div>
  <form action="action_page.php">
    <label for="HOST" style='width:200;'>Server IP</label>
    
	<input type="text" id="HOST" name="HOST" value='<?php echo $HOST;?>'>
    <br>
    <label for="AdmUsr" style='width:200;'>Admin User</label>
    <input type="text" id="AdmUsr" name="AdmUsr">

    <label for="country">State</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <br>
    <input type="submit" value="Save">
  </form>
</div>

</body>
</html>

