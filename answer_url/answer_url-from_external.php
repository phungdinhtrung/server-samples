<?php

/*
	Stringee Server gets SCCO by sending HTTP GET to this URL when someone calls your Number
		
/answer_url-from_external-test.php
	?from=0909982888
	&to=02473082686
	&uuid=2297a8fa-acad-11e7-a9ba-b596eac7cf7a
	&fromInternal=false

*/

$from = @$_GET['from'];
$to = @$_GET['to'];
$fromInternal = @$_GET['fromInternal'];
$uuid = @$_GET['uuid'];


$callTo = '5001';

$from = '0909982888';

$scco = '[{
			"action": "connect",
			"eventUrl": ["https://example.com/events"],
			"from": {
				"type": "external",
				"number": "' . $from . '",
				"alias": "' . $from . '"
			},
			"to": {
				"type": "internal",
				"number": "' . $callTo . '",
				"alias": "' . $callTo . '"
			}
		}]';

header('Content-Type: application/json');
echo $scco;

