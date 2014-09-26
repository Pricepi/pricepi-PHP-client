<?php

function call_pricepi($unique_id,
		      $account_key,
		      $currency,
		      $unknown,
		      $sortby,
		      $limit,
		      $query_type,
		      $query)
{
	$timestamp = time();
	$request = "https://api.pricepi.com/pricepiapi.pi";
	$query = preg_replace('/\s+/', ' ', $query);
	$encoded_query = urlencode($query);
	$request = $request . "?query=" . $encoded_query;
	$request = $request . "&currency=" . $currency;
	$request = $request . "&sortby=" . $sortby;
	$request = $request . "&limit=" . $limit;
	$request = $request . "&timestamp=" . $timestamp;
	$request = $request . "&uniqid=" . $unique_id;
	$to_hash = $query . $currency . $sortby . $limit . $timestamp . $unique_id;
	$to_hash = preg_replace('/[\+\s]/', '', $to_hash);
	$to_hash = $to_hash . $account_key;
	$auth_code = hash('sha256', $to_hash);
	$request = $request. "&authcode=" . $auth_code;

	$page = file_get_contents($request);
	return $page;
}

?> 


