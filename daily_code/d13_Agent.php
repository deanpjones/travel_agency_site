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
	# AgentId, AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId
	
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
	#CONSTRUCTOR
	#public __construct()
}
?>