<?php 
$url = 'http://www.trikoder.hr/api/v1/RequestJobApplication/';
$data = 'email=damir.seletkovic@gmail.com@awesome.loc';


$curl = curl_init($url );
$data = array(
  'email' => 'damir.seletkovic@gmail.com',
  );
curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

// Make the REST call, returning the result
$response = curl_exec($curl);
echo stripcslashes($response);
if (!$response) {
    die("Greska prilikom konekcije");
}





?>