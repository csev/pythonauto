<?php
require_once "setup.php";

// Load up the LTI Support code
require_once 'util/lti_util.php';

session_start();

// Initialize, no secret, pull from session, and do not redirect
$context = new BLTI(false, true, false);
if ( ! $context->valid ) {
    echo json_encode(Array("status" => "failure", "detail" => "No context in session"));
    return;
}

$endpoint = $context->getOutcomeService();
if ( $endpoint === false ) {
    echo json_encode(Array("status" => "failure", "detail" => "No grade service available"));
    return;
}

$sourcedid = $context->getOutcomeSourceDID();
if ( $sourcedid === false ) {
    echo json_encode(Array("status" => "failure", "detail" => "No grade entry available"));
    return;
}

if ( isset($_SESSION['oauth_consumer_key']) && isset($_SESSION['oauth_consumer_secret']) ) {
    $oauth_consumer_key = $_SESSION['oauth_consumer_key'];
    $oauth_consumer_secret = $_SESSION['oauth_consumer_secret'];
} else {
    echo json_encode(Array("status" => "failure", "detail" => "No key/secret in session"));
    return;
}

$method="POST";
$content_type = "application/xml";

$operation = 'replaceResultRequest';
$postBody = str_replace(
	array('SOURCEDID', 'GRADE', 'OPERATION','MESSAGE'), 
	array($sourcedid, '1.0', 'replaceResultRequest', uniqid()), 
	getPOXGradeRequest());

$response = sendOAuthBodyPOST($method, $endpoint, $oauth_consumer_key, $oauth_consumer_secret, $content_type, $postBody);
global $LastOAuthBodyBaseString;
$lbs = $LastOAuthBodyBaseString;

try { 
    $retval = parseResponse($response);
} catch(Exception $e) {
    $retval = $e->getMessage();
}

echo("\n<pre>\n");
echo("Service Url:\n");
echo(htmlentities($endpoint)."\n\n");
print_r($retval);
echo("\n");
echo("------------ POST RETURNS ------------\n");
$response = str_replace("><","&gt;\n&lt;",$response);
$response = str_replace("<","&lt;",$response);
$response = str_replace(">","&gt;",$response);
echo($response);

echo("\n\n------------ WE SENT ------------\n");
$postBody = str_replace("<","&lt;",$postBody);
$postBody = str_replace(">","&gt;",$postBody);
echo($postBody);
echo("\nBase String:\n");
echo($lbs);
echo("\n</pre>\n");



$retval = Array("status" => "success");
echo json_encode($retval);
?>