<?php
namespace Community\Calendar\Annotations;

/*                                                                        *
 * This script belongs to the TYPO3 Flow package "Community.Calendar".    *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU General Public License, either version 3 of the   *
 * License, or (at your option) any later version.                        *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use Doctrine\Common\Annotations\Annotation as DoctrineAnnotation;

/**
 * Declares which actual RFC-equivalent property name a property has
 *
 * @Annotation
 * @DoctrineAnnotation\Target("PROPERTY")
 */
final class PropertyName {

	/**
	 * The property name (can be given as anonymous argument)
	 * @var string
	 */
	public $propertyName;

	/**
	 * @param array $values
	 * @throws \InvalidArgumentException
	 */
	public function __construct(array $values) {
		if (!isset($values['value']) && !isset($values['propertyName'])) {
			throw new \InvalidArgumentException('A PropertyName annotation must specify a property name.', 1365149127);
		}
		$this->propertyName = isset($values['propertyName']) ? $values['propertyName'] : $values['value'];
	}

}

?>