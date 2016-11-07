<?php
class Agent
{
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
	# AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, AgtUserId, AgtPassword
	
	#TO-STRING (ARRAY OF ALL PROPERTIES)
	public __toString()
	{
		$agent_array = array();
			$agent_array[getAgentId()];
			$agent_array[getAgtFirstName()];
			$agent_array[getAgtMiddleInitial()];
			$agent_array[getAgtLastName()];
			$agent_array[getAgtBusPhone()];
			$agent_array[getAgtEmail()];
			$agent_array[getAgtPosition()];
			$agent_array[getAgencyId()];
			$agent_array[getAgtUserId()];
			$agent_array[getAgtPassword()];
			
		return $agent_array;
			
		/* $AgentId; (NOT REQUIRED, AUTONUMBER) */
/* 		$agent_array = new Array();
			$agent_array['AgtFirstName'] = "Clark";
			$agent_array['AgtMiddleInitial'] = "S.";
			$agent_array['AgtLastName'] = "Kent";
			$agent_array['AgtBusPhone'] = "(403) 272-7272";
			$agent_array['AgtEmail'] = "clark.kent@travelexperts.com";
			$agent_array['AgtPosition'] = "Junior Agent";
			$agent_array['AgencyId'] = "1";
			$agent_array['AgtUserId'] = "user1";
			$agent_array['AgtPassword'] = "pass1"; */
	}
	#---------------------------------
	#CONSTRUCTOR
	public __construct()
	{
		/* $AgentId; (NOT REQUIRED, AUTONUMBER) */
		$AgtFirstName = "Clark";
		$AgtMiddleInitial = "S.";
		$AgtLastName = "Kent";
		$AgtBusPhone = "(403) 272-7272";
		$AgtEmail = "clark.kent@travelexperts.com";
		$AgtPosition = "Junior Agent";
		$AgencyId = "1";
		$AgtUserId = "user1";
		$AgtPassword = "pass1";
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
		$this->setAgtMiddleInitial = $agtMiddleInitial;
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