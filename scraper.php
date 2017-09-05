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
					 $info['No']		=	$element->find('./td[1]', 0)->plaintext;
					$info['Nomor']		=	$element->find('./td[2]', 0)->plaintext;
					$info['Tanggal']	=	$element->find('./td[3]', 0)->plaintext;
					$info['Klasifikasi']	=	$element->find('./td[4]', 0)->plaintext;
					$info['Para']		=	$element->find('./td[5]', 0)->plaintext;
					$info['Status']		=	$element->find('./td[6]', 0)->plaintext;
					$info['Lama']		=	$element->find('./td[7]', 0)->plaintext;
					$info['Link']		=	$element->find('./td[8]/a', 0)->href;
scraperwiki::save_sqlite(array('NO'), array('PageLink' => $FinalURL ,'NO' => $info['No'] , 'NOMOR' => $info['Nomor'], 'Tanggal' => $info['Tanggal'], 'Klasifikasi' => $info['Klasifikasi'], 'Para' => $info['Para'], 'Status' => $info['Status'] , 'Lama' => $info['Lama'], 'Detail_Page' => $info['Link']));

					

			}
				
				
					

			}
  	}
	}
?>
