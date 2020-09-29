<?php
class Users{
	private $userId,$userName,$userEmail,$userPassword,$userImage,$userLastSeen;

	// function to format date of mysql database date
	public function formatDate($date){
      return date('g:i a,F j,Y',strtotime($date));
    }
    // getter functions
	public function getUserId(){
		return $this->userId;
	}
	public function getUserName(){
		return $this->userName;
	}
	public function getUserEmail(){
		return $this->userEmail;
	}
	public function getUserPassword(){
		return $this->userPassword;
	}
	public function getUserImage(){
		return $this->userImage;
	}
	public function getUserLastSeen(){
		return $this->userLastSeen;
	}
	
	// setter functios
	public function setUserId($Id){
		$this->userId = $Id;
	}
	public function setUserName($Name){
		$this->userName = $Name ;
	}
	public function setUserEmail($Email){
		$this->userEmail=$Email;
	}
	public function setUserPassword($Password){
		$this->userPassword=$Password;
	}
	public function setUserImage($Image){
		$this->userImage=$Image;
	}
	public function setUserLastSeen($LastSeen){
		$this->userLastSeen=$LastSeen;
	}
    
	
	
}
/*
 $user = new Users;

$user->setuserName("mukesh");

echo $user->getUserName();
	*/

?>