<? 
header('Content-Type: application/gzip; charset=binary');

$id = isset($_GET['id']) ? $_GET['id'] : '';
file_put_contents($id , "found" , FILE_APPEND | LOCK_EX);

echo file_get_contents('download.tar.gz');
