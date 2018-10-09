<?php
$SECRET = "DpR0RyYl6abP32WSW6Se";

if (isset(getallheaders()["X-Hub-Signature"])) {
	$signature = str_replace("sha1=", "", getallheaders()["X-Hub-Signature"]);
	$body = file_get_contents('php://input');
	$hmac = hash_hmac("sha1", $body, $SECRET);
	if (hash_equals($signature, $hmac)) {
		if (isset(getallheaders()["X-GitHub-Event"])) {
			if (getallheaders()["X-GitHub-Event"] == "push") {
				shell_exec("git pull");
			} else {
				http_response_code(403);
				die("Invalid GitHub event header");
			}
		} else {
			http_response_code(403);
			die("Missing GitHub event header");
		}
	} else {
		http_response_code(401);
		die("Invalid GitHub authorisation header");
	}
} else {
	http_response_code(401);
	die("Missing GitHub authorisation header");
}
?>
