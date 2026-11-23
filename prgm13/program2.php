<?php
$names=array(
"s1"=>"suma",
"s2"=>"harry",
"s3"=>"sheela",
"s4"=>"basu");
echo"<center>";
echo"<h2>Orginal student list</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>Ascending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>descending order:</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>

