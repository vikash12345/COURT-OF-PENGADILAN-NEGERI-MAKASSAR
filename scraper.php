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
			foreach ($Html->find("//*[@id='tablePerkaraAll']/tbody/tr") as $element) {
			$RowNumb	+=	1;
				if ($RowNumb != 0) {
					echo $No		=	$element->find('./td[1]', 0);
					echo $Nomor		=	$element->find('./td[2]', 0);
					echo $Tanggal		=	$element->find('./td[3]', 0);
					echo $Klasifikasi	=	$element->find('./td[4]', 0);
					echo $Para		=	$element->find('./td[5]', 0);
					echo $Status		=	$element->find('./td[6]', 0);
					echo $Lama 		=	$element->find('./td[7]', 0);
					echo $Link 		=	$element->find('./td[8]/a', 0);
			}
			}
  	}
	}
?>
