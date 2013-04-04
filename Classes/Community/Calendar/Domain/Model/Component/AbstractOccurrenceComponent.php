<?php
namespace Community\Calendar\Domain\Model\Component;

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
 * This class holds together the component types which actually can "occur"
 * somewhen, so are the Event-, To-Do-, and JournalComponent.
 *
 * @Flow\Entity
 */
abstract class AbstractOccurrenctComponent extends AbstractMainComponent {

	/**
	 * 3.8.1.3
	 * Property Name: CLASS
	 * Purpose: This property defines the access classification for a
	 *    calendar component.
	 *
	 * @var string
	 */
	protected $classification;

	/**
	 * 3.8.7.1
	 * Property Name: CREATED
	 *
	 * Purpose: This property specifies the date and time that the calendar
	 *    information was created by the calendar user agent in the calendar
	 *    store.
	 *
	 *       Note: This is analogous to the creation date and time for a
	 *       file in the file system.
	 *
	 * @var \DateTime
	 */
	protected $dateTimeCreated;

	/**
	 * @var string
	 */
	protected $description;

	/**
	 * @var string
	 */
	protected $lastMod;

	/**
	 * @var string
	 */
	protected $seq;

	/**
	 * @var string
	 */
	protected $status;

	/**
	 * @var string
	 */
	protected $summary;

	/**
	 * @var string
	 */
	protected $recurId;

	/**
	 * @var string
	 */
	protected $rrule;

	/**
	 * @var string
	 */
	protected $attach;

	/**
	 * @var string
	 */
	protected $categories;

	/**
	 * @var string
	 */
	protected $exdate;

	/**
	 * @var string
	 */
	protected $related;

	/**
	 * @var string
	 */
	protected $rdate;

}
?>