<?

require 		'scraperwiki.php';
require 		'scraperwiki/simple_html_dom.php';
for($page = 1; $page < 2 ; $page++)
{
$BaseLink	=	'http://sipp.pn-makassar.go.id/list_perkara/page/'.$page;
echo $html		=	file_get_html($BaseLink);	
}
	//	Page pagination
	// $numberofpages.'<br>';


?>



