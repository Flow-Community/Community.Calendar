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
 * This class builds the base of the four "Main components" which are
 * Event, To-Do, Journal, and Free/Busy; and declares their common
 * properties.
 * Since the amount of each property may vary in each more concrete
 * implementation, the validation will take place at that concrete level.
 *
 * @Flow\Entity
 * @ORM\InheritanceType("JOINED")
 */
abstract class AbstractMainComponent {

	/**
	 * 3.8.7.2
	 * Property Name: DTSTAMP
	 * Purpose: In the case of an iCalendar object that specifies a
	 *   "METHOD" property, this property specifies the date and time that
	 *   the instance of the iCalendar object was created.  In the case of
	 *   an iCalendar object that doesn't specify a "METHOD" property, this
	 *   property specifies the date and time that the information
	 *   associated with the calendar component was last revised in the
	 *   calendar store.
	 *
	 * @var \DateTime
	 */
	protected $dateTimeStamp;

	/**
	 * 3.8.4.7
	 * Property Name: UID
	 * Purpose: This property defines the persistent, globally unique
	 *    identifier for the calendar component.
	 *
	 * @var string
	 */
	protected $uniqueIdentifier;

	/**
	 * 3.8.2.4
	 * Property Name: DTSTART
	 * Purpose: This property specifies when the calendar component begins.
	 *
	 * @var \DateTime
	 */
	protected $dateTimeStart;

	/**
	 * 3.8.4.3
	 * Property Name: ORGANIZER
	 * Purpose: This property defines the organizer for a calendar
	 *    component.
	 * Value Type: CAL-ADDRESS
	 *
	 * @var string
	 */
	protected $organizer;

	/**
	 * 3.8.4.6
	 * Property Name: URL
	 * Purpose: This property defines a Uniform Resource Locator (URL)
	 *    associated with the iCalendar object.
	 *
	 * @var string
	 */
	protected $uniformResourceLocator;

	/**
	 * 3.8.4.1
	 * Property Name: ATTENDEE
	 * Purpose: This property defines an "Attendee" within a calendar
	 *    component.
	 * Value Type: CAL-ADDRESS
	 *
	 * @var string
	 */
	protected $attendee;

	/**
	 * 3.8.1.4
	 * Property Name: COMMENT
	 * Purpose: This property specifies non-processing information intended
	 *    to provide a comment to the calendar user.
	 *
	 * @var string
	 * @ORM\ColumnType("TEXT")
	 */
	protected $comment;

	/**
	 * 3.8.4.2
	 * Property Name: CONTACT
	 * Purpose: This property is used to represent contact information or
	 *    alternately a reference to contact information associated with the
	 *    calendar component.
	 *
	 * @var string
	 */
	protected $contact;

	/**
	 * 3.8.8.3
	 * Property Name: REQUEST-STATUS
	 * Purpose: This property defines the status code returned for a
	 *    scheduling request.
	 *
	 * @var string
	 */
	protected $requestStatus;

	/**
	 * 3.8.8.2
	 * Property Name: Any property name with a "X-" prefix
	 * Purpose: This class of property provides a framework for defining
	 *    non-standard properties.
	 * Value Type: The default value type is TEXT.  The value type can be
	 *    set to any value type.
	 *
	 * @var \Doctrine\Common\Collections\Collection
	 */
	protected $nonStandardProperties;

	/**
	 * 3.8.8.1
	 * Property Name: An IANA-registered property name
	 * Value Type: The default value type is TEXT.  The value type can be
	 *    set to any value type.
	 *
	 * @var \Doctrine\Common\Collections\Collection
	 */
	protected $ianaProperties;
}
?>