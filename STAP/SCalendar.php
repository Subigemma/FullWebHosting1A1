<html>
<head>   
<link href="styles/calendar.css" type="text/css" rel="stylesheet" />
</head>
<body>
<?php
include 'Calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
</html>       