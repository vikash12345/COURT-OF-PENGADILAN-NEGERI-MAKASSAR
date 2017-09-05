<?

require 		'scraperwiki.php';
require 		'scraperwiki/simple_html_dom.php';
$BaseLink	=	'http://sipp.pn-makassar.go.id/list_perkara/sort/';
	
	//	Page pagination
	for($PageLoop = 1; $PageLoop < 2; $PageLoop++)
	{
		$FinalURL	=	$BaseLink . $PageLoop;
   		$Html		=	file_get_html($FinalURL);
		$RowNumb	=	-1;
		if ($Html) {
			//	Paginate all 'View' buttons
			foreach ($Html->find("//*[@id='tablePerkaraAll']/tbody") as $element) {
			$RowNumb	+=	1;
				if ($RowNumb != 0) {
					
						$No	=	$element->find('./td[1]', 0);
					echo $No;
					
				}
			}
  	}
	}
?>
