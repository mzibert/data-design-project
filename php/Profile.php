<?php
namespace Edu\Cnm\mzibert\DataDesign;

/**
 * A typical restaurant review from Opentable's site
 *
 * This review resembles a single example of the information that Opentable uses and displays
 * in their restaurant reviews.
 *
 * @author Merri Zibert <mzibert@cnm.edu>
 * @version 1.0
 **/
class profile {
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
	 *constructor for this review
	 *
	 * @param int $newprofileId where the new value of profile is assigned
	 * @param string $newUserName where the new user name is provided
	 * @param string $newUserSalt where salt is added to protect password
	 * @param string $newUserHash where hash is added for security
	 * @throws \RangeException if data values are out of range (strings too long, negative integers)
	 * @throws \TypeError if data types violate type
	 * @throws \InvalidArgumentException if data types are not valid
	 **/
	public function __construct(int $newprofileId, string $newUserName, string $newUserHash, string $newUserSalt) {
		try {
			$this->setProfileId($newprofileId);
			$this->setUserName($newUserName);
			$this->setUserHash($newUserHash);
			$this->setUserSalt($newUserSalt);
		} catch(\RangeException $range) {
			//rethrow the exception to the caller
			throw(new \RangeException($range->getMessage(), 0, $range));
		} catch(\TypeError $typeError) {
			//rethrow the exception to the caller
			throw(new \TypeError($typeError->getmessage("your data is the incorrect type"), 0, $typeError));
		} catch(\InvalidArgumentException $invalidArgument) {
			//rethrow the exception to the caller
			throw (new \InvalidArgumentException($invalidArgument->getMessage(), 0, $invalidArgument));
		}
	}

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	public function getProfileId() {
		return($this->profileId);
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newprofileId new value of profile id
	 * @throws \rangeexception if $newprofileid is not positive
	 * @throws \TypeError if $newProfileId is not an integer
	 **/
	public function setProfileId($newProfileId) {
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
	/**
	 * accessor method for user salt
	 *
	 * return string value for user salt
	 **/
	public function getUserSalt() {
		return $this->userSalt;
	}
	/**
	 *mutator method for user salt
	 *@param string $newUserSalt new value of user salt
	 *@throws \InvalidArgumentException if $newUserSalt is not a string or insecure
	 *@throws \RangeException if $newUserSalt is > 64 characters
	 *@throws \TypeError if $newUserSalt is not a string
	 **/
	public function setUserSalt (string $newUserSalt) {
		//verify the user salt content is secure
		$newUserSalt = trim($newUserSalt);
		$newUserSalt = filter_var($newUserSalt,FILTER_SANITIZE_STRING);
		if(empty($newUserSalt)=== true){
			throw(new \ InvalidArgumentException ("user salt is empty or insecure"));
		}
		//verify the user salt will fit in the database
		if(strlen($newUserSalt) >64) {
			throw(new\ RangeException ("user salt is too long"));
		}
		//store the user salt
		$this->userSalt = $newUserSalt;
}
	/**
	 *accessor method for user hash
	 *
	 *return string value for user hash
	 **/
	public function getUserHash() {
		return $this->userHash;
	}
	/**
	 *mutator method for user hash
	 *
	 *@param string $newUserHash new value of user hash
	 *@throws \InvalidArgumentException if $newuserhash is not a string or insecure
	 *@throws \RangeException if $newuserhash is > 128 characters
	 *@throws \TypeError if $newuserhash is not a string
	 **/
	public function setUserHash (string $newUserHash){
		//verify the user hash content is secure
		$newUserHash = trim($newUserHash);
		$newUserHash = filter_var($newUserHash, FILTER_SANITIZE_STRING);
		if(empty($newUserHash)===true){
			throw(new\InvalidArgumentException ("user hash is empty or insecure"));
		}
		//verify the hash will fit in the database
		if(strlen($newUserHash) >128) {
			throw (new\ RangeException ("user hash is too long"));
		}
				//store new user hash
			$this->userHash = $newUserHash;
		}
		/**
		 * insert this userName into mySQL
		 *
		 *@param \PDO $pdo PDO connection object
		 *@throws \PDOException when mySQL related errors occur
		 *@throws \TypeError if $pdo is not PDO connection object
		 **/
	public function insert(\PDO $pdo) {
		//enforce the userName is unique (i.e., dont insert a username that already exists)
			if($this->userName !== null) {
				throw(new \PDOException("not a new userName"));
			}
			//create query template
			$query = "INSERT INTO userName"
		}

		}
	}