<?php
include '../../connect/db.php';

$query = $conn->query('SHOW VARIABLES like "version"');

$row = $query->fetch();

echo 'MySQL version:' . $row['Value'];