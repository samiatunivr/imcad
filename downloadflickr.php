
<?php

class downloadIMAGE {
	private $apiKey = '';

	public function __construct() {
	}

	public function search($query = null,$num = null) {

		$search ='http://flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $this->apiKey . '&tags=' . $query . '&per_page=' . urlencode($num).'&sort=relevance&tag_mode=all&format=php_serial';
		
		$result = file_get_contents($search);
		
		$result = unserialize($result);
		return $result;
	}
}

?>

