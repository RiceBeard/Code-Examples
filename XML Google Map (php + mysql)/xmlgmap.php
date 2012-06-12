<?php
include_once ('config.inc');

$query = "SELECT * FROM breeders";

$result = mysql_db_query ($DBName, $query, $Link);

// Start XML file, create parent node

$dom = new DOMDocument("1.0");
$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node);

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_array ($result)){
  // ADD TO XML DOCUMENT NODE
  $node = $dom->createElement("marker");
  $newnode = $parnode->appendChild($node);
  $newnode->setAttribute("name", $row['breeder_name']);
  $newnode->setAttribute("address", $row['breeder_address']);
  $newnode->setAttribute("lat", $row['lat']);
  $newnode->setAttribute("lng", $row['lng']);
}

echo $dom->saveXML();

?>