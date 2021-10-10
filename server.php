<?php      

	
	
	
	
	//Login section
	$host = "localhost";  
	$user = "root";  
	$password = '';  
	$db_name = "hawkeye_portfolio";
	// initializing variables
	$username = "";
	$email    = "";
	$errors = array(); 

	// connect to the database
	$db = mysqli_connect($host, $user, $password, $db_name);
	//Check connection
			if(mysqli_connect_errno()) {  
			die("Failed to connect with MySQL: ". mysqli_connect_error());  
			}
			echo "";
			
			//For login Section 
			if (isset($_POST['login_user'])) {
		  $username = mysqli_real_escape_string($db, $_POST['username']);
		  $password = mysqli_real_escape_string($db, $_POST['password']);
		  $email = mysqli_real_escape_string($db, $_POST['email']);

		  if (empty($username)) {
			array_push($errors, "Username is required");
		  }
		  if (empty($password)) {
			array_push($errors, "Password is required");
		  }

		  if (count($errors) == 0) {
			//$password = md5($password);
			$password = ($password);
			$query = "SELECT * FROM users WHERE username='$username' AND email='$email' AND password='$password'";
			$results = mysqli_query($db, $query);
			if (mysqli_num_rows($results) == 1) {
			  $_SESSION['username'] = $username;
			  $_SESSION['email'] = $email;
			  $_SESSION['success'] = "You are now logged in";
			  //header('location: UserEdit.php');
			  header('location: UserEdit.php');
			}else {
				//array_push($errors, "Wrong username/password combination");
				echo "<script> alert('Sorry buddy, You have entered wrong username/email/password');</script>";
				
			}
		  }
		}


		//For Edit user
		
		$id = 1;
		$update = false;
		$name = "";
		$dob = "";
		$phone = "";
		$address = "";
		$email = "";
		$website = "";

		if (isset($_POST['edit_user'])) {
			$name = $_POST['name'];
			$dob = $_POST['dob'];
			$phone = $_POST['phone'];
			$address = $_POST['address'];
			$email = $_POST['email'];
			$website = $_POST['website'];

			mysqli_query($db, "INSERT INTO edituser (name, dob, phone, address, email, website) VALUES ('$name', '$dob', '$phone', '$address', '$email', '$website')"); 
			//$_SESSION['message'] = "Address saved"; 
			header('location: UserHome.php');
			
		}

	
		/**
		if (isset($_POST['edit_user'])) {
			  $name = mysqli_real_escape_string($db, $_POST['name']);
			  
			  $email = mysqli_real_escape_string($db, $_POST['email']);

				$query = "SELECT * FROM edituser WHERE name='$name' AND email='$email' ";
				$results = mysqli_query($db, $query);
				if (mysqli_num_rows($results) == 1) {
				  $_SESSION['name'] = $name;
				  $_SESSION['email'] = $email;
				  
				}else {
					
					
				}
			}
		**/
		
		if (isset($_POST['edit_user'])) {
         $name = mysqli_real_escape_string($db, $_POST['name']);
         $email = mysqli_real_escape_string($db, $_POST['email']);

        $query = "SELECT * FROM edituser where name='$name' and email='$email' ";
        $results = mysqli_query($db, $query);
        if (count($results) == 1 ) {
        $n = mysqli_fetch_array($results);
        $name = $n['name'];
      }
         
    }
	
	
	
	
	
	
	//For About Section
	
		$abouthellotitle = "";
		$title = "";
		$description = "";

		if (isset($_POST['edit_user'])) {
			$abouthellotitle = $_POST['hellotitle'];
			$title = $_POST['abouttitle'];
			$description = $_POST['aboutdescription'];
			

			
			mysqli_query($db, "INSERT INTO aboutme (AboutHelloTitle,AboutTitle,AboutDescription) VALUES ('$abouthellotitle','$title','$description');"); 
			header('location: UserHome.php');
			
		}









	//Core code to set word limit
	$string = "Lorem Ipsome Dolore Site Amet.Lorem Ipsome Dolore Site Amet.Lorem Ipsome Dolore Site Amet.Lorem Ipsome Dolore Site Amet.Lorem Ipsome Dolore Site Amet..End of The Limit";
	//strip tags to avoid breaking any html
	$string = strip_tags($string);
	if (strlen($string) > 200) {

		// truncate string
		$stringCut = substr($string, 0, 200);
		$endPoint = strrpos($stringCut, ' ');

		//if the string doesn't contain any space then it will cut without word basis.
		$string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
		//$string .= '... <a href="/this/story">Read More</a>';
	}
	
	
	
	//Code to set word limit using function and call this function in your html where you want to set the limit
	/**function limit_word($str, $len) {
		if (strlen($str) < $len){
			return $str;
		}else{
		$str = substr($str,0,$len);
		}
		if ($spc_pos = strrpos($str," ")){
				$str = substr($str,0,$spc_pos);
		}
		return $str . "Read more...";
	}**/



		 
?>	