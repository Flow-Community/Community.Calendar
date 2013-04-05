<?php
namespace Community\Calendar\Domain\Model\Property;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Community.Calendar".    *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\ORM\Mapping as ORM;
use TYPO3\Flow\Annotations as Flow;

/**
 *  Any property name with a "X-" prefix
 *
 * @see http://tools.ietf.org/html/rfc5545#section-3.8.8.2
 * @Flow\ValueObject
 */
class NonStandardProperty {

	/**
	 * @var string
	 */
	protected $xName;

	/**
	 * @var array<string>
	 */
	protected $icalParameters = array();

	/**
	 * @var string
	 */
	protected $value;

	/**
	 * @param string $xName
	 * @param array<string> $icalParameters
	 * @param string $value
	 */
	public function __construct($xName, array $icalParameters, $value) {
		$this->xName = $xName;
		$this->parameters = $icalParameters;
		$this->value = $value;
	}

	/**
	 * @return string
	 */
	public function getXName() {
		return $this->xName;
	}

		/**
	 * @return array
	 */
	public function getIcalParameters() {
		return $this->icalParameters;
	}

	/**
	 * @return string
	 */
	public function getValue() {
		return $this->value;
	}

}
?>