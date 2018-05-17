<?php
$mysqli = new mysqli('db', 'root', 'mysql_passwd', 'dummy');

if ($mysqli->connect_errno) {
    echo "Sorry, this website is experiencing problems.";
    echo "Error: Failed to make a MySQL connection, here is why: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    // You might want to show them something nice, but we will simply exit
    exit;
}

$sql = "SELECT * FROM `example` ORDER BY rand() LIMIT 5";
if (!$result = $mysqli->query($sql)) {
    echo "Sorry, the website is experiencing problems.";
    exit;
}

echo "<ul>\n";
while ($row = $result->fetch_assoc()) {
    echo "<li><a>";
    echo $row['name'];
    echo "</a></li>\n";
}
echo "</ul>\n";

$result->free();
$mysqli->close();
?>
