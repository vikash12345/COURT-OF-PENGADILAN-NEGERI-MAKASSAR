<?

require 		'scraperwiki.php';
require 		'scraperwiki/simple_html_dom.php';
for($page = 1; $page < 3 ; $page++)
{
$BaseLink	=	'http://sipp.pn-makassar.go.id/list_perkara/page/'.$page;
$html		=	file_get_html($BaseLink);
foreach($html->find("//*[@id='tablePerkaraAll']/tbodytr") as $element)
{
	$No =	$element->find("td",0)->plaintext;
	echo $No;
}
}
	//	Page pagination
	// $numberofpages.'<br>';


?>



