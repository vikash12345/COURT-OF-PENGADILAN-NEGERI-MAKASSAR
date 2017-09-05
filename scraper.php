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
			
			
			//	Paginate all 'View' buttons
			foreach ($Html->find("//*[@id='tablePerkaraAll']/tbody/tr") as $element) {
				
				$RowNumb	+=	1;
				if ($RowNumb != 0) {
				$Link 		=	$element->find('./td[8]/a', 0)->href;
					$Html->clear(); 
					unset($Html);
				$DetailPg	=	file_get_html($Link);
					
				if($DetailPg)
				{
				echo	$name = $DetailPg->find("//*[@id='tableinfo']/tbody/tr[2]/td[1]")->pliantext;
				}
				
					

				}
				
					

			
  	}
	}
?>



