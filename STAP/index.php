<!doctype html>
<html lang="us">
<head>
<meta charset="utf-8">

</head>
<body>
<?php
if (!file_exists("setup.php"))
{
	echo "<script>\n";
	echo "document.location='stwiz.php';\n";
	echo "</script>\n";
}

require_once ("setup.php");
?>
<IMG src="AQCAT_med.jpg">
<!DOCTYPE html>
<html>
<style>
body {font-family: "Lato", sans-serif;}

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<body>
<?php

$MyAnchors = array ( 
                     "Home" => "home.php",
					 "Server setup" => "SSetup.php",
					 "Users" => "SUsers.php",
					 "Calendar" => "SCalendar.php",
					 "WebGL" => "SWebGL.php"
                   );
echo "<ul class='tab'>\n";
foreach ( $MyAnchors as $MyKey => $MyValue)
//   echo "<li><a href='javascript:Op(\"".$MyValue."\")' class='tablinks' onclick='openCity(event, \"". $MyValue ."\")'>". $MyKey ."</a></li>\n";
   echo "<li><a href='javascript:Op(\"".$MyValue."\")' class='tablinks' >". $MyKey ."</a></li>\n";
echo "</ul>\n";

foreach ( $MyAnchors as $MyKey => $MyValue)
{
	echo "<div id='". $MyValue . "' class='tabcontent' width=100% height=100%>\n";
}
				   
				   
?>
<iframe id='MyFrame' name='MyFrame' style='border:none' width=100% height=800px src='home.php'></iframe></div>


<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    document.getElementById(cityName).MyFrame.contentWindow.location = cityName;
    evt.currentTarget.className += " active";

}
</script>
     
</body>
</html>


</body>
