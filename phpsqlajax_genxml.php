<?php
require("phpsqlajax_dbinfo.php");

function parseToXML($htmlStr)
{
    $xmlStr=str_replace('<','&lt;',$htmlStr);
    $xmlStr=str_replace('>','&gt;',$xmlStr);
    $xmlStr=str_replace('"','&quot;',$xmlStr);
    $xmlStr=str_replace("'",'&#39;',$xmlStr);
    $xmlStr=str_replace("&",'&amp;',$xmlStr);
    $xmlStr=str_replace("å",'&aring;',$xmlStr);
    $xmlStr=str_replace("Å",'&Aring;',$xmlStr);
    $xmlStr=str_replace("ä",'&auml;',$xmlStr);
    $xmlStr=str_replace("Ä",'&Auml;',$xmlStr);
    $xmlStr=str_replace("ö",'&ouml;',$xmlStr);
    $xmlStr=str_replace("Ö",'&Ouml;',$xmlStr);

    return $xmlStr;
}

// Opens a connection to a MySQL server
$connection=mysql_connect ('localhost', $username, $password);
if (!$connection) {
    die('Not connected : ' . mysql_error());
}

// Set the active MySQL dbname
$db_selected = mysql_select_db($dbname, $connection);
if (!$db_selected) {
    die ('Can\'t use db : ' . mysql_error());
}

// Select all the rows in the markers table
$query = "SELECT * FROM cats WHERE 1";
$result = mysql_query($query);
if (!$result) {
    die('Invalid query: ' . mysql_error());
}

header("Content-type: text/xml");

// Start XML file, echo parent node
echo '<cats>';

// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
    // ADD TO XML DOCUMENT NODE
    echo '<marker ';
    echo 'name="' . parseToXML($row['name']) . '" ';
    echo 'sex="' . parseToXML($row['sex']) . '" ';
    echo 'breed="' . $row['breed'] . '" ';
    echo 'address="' . parseToXML($row['address']) . '" ';
    echo 'lat="' . $row['lat'] . '" ';
    echo 'lng="' . $row['lng'] . '" ';
    echo '/>';
}

// End XML file
echo '</cats>';

?>