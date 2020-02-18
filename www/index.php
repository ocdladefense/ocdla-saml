<?php

require_once('_include.php');

// $url = SimpleSAML_Module::getModuleURL('core/frontpage_welcome.php');

// exit;
SimpleSAML_Utilities::redirectTrustedURL(SimpleSAML_Module::getModuleURL('core/frontpage_welcome.php'));
