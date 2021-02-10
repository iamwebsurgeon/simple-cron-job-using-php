<?php 
$doc = new DOMDocument();
$file = "/home/logizamp/subdomains/projects.logixxlab.website/cron-job/cron.html";
// $file = "cron.html";
if($doc->loadHTMLFile($file)){
	$span = $doc->getElementsByTagName('span')->item(0);
	$count = $span->textContent;
	$count++;

	$doc->getElementsByTagName('span')->item(0)->nodeValue = $count;
	$doc->saveHTMLFile($file);

	echo "File Updated Successfully!";
}
else{
	return false;
}
?>