<?

require 		'scraperwiki.php';
require 		'scraperwiki/simple_html_dom.php';
$BaseLink	=	'http://sipp.pn-makassar.go.id/list_perkara/page/1';
$html		=	file_get_html($BaseLink);	
$numberofpages 	=	$html->find("//*[@id='selector']/ul/li[8]/a",0)->plaintext;
	//	Page pagination
	echo $numberofpages.'<br>';


?>



