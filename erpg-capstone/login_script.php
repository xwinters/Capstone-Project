<?php
$dbh = mysqli_connect('localhost', 'admin', 'pass');
if (!$dbh) {
    die('Could not connect: ' . mysqli_error());
}
echo 'Connected successfully to MariaDB database';
mysqli_close($dbh);
?>

<?php
phpinfo();
?>