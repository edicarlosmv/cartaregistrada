<?php

/**
 * This source file is subject to the MIT License.
 * It is also available through http://opensource.org/licenses/MIT
 *
 * @category  Bertuga
 * @package   Bertuga_CartaRegistrada
 * @copyright Copyright (c) 2014 Bruno Bertuga (https://github.com/Bertuga)
 * @author    Bruno Bertuga <bertuga@gmail.com>
 * @license   http://opensource.org/licenses/MIT
 */
class Bertuga_CartaRegistrada_Helper_Data extends Mage_Core_Helper_Abstract {
	
	protected $_pesosValores = array(
		'20'  => 6.85,
		'50'  => 7.55,
		'100' => 8.55,
		'150' => 9.35,
		'200' => 10.10,
		'250' => 10.90,
		'300' => 11.75,
		'350' => 12.55,
		'400' => 13.30,
		'450' => 14.10,
		'500' => 14.90,
	
	);
	
	public function getPesosValores() {
		return $this->_pesosValores;
	}
}
