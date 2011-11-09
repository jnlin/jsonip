<?php 
$out = json_encode(array('ip' => $_SERVER['HTTP_X_FORWARDED_FOR'], 'address' => $_SERVER['HTTP_X_FORWARDED_FOR']));
if ($cb = $_GET['callback']) {
    $out = sprintf('%s(%s);', $cb, $out); 
    header('Content-Type: application/javascript');
} else {
    header('Content-Type: application/json');
}
echo $out;
?>
