<?
$url = $_GET['add'];
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "https://api.instagram.com/oembed/?url=".$url."");
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_TIMEOUT, 15 );

$result=curl_exec($curl);
curl_close($curl);
$decode = json_decode($result);
$id = $decode->media_id;
print_r($id);
$curl_media = curl_init();
curl_setopt($curl_media, CURLOPT_URL, "http://75.102.21.228/add?id=".$id);
curl_setopt($curl_media, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($curl_media, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_media, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_media, CURLOPT_TIMEOUT, 15 );
$res = curl_exec($curl_media);
curl_close($curl_media);
print_r($res);

?>