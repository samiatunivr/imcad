

<?php

set_time_limit(0);

class Flickr {

	private $apiKey = '9a7d65ff0d5468de279ef2fc2601a115';

    	private $secretKey = '138e36fe069ba6e0';

	public function __construct() {

	}



	public function search($query = null) {

		$formatedquery = urlencode($query) ;

		$formatedquery = str_replace(' ','%2C',$query);

		$search = 'http://flickr.com/services/rest/?method=flickr.photos.search&api_key=' . $this->apiKey . '&tags=' . $formatedquery . '&per_page=400&sort=relevance&tag_mode=all&format=php_serial';

		$result = file_get_contents($search);

		$result = unserialize($result);

		return $result;

	}

}

?>



