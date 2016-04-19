<?php
namespace Edu\Cnm\mzibert\DataDesign;

/**
 * First pass at creating an accessor method for my autotroph entity
 *
 * @author Merri Zibert <mzibert@cnm.edu>
 * @version 1.0
 **/
class profile implements \JsonSerializable {
}
/**
 * id for this profile that is assigned by the system; this is the primary key
 * @var int $profileId
 **/
private $profileId;
/**
 * userName for the person that created this profile
 * @var string $userName
 **/
private $userName;
/**
 * userHash hashing the user input
 * @var string userHash
 **/
private $userHash
/**
 * userSalt salting the user input
 * @var string
 **/
private $userSalt