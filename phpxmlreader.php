<!DOCTYPE html>
<html>
<body>

<?php
$xml=simplexml_load_file("note.xml");
echo "<h1>Output the data from each element in the XML file:</h1><br>";
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;


echo "<br><br><h1>Output the element's name and data for each child node in the XML file:</h1>";
echo $xml->getName() . "<br>";

foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br>";
  }

?>

</body>
</html>
