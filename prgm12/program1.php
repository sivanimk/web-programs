<html>
<head>
<title>Indian Cricket Players</title>
</head>
<body>
<?php
$players=array(
"Virat Kohli",
"Rohit sharma",
"Sachin Tendulkar",
"MS Dhoni",
);
echo"<table>";
echo"<tr><th>S.No</th><th>Player Name</th></tr>";
foreach($players as $x=>$player){
echo"<tr><td>".($x+1)."</td><td>".$player."</td></tr>";
}
echo"</table>;
?>
</body>
</html>

