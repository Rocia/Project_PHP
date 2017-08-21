<!DOCTYPE html>
<html>
<body>

<?php
echo "<h4>Using the simplexml_load_string() function to read XML data from a string:</h4>";
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";
$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);

$xml=simplexml_load_file("note.xml");
echo "<br><br><h4>Output the data from each element in the XML file:</h4><br>";
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;


echo "<br><br><h4>Output the element's name and data for each child node in the XML file:</h4>";
echo $xml->getName() . "<br>";

foreach($xml->children() as $child)
  {
  echo $child->getName() . ": " . $child . "<br>";
  }

echo "<br><br><h4>Using simplexml_load_file() function to read XML data from a file:</h4>";
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
print_r($xml);
?>

</body>
</html>



<!-- reads note.xml-->
