<?php
$token = 'your-hypothesisapikey-here'; // add your own api key here
$formurl = 'https://hypothes.is/api/annotations'; // endpoint for adding annotations

//this script expects 4 variables to be available when included in another script
// $annouri the URL of the article you are annotating
// $annodoc the title of the article you are annotating (if left out it will turn into 'untitled document')
// $annotext the text of your annotation (can contain urls, markdown etc.)
// $cats an array of your tags for this annotation

$formproperties = array (
	'uri' => $annouri,
	'document' => array ('title' => [$annodoc]),
	'text' => $annotext,
	'tags' => $cats,
	);
	
$jsondata = json_encode($formproperties);

$headers = [
'Accept: application/vnd.hypothesis.v1+json',
'Content-type: application/json',
'Authorization: Bearer '.$token
];

$formOptions = array(
    'http' => array(
        'header'  => $headers,
        'method'  => 'POST',
        'content' => $jsondata
    )
);

$context = stream_context_create($formOptions);
$resp = file_get_contents($formurl, false, $context);

?>
