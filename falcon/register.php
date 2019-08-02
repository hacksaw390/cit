<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
	<html>
		<head>
			<title>Falcon Template</title>
			<link rel="stylesheet" href="./asset/plugin/bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="./asset/css/bootstrap-iso.css">
			<link rel="stylesheet" href="./asset/css/font-awesome.min.css">
			<!-- <link rel="stylesheet" href="./asset/sweetalert2.min.css"> -->
			<link rel="stylesheet" href="./asset/css/style.css">

		</head>
		<body>
			<!-- ===============================
			Registration Form
			=================================-->
			
			<section>
				<div class="container">
					<div class="row">
						<div class="col-lg-6 m-auto bg-secondary py-1">
							<div class="text-center text-white py-2 my-2 bg-info">
								<h2>Registration Form</h2>
							</div>

							<!-- Registration success msg -->
							
							<?php if (isset($_SESSION['success'])) { ?>
							<div class="alert alert-success" role="alert">
								<h2><?php echo $_SESSION['success']; unset($_SESSION['success']); ?> </h2>
							</div>
							<?php }  ?>

							<!-- email exist msg -->

							<?php if (isset($_SESSION['email_msg'])) { ?>
							<div class="alert alert-danger" role="alert">
								<h2><?php echo $_SESSION['email_msg']; ?> </h2>
							</div>
							<?php }  unset($_SESSION['email_msg']);?>


							<form action="register_post.php" method="post">
								<div class="form-group">

										<div class="text-danger text-left">
											<?php
												if (!empty($_GET['$fname_err'])) {
													echo $_GET['$fname_err'];
												}
											 ?>
										</div>

										<div class="text-danger text-right">
											<?php
												if (!empty($_GET['$lname_err'])) {
													echo $_GET['$lname_err'];
												}
											 ?>
										</div>

									<div class="form-row">
										<div class="col">
											<input value="<?= (isset($_SESSION['fname'])) ? $_SESSION['fname']:''; ?>" type="text" class="form-control " name="fname" placeholder="First name">
										</div>

										<div class="col">
											<input value="<?= (isset($_SESSION['lname'])) ? $_SESSION['lname']:''; ?>" type="text" class="form-control" name="lname" placeholder="Last name">
										</div>
									</div>
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$uname_err'])) {
												echo $_GET['$uname_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input  value="<?= (isset($_SESSION['uname'])) ? $_SESSION['uname']:''; ?>" type="text" name="uname" placeholder="User Name" class="form-control">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$email_err'])) {
												echo $_GET['$email_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input  value="<?= (isset($_SESSION['email'])) ? $_SESSION['email']:''; ?>" type="text" name="email" placeholder="Email" class="form-control">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$phone_err'])) {
												echo $_GET['$phone_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input value="<?= (isset($_SESSION['phone'])) ? $_SESSION['phone']:''; ?>" type="text" name="phone"   onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="14" minlength="11" placeholder="01XXXXXXXXX" class="form-control ">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$pass_err'])) {
												echo $_GET['$pass_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input type="password" name="pass" placeholder="Password" class="form-control">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$repass_err'])) {
												echo $_GET['$repass_err'];
											}
										 ?>
									</div>

								<div class="form-group">
									<input  type="password" name="repass" placeholder="Re-password" class="form-control">
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$date_err'])) {
												echo $_GET['$date_err'];
											}
										 ?>
									</div>

								<div class="input-group">
									<input value="<?= (isset($_SESSION['date'])) ? $_SESSION['date']:''; ?>" type="text" class="form-control" name="date"  placeholder="dd/mm/yyyy">
									<div class="input-group-append">
										<span class="input-group-text"><i class="fa fa-calendar"></i></span>
									</div>
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$gender_err'])) {
												echo $_GET['$gender_err'];
											}
										 ?>
									</div>

							<!-- 	<div class="form-group text-white mt-3">
									<label for="" class="mr-4 text-white">Select Your Gender : </label>
									<div class="form-check form-check-inline">
										<input <?php if ($_SESSION['gender']=='Male') echo 'checked'; ?>  class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male" name="gender">
										<label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input <?php if ($_SESSION['gender']=='Female') echo 'checked'; ?> class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender">
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
									<div class="form-check form-check-inline">
										<input <?php if ($_SESSION['gender']=='Other') echo 'checked'; ?> class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender">
										<label class="form-check-label" for="inlineRadio3">Other</label>
									</div>
								</div> -->

								<hr>

								<div class="form-group text-white mt-3">
									<label for="" class="mr-4 text-white">Select Your Gender : </label>
									<div class="form-check form-check-inline">
										<input   class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio1" value="Male" name="gender" <?=(isset($_SESSION['gender'])=='Male') ? 'checked': ''; unset($_SESSION['gender']) ?>>
										<label class="form-check-label" for="inlineRadio1">Male</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio2" value="Female" name="gender"  <?=(isset($_SESSION['gender'])=='Female') ? 'checked': ''; unset($_SESSION['gender']) ?>>
										<label class="form-check-label" for="inlineRadio2">Female</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input ml-3 mr-1" type="radio" id="inlineRadio3" value="Other" name="gender" <?=(isset($_SESSION['gender'])=='Other') ? 'checked': ''; unset($_SESSION['gender']) ?> >
										<label class="form-check-label" for="inlineRadio3">Other</label>
									</div>
								</div> 









									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$check_err'])) {
												echo $_GET['$check_err'];
											}
										 ?>
									</div>

								<div class="form-group text-white mt-3">
									<div class="form-row">
										<div class="col-4">
											
											<label for="" class="mr-4 text-white">Select Your Skill : </label>
										</div>
										<div class="col">
											<div class="form-check form-check-inline">
												<input <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "HTML") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="HTML" name='check[]' type="checkbox" id="inlineCheckbox1">
												<label class="form-check-label" for="inlineCheckbox1">HTML</label>
											</div>
											<div class="form-check form-check-inline">
												<input <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "CSS") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="CSS" name='check[]' type="checkbox" id="inlineCheckbox2">
												<label class="form-check-label" for="inlineCheckbox2">CSS</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Java") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Java" name='check[]' type="checkbox" id="inlineCheckbox3">
												<label class="form-check-label" for="inlineCheckbox3">Java</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Python") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Python" name='check[]' type="checkbox" id="inlineCheckbox4">
												<label class="form-check-label" for="inlineCheckbox4">Python</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "C++") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="C++" name='check[]' type="checkbox" id="inlineCheckbox5">
												<label class="form-check-label" for="inlineCheckbox5">C++</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "PHP") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="PHP" name='check[]' type="checkbox" id="inlineCheckbox6">
												<label class="form-check-label" for="inlineCheckbox6">PHP</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "C#") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="C#" name='check[]' type="checkbox" id="inlineCheckbox7">
												<label class="form-check-label" for="inlineCheckbox7">C#</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Bootsrap") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Bootsrap" name='check[]' type="checkbox" id="inlineCheckbox8">
												<label class="form-check-label" for="inlineCheckbox8">Bootsrap</label>
											</div>
											<div class="form-check form-check-inline">
												<input  <?php if(isset($_SESSION['check'])) { foreach($_SESSION['check'] as $selected) { if($selected == "Jquery") { echo "checked=\"checked\""; break; }}} ?> class="form-check-input" value="Jquery" name='check[]' type="checkbox" id="inlineCheckbox9">
												<label class="form-check-label" for="inlineCheckbox9">Jquery</label>
											</div>
										</div>
									</div>
									
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$select_err'])) {
												echo $_GET['$select_err'];
											}
										 ?>
									</div>
								<div class="form-group">
									<select name="select[]" class="form-control" multiple="multiple">
										<option value="">Select Your Position</option>
										
										<option <?php if(isset($_SESSION['select'])) { foreach($_SESSION['select'] as $selected2) { if($selected2 == "Expart") { echo "selected=\"selected\""; break; }}} ?> value="Expart">Expart</option>
										<option <?php if(isset($_SESSION['select'])) { foreach($_SESSION['select'] as $selected2) { if($selected2 == "Medium") { echo "selected=\"selected\""; break; }}} ?> value="Medium">Medium</option>
										<option <?php if(isset($_SESSION['select'])) { foreach($_SESSION['select'] as $selected2) { if($selected2 == "New") { echo "selected=\"selected\""; break; }}} ?> value="New">New</option>
									</select>
								</div>

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$role_err'])) {
												echo $_GET['$role_err'];
											}
										 ?>
									</div>




									<div class="form-group">
										<select name="role" class="form-control">
											<option value="">Select Your Role</option>
											<option <?=(isset($_SESSION['role'])==1) ? 'selected': ''; unset($_SESSION['role']) ?> value="1">Admin</option>
											<option <?=(isset($_SESSION['role'])==2) ? 'selected': ''; unset($_SESSION['role']) ?> value="2">Moderator</option>
											<option <?=(isset($_SESSION['role'])==3) ? 'selected': ''; unset($_SESSION['role']) ?> value="3">Editor</option>
										</select>
									</div>





								<!-- <div class="form-group">
									<select name="role" class="form-control">
										<option value="">Select Your Role</option>
										<option <?php if ($_SESSION['role']==1) echo 'selected'; ?> value="1">Admin</option>
										<option <?php if ($_SESSION['role']==2) echo 'selected'; ?> value="2">Moderator</option>
										<option <?php if ($_SESSION['role']==3) echo 'selected'; ?> value="3">Editor</option>
									</select>
								</div> -->

									<div class="text-danger text-left p-0 m-0">
										<?php
											if (!empty($_GET['$textarea_err'])) {
												echo $_GET['$textarea_err'];
											}
										 ?>
									</div>

									<div class="form-group">
										<textarea name="area" id="" cols="3" class="form-control" placeholder="Write Something About Yourself"><?=(isset($_SESSION['area'])) ? $_SESSION['area'] : ''; ?></textarea>
									</div>

								<div class="form-group">
									<input type="reset" value="Reset" name="btn" class="btn btn-info">
									<input type="submit" id="btn" value="Submit" name="submit" class="btn btn-info">
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>


			<!-- ===============================
			Scroll Up
			=================================-->
			<!-- <div id="gotoup"><i class="fa fa-chevron-up" aria-hidden="true"></i></div> -->
			
			<script src="./asset/js/jquery-1.12.4.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/popper.min.js"></script>
			<script src="./asset/plugin/bootstrap/js/bootstrap.min.js"></script>
			<script src="./asset/js/bootstrap-datepicker.min.js"></script>
			<!-- <script src="./asset/js/sweetalert2.min.js"></script> -->
			<link rel="stylesheet" href="./asset/css/bootstrap-datepicker3.css">
			<script src="./asset/js/script.js"></script>








		</body>
	</html>
	<?php 
	

		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['uname']);
		unset($_SESSION['email']);
		unset($_SESSION['phone']);
		unset($_SESSION['date']);
		unset($_SESSION['gender']);
		unset($_SESSION['check']);
		unset($_SESSION['select']);
		unset($_SESSION['role']);
		unset($_SESSION['area']);


	 ?>


