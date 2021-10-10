<?php 
	/**include('server.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['Email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:UserHome.php");
      die();
   }
	**/
		
		
		session_start(); 

		  /**if (!isset($_SESSION['username'])) {
			$_SESSION['msg'] = "You must log in first";
			header('location: index.php');
		  }
		  
		  if (isset($_GET['logout'])) {
			session_destroy();
			unset($_SESSION['username']);
			header("location: index.php");
		  }**/
		  
		  // This code is for auto logout after certain time that use session as i failed to set logout feature
		if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 500)) {
			// last request was more than 30 minutes ago
			session_unset();     // unset $_SESSION variable for the run-time 
			session_destroy();   // destroy session data in storage
			header("location: index.php");
			//echo "<script> alert('Session Expired, Please log in Again');</script>";
		}
		$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
?>