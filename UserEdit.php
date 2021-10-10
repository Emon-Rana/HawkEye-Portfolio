<?php include 'session.php'; ?>
<html>
	<head>
		<title>User Edit Form</title>
		<link href="css/style.css" rel='stylesheet' type='text/css' />
	</head>
	<body class="UserEdit">
		<div class=" container" >
			<div class="edit_form" >
				<div class="form_start" >
					
					<h1>This Form Page for UserEdit Page</h1>
					<form class="usereditform" action="UserHome.php" method="post">
						<label for="name">Name </label>
						<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="" />
						
						<label for="dob">D.O.B </label>
						<input type="text" name="dob" value="Date Of Birth" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Date Of Birth';}" required="" />
						
						<label for="dob">Phone </label>
						<input type="text" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="" />
						
						<label for="dob">Address </label>
						<input type="text" name="address" value="Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Address';}" required="" />
						
						<label for="email">Email </label>
						<input type="text" name="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" />
						
						<label for="dob">Website </label>
						<input type="text" name="website" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="" />
						
						<label for="section" class="section_title">This is For About Section</label>
						
						<label for="about_hello_title" >Hello Title</label>
						<input type="text" name="hellotitle" value="Hello Title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Hello Title'; }">
						
						<label for="about_title" > Title</label>
						<input type="text" name="abouttitle" value="Title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Title'; }">
						
						<label for="about_description" >Description</label>
						<input type="text" name="aboutdescription" value="Description" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description'; }">
						
						
						
						<label for="dob">Password  <span class="edit_form_required pass_required_massage" > ** </span> <p class="pass_required_massage_hide pass_required_massage_show" >Please Enter Your Password for Confirm Submission </p> </label>
						<input type="password" name="dob" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="" />
						
						
						<a class="edit_form_submit" href="#">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<button name="edit_user" class="edit_form_submit_button" type="submit" value="Send" >Save</button>
						</a>
						
						<a class="edit_form_submit" href="#">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
							<button name="reset_user" class="edit_form_submit_button" type="reset" value="Reset" >Reset</button>
						</a>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</body>
</html>

