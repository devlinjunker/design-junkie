<?

$url = $_GET['url'];

$curler = curl_init();

curl_setopt( $curler, CURLOPT_URL, $url);
curl_setopt( $culer, CURLOPT_HEADER, 0);
curl_setopt( $culer, CURLOPT_RETURNTRANSFER, true);

print(curl_exec( $curler ));

?>
