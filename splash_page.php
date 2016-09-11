<?php
$first_name = $last_name = $email = $password_hash = $phone = $interests = $goals = "";

if(isset($_POST['add'])) {
	$m = new MongoClient("mongodb://main:rouse@ds029456.mlab.com:29456");
	if (!$m) {
		echo "Could not connect to MongoDB";
	} else {
		$db = $m->rouse;
		$collection = $db->users;
		header("Location: http://localhost:8000/main.php");
	}
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title> Rouse </title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body ng-app="pennapps" ng-controller="MainCtrl">
		<div class="col-md-6 col-md-offset-3">
			<div class = "page-header text-center" style="font-size:55px; color:black;">
				Welcome to Rouse
			</div>
			<div class="horizontal-tab">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab" aria-expanded="false">Login</a></li>
					<li class=""><a href="#tab3" data-toggle="tab" aria-expanded="false">Sign up</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane" id="tab3">
						<div class="contact-form">
							<form ng-submit="addOffer()" method="post" action="<?php $_PHP_SELF ?>">
								<div class="row">
									<div class="col-md-5">
										<br> <br>
										<input type="text" input name="firstname" class="form-control" placeholder="First Name" ng-model="last" id="firstname" />
										<br>
										<input type="text" input name="lastname" class="form-control" placeholder="Last Name" ng-model="last" id="lastname" />
										<br>
										<input type="text" input name="email" class="form-control" placeholder="E-mail" ng-model="last" id="email" />
										<br>
										<input type="password" input name="password" class="form-control" placeholder="Password" ng-model="last" id="password" />
										<br>
										<input type = "text" input name="phonenumber" class = "form-control" placeholder="Your cell" ng-model="last" id="phonenumber"/>
										<br>
										<select class="form-control" input name="expl" id="expl" >
											<option type="text" class="form-control" placeholder="None" ng-model="none" /> Select from the following </option>
											<option type="text" class="form-control" placeholder="Programming" ng-model="none" /> Programming </option>
											<option type="text" class="form-control" placeholder="Music" ng-model="none" /> Music </option>
											<option type="text" class="form-control" placeholder="Sports" ng-model="none" /> Sports </option>
										</select>
										<br>
										<input type = "text" input name="personalgoals" class = "form-control" placeholder="What are some of your goals?" ng-model="last" id="personalgoals" />
										<br>
										<button type="submit" name="add" class="btn btn-primary" id="add" value = "submit" ng-click="submit">Login</button>
									</div>
								</div>
							</form>
						</div>
					</div>

					<div class="tab-pane active in" id="tab1">
						<div class="contact-form">
							<div class="row">
								<div class="col-md-5">
									<br> <br>
									<input type="text" input name="name1" class="form-control" placeholder="User Login" ng-model="last" id="name1" />
									<br>
									<input type="password" input name="name2" class="form-control" placeholder="Password" ng-model="last2" id="name2" />
									<br>
									<button type="submit" name="add" class="btn btn-primary" id="add" value = "submit" ng-click="submit">Login</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</body>
</html>
