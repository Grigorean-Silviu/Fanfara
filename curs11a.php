<?php
//The URL that accepts the file upload.
$url = 'https://s_grigorean.internship.rankingcoach.com/curs11a.php';

//The name of the field for the uploaded file.
$uploadFieldName = 'user_file';

//The full path to the file that you want to upload
$filePath = '@';


//Initiate cURL
$ch = curl_init();

//Set the URL
curl_setopt($ch, CURLOPT_URL, $url);

//Set the HTTP request to POST
curl_setopt($ch, CURLOPT_POST, true);

//Tell cURL to return the output as a string.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

//If the function curl_file_create exists
if(function_exists('curl_file_create')){
//Use the recommended way, creating a CURLFile object.
$filePath = curl_file_create($filePath);
} else{
//Otherwise, do it the old way.
//Get the canonicalized pathname of our file and prepend
//the @ character.
$filePath = '@' . realpath($filePath);
//Turn off SAFE UPLOAD so that it accepts files
//starting with an @
curl_setopt($ch, CURLOPT_SAFE_UPLOAD, false);
}

//Setup our POST fields
$postFields = array(
$uploadFieldName => $filePath,
'blahblah' => 'Another POST FIELD'
);

curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

//Execute the request
$result = curl_exec($ch);

//If an error occured, throw an exception
//with the error message.
if(curl_errno($ch)){
throw new Exception(curl_error($ch));
}

//Print out the response from the page
echo $result;


