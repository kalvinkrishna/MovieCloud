<?php

	error_reporting(0);
	session_start();
	require_once("facebook/FacebookSession.php");
	require_once("facebook/FacebookRequest.php");
	require_once("facebook/FacebookResponse.php");
	require_once("facebook/FacebookSDKException.php");
	require_once("facebook/FacebookRequestException.php");
	require_once("facebook/FacebookRedirectLoginHelper.php");
	require_once("facebook/FacebookAuthorizationException.php");
	require_once("facebook/GraphObject.php");
	require_once("facebook/GraphUser.php");
	require_once("facebook/GraphSessionInfo.php");
	require_once("facebook/Entities/AccessToken.php");
	require_once("facebook/HttpClients/FacebookCurl.php");
	require_once("facebook/HttpClients/FacebookHttpable.php");
	require_once("facebook/HttpClients/FacebookCurlHttpClient.php");

	use Facebook\FacebookSession;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\FacebookResponse;
	use Facebook\FacebookSDKException;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookAuthorizationException;
	use Facebook\GraphObject;
	use Facebook\GraphUser;
	use Facebook\GraphSessionInfo;
	use Facebook\FacebookCurl;
	use Facebook\FacebookHttpable;
	use Facebook\FacebookCurlHttpClient;


	if(isset($_REQUEST['fb_token'])){
		unset($_SESSION['fb_token']);
	}

	$app_id = '1505049226408405';
	$app_secret = '8a8a45f9dac822aea6bc57588d1ac5ea';
	$redirect_url = 'http://localhost/MovieCloud/Home/fb.php';

	FacebookSession::setDefaultApplication($app_id, $app_secret);
    $helper = new FacebookRedirectLoginHelper($redirect_url);
	$sess = $helper->getSessionFromRedirect();


	if (isset($sess)) {
		$request = new FacebookRequest($sess, 'GET', '/me');
		$response = $request->execute();;
		$graph = $response->getGraphObject(GraphUser::classname());
		$name = $graph->getName();

		$_SESSION["Fb"]=true;
		header("location:../Home.php");
	} else {
		echo "<a href='".$helper->getLoginUrl()."'><img src='img/fb.png' width='50' heigth='50' alt='no image' title='Login With Facebook'></a>";
	}
?>