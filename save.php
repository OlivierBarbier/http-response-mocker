<?php 
header('Content-Type: application/json');

$status_code =  $_POST['statuscode'];
$content_type =  $_POST['contenttype'];
$charset =  strtolower($_POST['charset']);
$body =  $_POST['body'];

$filename = uniqid();
$pub_file_path = 'v2/' . $filename;
$priv_file_path = $pub_file_path . '.php';


file_put_contents($priv_file_path, "<?php header('Content-Type: $content_type; charset=$charset'); http_response_code($status_code); ?>" . $body);
?>{"url":"//<?php echo $_SERVER['HTTP_HOST'] ?>/<?php echo $pub_file_path ?>"}