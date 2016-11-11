<?php
	#---------------------------------------------
	#Dean Jones
	#Nov.10, 2016
	#AGENT CLASS
	#-------------------------
	#SUPPORTING FILES
		#AGENT_TESTPAGE.PHP		(test page to test Agent_class.php)
	#---------------------------------------------

class Agent
{
	#include ("Agent_class.php")
	
	#TEST NEW OBJECT
/* 		<?php
			$x = new Agent();
			
			$x->setAgtFirstName("Dean");
			echo $x->getAgtFirstName();
		?> 
*/
		
	#VARIABLES (MAKE PRIVATE) AND ACCESS THEM THROUGH THE GET-METHOD
		private $AgentId;
		private $AgtFirstName;
		private $AgtMiddleInitial;
		private $AgtLastName;
		private $AgtBusPhone;
		private $AgtEmail;
		private $AgtPosition;
		private $AgencyId;
		private $AgtUserId;
		private $AgtPassword;
		
		#USE TO BUILD ($sql QUERY)
		private $colnames;
		private $colvalues;
	# AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, AgtUserId, AgtPassword
	
	#LOAD-DATA FUNCTION (use to send information to MYSQL)
	public function loadData($data_array)
	{
		#AgentId, is AUTONUMBERED
		$this->AgtFirstName = $data_array["AgtFirstName"];
		$this->AgtMiddleInitial = $data_array["AgtMiddleInitial"];
		$this->AgtLastName = $data_array["AgtLastName"];
		$this->AgtBusPhone = $data_array["AgtBusPhone"];
		$this->AgtEmail = $data_array["AgtEmail"];
		$this->AgtPosition = $data_array["AgtPosition"];
		$this->AgencyId = $data_array["AgencyId"];
		$this->AgtUserId = $data_array["AgtUserId"];
		$this->AgtPassword = $data_array["AgtPassword"];
	}
	#BUILDS A STRING OF (COLUMN NAMES)(to put into $sql)
	public function getColNames()
	{
		//IF WANT TO USE FOR $sql
	}
	#BUILDS A STRING OF (COLUMN VALUES)(to put into $sql)
	public function getColValues()
	{
		//IF WANT TO USE FOR $sql
	}

	
	#TO-STRING (ARRAY OF ALL PROPERTIES)
	public function __toString()
	{
      $mystring = "'" 
			. $this->AgtFirstName . "', '"
			. $this->AgtMiddleInitial . "', '"
			. $this->AgtLastName . "', '"
			. $this->AgtBusPhone . "', '"
			. $this->AgtEmail . "', '"
			. $this->AgtPosition . "', "
			. $this->AgencyId . ", '"
			. $this->AgtUserId . "', '"
			. $this->AgtPassword . "'";
	   return $mystring;
	}
	# AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, AgtUserId, AgtPassword
	#---------------------------------
	#CONSTRUCTOR (runs when created an OBJECT)
		#SET DEFAULTS
	public function __construct($agentId=0, $agtFirstName="", $agtMiddleInitial="", $agtLastName="", 
									$agtBusPhone="", $agtEmail="", $agtPosition="", $agencyId=0, $agtUserId="", $agtPassword="")
	{		
		$this->AgentId = $agentId;
		$this->AgtFirstName = $agtFirstName;
		$this->setAgtMiddleInitial = $agtMiddleInitial;
		$this->AgtLastName = $agtLastName;
		$this->AgtBusPhone = $agtBusPhone;
		$this->AgtEmail = $agtEmail;
		$this->AgtPosition = $agtPosition;
		$this->AgencyId = $agencyId;
		$this->AgtUserId = $agtUserId;
		$this->AgtPassword = $agtPassword;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgentId()
	{
		return $this->AgencyId;
	}
	#SET-METHOD
	public function setAgentId($agentId)
	{
		$this->AgentId = $agentId;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtFirstName()
	{
		return $this->AgtFirstName;
	}
	#SET-METHOD
	public function setAgtFirstName($agtFirstName)
	{
		$this->AgtFirstName = $agtFirstName;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtMiddleInitial()
	{
		return $this->AgtMiddleInitial;
	}
	#SET-METHOD
	public function setAgtMiddleInitial($agtMiddleInitial)
	{
		$this->AgtMiddleInitial = $agtMiddleInitial;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtLastName()
	{
		return $this->AgtLastName;
	}
	#SET-METHOD
	public function setAgtLastName($agtLastName)
	{
		$this->AgtLastName = $agtLastName;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtBusPhone()
	{
		return $this->AgtBusPhone;
	}
	#SET-METHOD
	public function setAgtBusPhone($agtBusPhone)
	{
		$this->AgtBusPhone = $agtBusPhone;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtEmail()
	{
		return $this->AgtEmail;
	}
	#SET-METHOD
	public function setAgtEmail($agtEmail)
	{
		$this->AgtEmail = $agtEmail;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtPosition()
	{
		return $this->AgtPosition;
	}
	#SET-METHOD
	public function setAgtPosition($agtPosition)
	{
		$this->AgtPosition = $agtPosition;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgencyId()
	{
		return $this->AgencyId;
	}
	#SET-METHOD
	public function setAgencyId($agencyId)
	{
		$this->AgencyId = $agencyId;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtUserId()
	{
		return $this->AgtUserId;
	}
	#SET-METHOD
	public function setAgtUserId($agtUserId)
	{
		$this->AgtUserId = $agtUserId;
	}
	#---------------------------------
	#GET-METHOD
	public function getAgtPassword()
	{
		return $this->AgtPassword;
	}
	#SET-METHOD
	public function setAgtPassword($agtPassword)
	{
		$this->AgtPassword = $agtPassword;
	}
	#---------------------------------
}
?>