<!-- FOR SWEET ALERT JS ONLY -->
<script src="../vendor/sweetalert/sweetalert.min.js"></script>
<?php 
///////////////////////////////////+GUIDANCE ALERTS
if (isset($_GET['addLearner'])){
	$mssg = $_GET['addLearner'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
    	$("#learnerModal").modal("show");
});
</script>';
}
if (isset($_GET['addDream'])){
	$mssg = $_GET['addLearner'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
    	$("#learnerModal").modal("show");
});
</script>';
}
if (isset($_GET['addPsychological'])){
	$mssg = $_GET['addLearner'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
    	$("#learnerModal").modal("show");
});
</script>';
}
if (isset($_GET['addPersonality'])){
	$mssg = $_GET['addLearner'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
    	$("#learnerModal").modal("show");
});
</script>';
}
if (isset($_GET['appointment'])){
	$mssg = $_GET['appointment'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}
if (isset($_GET['update-appointment'])){
	$mssg = $_GET['update-appointment'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}
if (isset($_GET['addSched'])){
	$mssg = $_GET['addSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}
if (isset($_GET['errorSched'])){
	$mssg = $_GET['errorSched'];
echo '<script>
		  var $str = "End time must be greater than time start!";
          swal($str,{
              button: "Ok",
         })
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/dashboard.php");
});
</script>';
}
if (isset($_GET['update-profileGuidance'])){
	$mssg = $_GET['update-profileGuidance'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/profile.php");
});
</script>';
}
if (isset($_GET['wrong-profileGuidance'])){
	$mssg = $_GET['wrong-profileGuidance'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/guidance/profile.php");
});
</script>';
}
///////////////////////////////////-END GUIDANCE ALERTS
///////////////////////////////////+TEACHER ALERTS
if (isset($_GET['updatedSched'])){
	$mssg = $_GET['updatedSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}
if (isset($_GET['removedSched'])){
	$mssg = $_GET['removedSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}
if (isset($_GET['addedSched'])){
	$mssg = $_GET['addedSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}
if (isset($_GET['existSched'])){
	$mssg = $_GET['existSched'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  text: "Schedule is in conflict or already exist!",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/classlist.php");
});
</script>';
}
if (isset($_GET['update-profileTeach'])){
	$mssg = $_GET['update-profileTeach'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/profile.php");
});
</script>';
}
if (isset($_GET['wrong-profileTeach'])){
	$mssg = $_GET['wrong-profileTeach'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/profile.php");
});
</script>';
}
if (isset($_GET['removedStud'])){
	$mssg = $_GET['removedStud'];
	$cid = $_GET['classid'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/teacher/view.php?'.$cid.'");
});
</script>';
}
///////////////////////////////////-END TEACHER ALERTS
///////////////////////////////////+ADMIN ALERTS
if (isset($_GET['student'])){
	$mssg = $_GET['student'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/student.php");
});
</script>';
}
if (isset($_GET['update-profileAdmin'])){
	$mssg = $_GET['update-profileAdmin'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/profile.php");
});
</script>';
}
if (isset($_GET['wrong-profileAdmin'])){
	$mssg = $_GET['wrong-profileAdmin'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/profile.php");
});
</script>';
}
if (isset($_GET['employee1'])){
	$mssg = $_GET['employee1'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  text: "Thank you for registering!",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/employee.php");
});
</script>';
}
if (isset($_GET['employee2'])){
	$mssg = $_GET['employee2'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  text: "If you think this is an error, please write down your ID number, full name and e-mail and kindly give it to the secretary.",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/employee.php");
});
</script>';
}
if (isset($_GET['employee3'])){
	$mssg = $_GET['employee3'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/employee.php");
});
</script>';
}
if (isset($_GET['studenter'])){
	$mssg = $_GET['studenter'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  text: "Thank you for registering!",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/student.php");
});
</script>';
}
if (isset($_GET['studenterr'])){
	$mssg = $_GET['studenterr'];
echo '<script>
		  swal({
		  title: "Oh no! '.$mssg.'",
		  text: "If you think this is an error, please write down your ID number, full name and e-mail and kindly give it to the secretary.",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/admin/student.php");
});
</script>';
}
///////////////////////////////////-END ADMIN ALERTS
///////////////////////////////////+STUDENT ALERTS
if (isset($_GET['adds'])){
	$mssg = $_GET['adds'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/student/myappointments.php");
});
</script>';
}
if (isset($_GET['update-profileStudent'])){
	$mssg = $_GET['update-profileStudent'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "success",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/student/profile.php");
});
</script>';
}
if (isset($_GET['wrong-profileStudent'])){
	$mssg = $_GET['wrong-profileStudent'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/student/profile.php");
});
</script>';
}
if (isset($_GET['signuperror'])){
	$mssg = $_GET['signuperror'];
echo '<script>
		  swal({
		  title: "'.$mssg.'",
		  icon: "error",
		  button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/views/sign-up.php");
});
</script>';
}
///////////////////////////////////-END STUDENT ALERTS
if (isset($_GET['x'])){
echo '<script>
		swal({
		text: "Please try again.",
		title: "Incorrect login credentials!",
		icon: "error",
		button: "Ok",
		})
		.then(function() {
    	window.history.pushState("", "", "/psychcare/views/login.php");
});
</script>';
}

?>