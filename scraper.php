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
					echo $No		=	$element->find('./td[1]', 0)->plaintext;
					echo $Nomor		=	$element->find('./td[2]', 0)->plaintext;
					echo $Tanggal		=	$element->find('./td[3]', 0)->plaintext;
					echo $Klasifikasi	=	$element->find('./td[4]', 0)->plaintext;
					echo $Para		=	$element->find('./td[5]', 0)->plaintext;
					echo $Status		=	$element->find('./td[6]', 0)->plaintext;
					echo $Lama 		=	$element->find('./td[7]', 0)->plaintext;
					echo $Link 		=	$element->find('./td[8]/a', 0)->src;
					
		scraperwiki::save_sqlite(array('NO'), array('NO' => $NO , 'NOMOR' => $NOMOR, 'Tanggal' => $Tanggal, 'Klasifikasi' => $Klasifikasi, 'Para' => $Para, 'Lama' => $Lama, 'Detail_Page' => $Link));

			}
			}
  	}
	}
?>
