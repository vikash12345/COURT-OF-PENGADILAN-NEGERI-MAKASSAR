<?

require 		'scraperwiki.php';
require 		'scraperwiki/simple_html_dom.php';
for($page = 1; $page < 2 ; $page++)
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
					$nomor			=	$element->find('td[2]', 0)->plaintext;
					$tangal			=	$element->find('td[3]', 0)->plaintext;
					$klasifikasi		=	$element->find('td[4]', 0)->plaintext;
					$para			=	$element->find('td[5]', 0)->plaintext;
					$status			=	$element->find('td[6]', 0)->plaintext;
					$lama			=	$element->find('td[7]', 0)->plaintext;
					$details		=	$element->find('td[8]\a', 0)->href;
					
					 $record = array( 'num' => $no, 'nomor' => $nomor);
           scraperwiki::save(array('num','nomor'), $record); 
					
					
				}
			}
		}
	}
	
	
?>

					
					
				


