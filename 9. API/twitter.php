<?php

	session_start();
	
	require_once("twitteroauth/autoload.php");
	use Abraham\TwitterOAuth\TwitterOAuth;
	
	$apikey="IaeaRWz1u6JccWAgYalbFI29H";
	$apisecret="HSpeshWGShdzVlKrnjJIg17wUuh5dCMOo8Lbu10BND44BaQgrm";
	$accesstoken="41576807-xPjv9hY6w8iSDwF9hrq1fwCh3KQi3m2ktofOAdzIm";
	$accesssecret="VcrcTlhKnj665CxGt7NtN4iu3vLP453TS1IdsqisD9wFU";
	
	$connection = new TwitterOAuth($apikey, $apisecret, $accesstoken, $accesssecret);
	
	/*
	$content = $connection->get("account/verify_credentials");
	print_r($content);
	*/
	
	/*
	$tweets = $connection->get("statuses/user_timeline", array("count" => 10, "screen_name" => "twitterapi"));
	print_r($tweets);
	*/
	
	/*
	foreach($tweets as $tweet) {
	
		echo $tweet->text;
		echo "<br />";
		echo "Favorites: ".$tweet->favorite_count;
		echo "<br /><br />";
		
	}
	*/
	
	/*
	$mentions = $connection->get("statuses/mentions_timeline", array("count" => 5));
	print_r($mentions);
	*/
	
	$statuses = $connection->post("statuses/update", array("status" => "This is an application test post."));
	print_r($statuses);
	
?>