<?php
// Before removing this file, please verify the PHP ini setting `auto_prepend_file` does not point to this.

if (file_exists('/Applications/MAMP/htdocs/jesse/wp-content/plugins/wordfence/waf/bootstrap.php')) {
	define("WFWAF_LOG_PATH", '/Applications/MAMP/htdocs/jesse/wp-content/wflogs/');
	include_once '/Applications/MAMP/htdocs/jesse/wp-content/plugins/wordfence/waf/bootstrap.php';
}
?>