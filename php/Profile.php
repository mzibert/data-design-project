<?php
namespace Edu\Cnm\mzibert\DataDesign;

/**
 * First pass at creating an accessor method for my autotroph entity
 *
 * @author Merri Zibert <mzibert@cnm.edu>
 * @version 1.0
 **/
class profile implements \JsonSerialize {
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
	private $userHash;
	/**
	 * userSalt salting the user input
	 * @var string
	 **/
	private $userSalt;

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return $this->profileId;
	}

	/**
	 * mutator method for profile id
	 * @param int $newprofileId new value of profile id
	 * @throws \rangeexception if $newprofileid is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setProfileId(int $newProfileId) {
		//verify the profile id is positive
		if($newProfileId <= 0) {
			throw(new \RangeException("profile id is not positive"));
		}
		//convert and store profile id
		$this->profileId = $newProfileId;
	}

	/**accessor method for user name
	 *
	 * @return string value for user name
	 **/
	public function getUserName() {
		return $this->userName;
	}
	/**
	 * mutator method for user name
	 * @param string $newUserName new value of user name
	 * @throws \InvalidArgumentException if $newUserName is not a string or insecure
	 * @throws \RangeException if $newUserName is > 128 characters
	 * @throws \TypeError if $newUserName is not a string
	 **/
	public function setUserName(string $newUserName) {
		//verify the user name content is secure
		$newUserName = trim($newUserName);
		$newUserName = filter_var($newUserName,FILTER_SANITIZE_STRING);
		if(empty($newUserName)=== true){
			throw(new \InvalidArgumentException("user name is empty or insecure"));
		}
		//verify the user name will fit in the database
		if(strlen($newUserName) >128){
			throw(new\ RangeException("user name is too long"));
		}
		//store the user name
		$this->userName = $newUserName;
	}