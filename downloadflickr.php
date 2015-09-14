
<?php

class downloadIMAGE {
	private $apiKey = '9a7d65ff0d5468de279ef2fc2601a115';

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

