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
use Community\Calendar\Annotations as Calendar;

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
	 * In the case of an iCalendar object that specifies a
	 *   "METHOD" property, this property specifies the date and time that
	 *   the instance of the iCalendar object was created.  In the case of
	 *   an iCalendar object that doesn't specify a "METHOD" property, this
	 *   property specifies the date and time that the information
	 *   associated with the calendar component was last revised in the
	 *   calendar store.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.7.2
	 * @Calendar\PropertyName("DTSTAMP")
	 * @var \DateTime
	 */
	protected $dateTimeStamp;

	/**
	 * This property defines the persistent, globally unique
	 *    identifier for the calendar component.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.4.7
	 * @Calendar\PropertyName("UID")
	 * @var string
	 */
	protected $uniqueIdentifier;

	/**
	 * This property specifies when the calendar component begins.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.2.4
	 * @Calendar\PropertyName("DTSTART")
	 * @var \DateTime
	 */
	protected $dateTimeStart;

	/**
	 * This property defines the organizer for a calendar
	 *    component.
	 * Value Type: CAL-ADDRESS
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.4.3
	 * @Calendar\PropertyName("ORGANIZER")
	 * @var string
	 */
	protected $organizer;

	/**
	 * This property defines a Uniform Resource Locator (URL)
	 *    associated with the iCalendar object.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.4.6
	 * @Calendar\PropertyName("URL")
	 * @var string
	 */
	protected $uniformResourceLocator;

	/**
	 * This property defines an "Attendee" within a calendar
	 *    component.
	 * Value Type: CAL-ADDRESS
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.4.1
	 * @Calendar\PropertyName("ATTENDEE")
	 * @var string
	 */
	protected $attendee;

	/**
	 * This property specifies non-processing information intended
	 *    to provide a comment to the calendar user.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.1.4
	 * @Calendar\PropertyName("COMMENT")
	 * @var string
	 * @ORM\Column(type="text")
	 */
	protected $comment;

	/**
	 * This property is used to represent contact information or
	 *    alternately a reference to contact information associated with the
	 *    calendar component.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.4.2
	 * @Calendar\PropertyName("CONTACT")
	 * @var string
	 */
	protected $contact;

	/**
	 * This property defines the status code returned for a
	 *    scheduling request.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.8.3
	 * @Calendar\PropertyName("REQUEST-STATUS")
	 * @var string
	 */
	protected $requestStatus;

	/**
	 * Property Name: Any property name with a "X-" prefix
	 * This class of property provides a framework for defining
	 *    non-standard properties.
	 * Value Type: The default value type is TEXT.  The value type can be
	 *    set to any value type.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.8.2
	 * @var \Doctrine\Common\Collections\Collection<\Community\Calendar\Domain\Model\Property\NonStandardProperty>
	 */
	protected $nonStandardProperties;

	/**
	 * Property Name: An IANA-registered property name
	 * Value Type: The default value type is TEXT.  The value type can be
	 *    set to any value type.
	 *
	 * @see http://tools.ietf.org/html/rfc5545#section-3.8.8.1
	 * @var \Doctrine\Common\Collections\Collection<\Community\Calendar\Domain\Model\Property\IanaProperty>
	 */
	protected $ianaProperties;
}
?>