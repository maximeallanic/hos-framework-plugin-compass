<?php
namespace Hos\Plugin\Compass;

use Assetic\Filter\CompassFilter;
use Assetic\Asset\FileAsset;
use Hos\Option;

require_once __DIR__.'../scssphp/scssphp.inc.php';
require_once __DIR__.'../scssphp/compass.inc.php';


/**
  * @author Maxime Allanic maxime@allanic.me
  * @license GPL
  * @internal Created 2016-07-26 12:08:57
  */
class Events{

	public function generate($arguments) {
		$scss = new scssc();
		new scss_compass($scss);

		return $scss->compile($arguments['content']);
	}
}
