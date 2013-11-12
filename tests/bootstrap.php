<?php
set_include_path(
	realpath(dirname(__FILE__) . '/../application') . PATH_SEPARATOR .
	realpath(dirname(__FILE__) . '/application') . PATH_SEPARATOR .
	get_include_path()
);
