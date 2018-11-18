<?php

function MnemonicToUrl( $mnemonic, $query) {
	switch( $mnemonic) {
		case 'g':
			$url = 'http://google.com/search?q=' . $query;
			break;
		case 'ddg':
			$url = 'http://duckduckgo.com/?q=' . $query;
			break;
		case 'wiki':
			$url = 'http://wikipedia.org/wiki/' . $query;
			break;
	}
	return $url;
}

?>
