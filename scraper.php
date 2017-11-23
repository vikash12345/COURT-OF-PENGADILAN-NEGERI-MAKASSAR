<?

require 		'scraperwiki.php';
require 		'scraperwiki/simple_html_dom.php';
for($page = 1; $page < 3 ; $page++)
	{
$BaseLink	=	'http://sipp.pn-makassar.go.id/list_perkara/page/'.$page;
$Html		=	file_get_html($BaseLink);
$RowNumb	=	-1;
	
	if ($Html) 
		{
			//	Paginate all 'View' buttons
			foreach ($Html->find("//*[@id='tablePerkaraAll']/tbody/tr") as $element) 
			{
				$RowNumb	+=	1;
				if ($RowNumb != 0) 
				{
					$no			=	$element->find('td[1]', 0)->plaintext;
					echo "$no\n";
				}
			}
		}
	}
	
	
	
	
	
	
	
	
	
	
	

?>



