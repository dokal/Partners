<!DOCTYPE html>
<html lang="en">
<?php
include('config/connection.php');
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EezyNaukari | Partners</title>
    <link rel="shortcut icon" href="img/en2-icon.ico">
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="build/css/home_creative.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top" onload="getClientDeviceLocation()">
    <!--navigation-->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><span id="brand">Eezy</span><span style="color:rgb(0,170,241)">Naukari</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="background-color:white color:black">
                <ul class="nav navbar-nav navbar-right" >
                    <li>
                        <a class="page-scroll" href="#role">Role</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#steps">Joining Steps</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                    <li>
                        <button class="btn btn-default btn-lg sr-button" data-toggle="modal" data-target="#myModal" id="login">Login</button>
                    </li>
				</ul>
            </div>
			
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	
    <!--header-->
    <header>
	     <div class="header-content" id="back">
	         <div class="container-fluid">
                 <div class="row ">
                     <div class="partner_heading" >
                         <h2 class="section-heading">Why Partner with us?</h2>
					 </div>
                 </div>
                    
                 <div class="panel-body">
                     <div class="col-md-5 col-sm-12 col-xs-12" >
                         <div class="panel" id="gradient">
                             <img src="ind.png" style="height:auto;width: auto">
                         </div>
                     </div>
                     <div class="col-md-6 col-sm-12 col-xs-12" style="text-align: left; padding-left:10%;">
                         <div class="row">
                             <p class="text-muted">Eezynaukari took a step towards the development of rural India.We covered few districts but we want to expand on a larger scale so that we can help as many people as we can.Join our movement and help the jobseekers find a job.</p>
                         </div>
                         <div class="row">
                             <center>
                                 <button id="open_form_btn1" class="btn btn-default btn-xl btn-just-icon" data-toggle="modal" data-target="#register_form_modal" data-backdrop="static" data-keyboard="false">
                                     Register <span class="fa fa-sign-in"></span>
                                 </button>
                             </center>
                         </div>
                     </div>
                 </div>     
             </div>
         </div>
    </header>
	
    <!--Modal Login-->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal login content-->
            <div class="modal-content">
                <div class="modal-header" id="login_form_header" style="padding:15px 30px;">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                </div>
                <div class="modal-body" style="padding:40px 50px;">
                    <form role="form" method="post" action="./" id="login_form" autocomplete="off">

                        <input type="hidden" id="device_ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" name="device_ip" />
                        <input type="hidden" id="device_name" value="<?php echo gethostbyaddr($_SERVER['REMOTE_ADDR']); ?>" name="device_name" />
                        <input type="hidden" id="longitude" name="device_longitude">
                        <input type="hidden" id="latitude" name="device_latitude">

                        <div class="form-group">
                            <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
                            <input type="text" class="form-control" id="usrname" placeholder="Enter email" oninput="change_login_button_status()">
                        </div>

                        <div class="form-group">
                            <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                            <input type="password" class="form-control" id="psw" placeholder="Enter password" required>
                            <p id="login_error_display_section"></p>
                        </div>

                        <button type="submit" class="btn btn-success btn-lg" id="login_button" disabled="true"><span class="glyphicon glyphicon-off"></span> Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button id="close_login_modal_btn" type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <p>Forgot <a href="#" style="">Password?</a></p>
                </div>
            </div>
        </div>
    </div>
    <!--Modal-->
    <!-- Modal Registration Form -->
    <div class="modal fade" id="register_form_modal" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" style="color: #0b0b0b;">&times;</button>
                    <span class="modal-title" style="font-size: 21px">Registration Form</span>
                </div>
                <div class="modal-body">
                    <div class="container" style="width: 100%;">
                    <form class="form input_mask" method="post" action="./" id="registration_form">
                        <div class="form-group row">
                            <div class="col-md-5 col-sm-8 col-xs-12">
                                <table class="table table-responsive" >
                                    <tr>
                                        <td><label for="category">Organization </label></td>
                                        <td>
                                            <select id="category" required name="category">
                                                <option value="NGO" selected>NGO</option>
                                                <option value="private institute">Private Institute</option>
                                                <option value="government institute">Government Institute</option>
                                                <option value="Individual">Individual</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <table class="table borderless table-responsive table-condensed">
                            <tbody>
                            <tr>
                                <td colspan="15"><legend>Organization Info</legend></td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                                    </div>
                                    <p class="error_section" id="signup_form_name_error"></p>
                                </td>
                                <td colspan="5">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <p class="error_section" id="signup_form_email_error"></p>
                                </td>
                                <td colspan="5">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="date" class="form-control" id="establishment_date" name="establishment_date" placeholder="Establishment Date" required>
                                    </div>
                                    <p class="error_section" id="signup_form_establishment_date_error"></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="5">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Primary Mobile" required>
                                    </div>
                                    <p class="error_section" id="signup_form_mobile_error"></p>
                                </td>
                                <td colspan="5">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number" class="form-control" id="mobile2" name="mobile2" placeholder="Secondary Mobile" >
                                    </div>
                                    <p class="error_section" id="signup_form_mobile2_error"></p>
                                </td>
                                <td colspan="5">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <select class="form-control" id="working_sector" name="working_sector" required title='Cause of your working'>
                                            <option value="" selected>Working Cause</option>
                                            <option value="Children">Children</option>
                                            <option value="Disabled">Disabled</option>
                                            <option value="Education">Education</option>
                                            <option value="Elderly">Elderly</option>
                                            <option value="Employment">Employment</option>
                                            <option value="Environment">Environment</option>
                                            <option value="Health">Health</option>
                                            <option value="Human Rights">Human Rights</option>
                                            <option value="Women">Women</option>
                                            <option value="Youth">Youth</option>
                                            <option value="other">--others--</option>
                                        </select>
                                    </div>
                                    <p class="error_section" id="signup_form_working_sector_error"></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <div class="form-group input-group required">
                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                        <input type="text" class="form-control" id="village_mohalla" name="village_mohalla" placeholder="Village/Mohalla">
                                    </div>
                                </td>
                                <td colspan="3">
                                    <div class="form-group input-group required">
                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                        <input type="text" class="form-control" id="post" name="post" placeholder="Post">
                                    </div>
                                </td>
                                <td colspan="3">
                                    <div class="form-group input-group required">
                                        <span class="input-group-addon"><i class="fa fa-edit"></i></span>
                                        <input type="text" class="form-control" id="block" name="block" placeholder="Block">
                                    </div>
                                </td>
                                <td colspan="3"><div class="form-group">
                                        <?php
                                        $q = "SELECT DISTINCT city_name FROM city_id ORDER BY city_name ASC";
                                        $r = mysqli_query($dbc, $q);
                                        ?>

                                        <?php echo '<select required="required" class="select4_single form-control" name="district" id="district" tabindex="-1">'; ?>
                                        <?php echo '<option value="">City</option>'; ?>
                                        <?php while ($row = mysqli_fetch_assoc($r)):?>
                                            <?php echo '<option>'.$row['city_name'].'</option>'; ?>
                                        <?php endwhile; ?>
                                        <?php echo '</select>'; ?>
                                        <span class="" aria-hidden="true"></span>
                                    </div>
                                    <p class="error_section" id="signup_form_city_error"></p>
                                </td>
                                <td colspan="3"><div class="form-group ">
                                        <?php
                                        $q = "SELECT DISTINCT state_name FROM city_id ORDER BY state_name ASC";
                                        $r = mysqli_query($dbc, $q);
                                        ?>
                                        <?php echo '<select required="required" class="select3_single form-control" name="state" id="state" tabindex="-1">'; ?>
                                        <?php echo '<option value="">State</option>'; ?>
                                        <?php while ($row = mysqli_fetch_assoc($r)):?>
                                            <?php echo '<option>'.$row['state_name'].'</option>'; ?>
                                        <?php endwhile; ?>
                                        <?php echo '</select>'; ?>
                                        <span class="" aria-hidden="true"></span>
                                    </div>
                                    <p class="error_section" id="signup_form_state_error"></p>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="15"><div class="form-group">
                                        <textarea class="form-control" id="discription" name="discription" placeholder="Discribe your Organisation. Eg Oragnisation Cause, Aim, Reach etc." style="width: 100%;"></textarea>
                                    </div></td>
                            </tr>
                            <tr>
                                <td colspan="7"><div class="form-group">
                                        <label for="attachment">Attach any Article/Newspaper/Audit Report</label>
                                        <input type="file" class="form-control" id="attachment" name="attachment">
                                    </div></td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table table-responsive table-condensed">
                            <tr>
                                <td colspan="3"><legend>Contact Person (Head) </legend></td>
                                <!--<td colspan="1"><button type="button" class="btn btn-default btn-lg" style="float: right; bottom: 2%" title="Add other link">+</button></td>-->
                            </tr>
                            <tr>
                                <td><div class="form-group input-group required" >
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" id="contact_name" name="contact_name" placeholder="Name">
                                    </div><p class="error_section" id="signup_form_contact_name_error"></p></td>
                                <td><div class="form-group input-group required">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="number" class="form-control" id="contact_mobile" name="contact_mobile" placeholder="Mobile">
                                    </div><p class="error_section" id="signup_form_contact_mobile_error"></p></td>
                                <td><div class="form-group input-group required">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input type="text" class="form-control" id="contact_email" name="contact_email" placeholder="Email">
                                    </div><p class="error_section" id="signup_form_contact_email_error"></p></td>
                            </tr>
                        </table>
                        <table class="table table-responsive">
                            <tr>
                                <td colspan="4"><legend>Social Links of the Organization</legend></td>
                                <!--<td colspan="1"><button type="button" class="btn btn-default btn-lg" style="float: right; bottom: 2%" title="Add Another Person Details">+</button></td>-->
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-weixin"></i></span>
                                        <input type="text" class="form-control" id="website" name="website" placeholder="Website Link">
                                    </div>
                                    <p class="error_section" id="signup_form_website_error"></p>
                                </td>
                                <td><div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                                        <input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook Profile Link">
                                    </div></td>
                                <td><div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                                        <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter Link">
                                    </div></td>
                                <td><div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-linkedin"></i></span>
                                        <input type="text" class="form-control" id="linkedin" name="linkedin" placeholder="Linkedin Link">
                                    </div></td>
                            </tr>
                            <tr>
                                <td colspan="4"><legend>Password</legend></td>
                            </tr>
                            <tr>
                                <td><div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" id="new_pswd" name="password" placeholder="Password" required>
                                    </div>
                                    <p class="error_section" id="signup_form_new_pswd_error"></p>
                                </td>
                                <td colspan="3">
                                    <div class="form-group input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input type="password" class="form-control" id="confirm_pswd" placeholder="Confirm Password" required>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="sign_up_btn">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!--Modal-->
    <!--Modal Registration Successfull -->
    <div class="modal fade" id="sign_up_success_modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span class="modal-title" style="font-size: 21px">Registration Successfull</span>
                </div>
                <div class="modal-body">
                    <span class="text-primary"></span>
                </div>
            </div>
        </div>
    </div>
    <!--Modal Registration-->
    <!--Role Section-->
    <section class="bg-primary" id="role">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <h2 class="section-heading">Role of EezyNaukari partners</h2>
                        <hr class="light">
                        <p class="text-faded">Partners will fill the form of the jobseekers and provide the information to them whenever any job is available.</p>
                        <!--<a href="#steps" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
	<!--Steps-->
    <section id="steps" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Joining steps</h2>
					
                    <hr class="primary" style="border-color:rgb(0,170,241)">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-hand-pointer-o text-primary sr-icons" style="color:rgb(0,170,241)"></i>
                        <h3>Step 1</h3>
                        <p class="text-muted">Click on Register button</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center" >
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons" style="color:rgb(0,170,241)"></i>
                        <h3>Step 2</h3>
                        <p class="text-muted">Fill the complete form and submit</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-check-circle text-primary sr-icons " style="color:rgb(0,170,241)"></i>
                        <h3>Step 3</h3>
                        <p class="text-muted">Get your Verification done</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="ribbon_icon.png" style="width:50px; height:70px;" class="sr-icons">
                        <h3>Step 4</h3>
                        <p class="text-muted">Get MoU and become partner with EezyNaukari</p>
                    </div>
                </div>
            </div>
			<div class="row">
			     <div class="col-lg-6  text-center">
				     <div class="container" id="register_section">
                     <div class="call-to-action">
            			 <h2 style="position:relative; margin-top:10%;">Register Now!</h2>
                        <button id="open_form_btn2" class="btn btn-default btn-xl btn-just-icon " data-toggle="modal" data-target="#register_form_modal">
                        Register <span class="fa fa-sign-in"></span>
                        </button>
                     </div>
                 </div>
				 </div>
			</div>
        </div>
    </section>
	
	<!--contact-->
    <section class="bg-primary" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary" style="border-color:white">
                    <p>If you have any queries then contact us on</p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x sr-contact"></i>
                    <p>+91-96169 27087</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                    <p><a class="text-faded" href="mailto:your-email@your-domain.com" >team@eezynaukari.com</a></p>
                </div>
            </div>
        </div>
    </section>
	<footer class="footer-section">
        <div class="container">
            <div class="row mt-10 mb-10">
                <div class="col-md-12 text-center">
                    <!-- Footer Copy Right Text -->
                    <div class="copyright-info social-icons" style="padding-top:5px">
                       <span class="mr-10 text-white">© EezyNaukari 2016</span>
					   <a href="https://www.facebook.com/eezynaukari" target="_blank"><i class="fa fa-2x fa-facebook-square" style="color:rgb(0,170,241);"></i></a>
					   <a href="https://www.linkedin.com/company/eezynaukari" target="_blank"><i class="fa fa-2x fa-linkedin-square"style="color:rgb(0,170,241);" ></i></a>
					   <a href="https://twitter.com/eezynaukari" target="_blank"><i class="fa fa-2x fa-twitter-square" style="color:rgb(0,170,241);"></i></a>
					   <a href="https://plus.google.com/108090331709992460597" target="_blank"><i class="fa fa-2x fa-google-plus-square" style="color:rgb(0,170,241);"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Theme JavaScript -->
    <script src="build/js/home_creative.js"></script>
    <script>
        function getClientDeviceLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition);
            }
        }
        function showPosition(position) {
            document.getElementById("longitude").value = position.coords.latitude;
            document.getElementById("latitude").value = position.coords.longitude;
        }
        function change_login_button_status() {
            var txt = document.getElementById('usrname').value;
            if(txt.length==0){
                document.getElementById('login_button').disabled = true;
            }
            else{
                document.getElementById('login_button').disabled = false;
            }
        }
        function reset_login_form() {
            document.getElementById('login_form').reset();
            document.getElementById('login_error_display_section').style.display = 'none';
            document.getElementById('login_session_error_display_section').style.display = 'none';
        }
        var modal = document.getElementById('myModal');
        var modal_close_0 = document.getElementsByClassName("close")[0];
        var modal_close_1 = document.getElementById('close_login_modal_btn');
        modal_close_0.onclick = function() {
            reset_login_form();
            change_login_button_status();
        };
        modal_close_1.onclick = function() {
            reset_login_form();
            change_login_button_status();
        };
        window.onclick = function(event) {
            if (event.target == modal) {
                reset_login_form();
                change_login_button_status();
            }
        };
        function validate_form(){
			var email = $('#email').val();
			
            $('.error_section').css('display', 'block');
            if( $('#name').val() == ''){
                alert("Name");
                $('#signup_form_name_error').html('Field Cant be Blank');
            }
            else{
                $('#signup_form_name_error').html('');
            }
			
            if( $('#email').val() == ''){
                $('#signup_form_email_error').html('Field Cant be Blank');
            }
            else{
				
                    $('#signup_form_email_error').html('');
            }
			
			if( $('#establishment_date').val() == ''){
                $('#signup_form_establishment_date_error').html('Field Cant be Blank');
            }
            else{
                $('#signup_form_establishment_date_error').html('');
            }
			
			if( $('#mobile').val() == ''){
                $('#signup_form_mobile_error').html('Field Cant be Blank');
            }
            else{
				if($('#mobile').val().length!=10)
				{
					$('#signup_form_mobile_error').html('Invalid number');
				}else{
					$('#signup_form_mobile_error').html('');
				}
                
            }
			
			if( $('#mobile2').val() != ''){
				if($('#mobile2').val().length!=10)
                $('#signup_form_mobile2_error').html('Invalid number');
			    else{
                $('#signup_form_mobile2_error').html('');
                }
            }
			
			if( $('#working_sector').val() == ''){
                $('#signup_form_working_sector_error').html('Field Cant be Blank');
            }
            else{
                $('#signup_form_working_sector_error').html('');
            }
			
			if( $('#district').val() == ''){
                $('#signup_form_city_error').html('Field Cant be Blank');
            }
            else{
                $('#signup_form_city_error').html('');
            }
			
			if( $('#state').val() == ''){
                $('#signup_form_state_error').html('Field Cant be Blank');
            }
            else{
                $('#signup_form_state_error').html('');
            }
			
			
				
			if( $('#contact_name').val() == '' && $('#category').val() != 'Individual'){
                $('#signup_form_contact_name_error').html('Field Cant be Blank');
            }
            else{
				
                $('#signup_form_contact_name_error').html('');
            }
			
			if( $('#contact_email').val() == '' && $('#category').val() != 'Individual'){
                $('#signup_form_contact_email_error').html('Field Cant be Blank');
            }
            else{
                $('#signup_form_contact_email_error').html('');
            }
			
			if( $('#contact_mobile').val() == '' && $('#category').val() != 'Individual'){
                $('#signup_form_contact_mobile_error').html('Field Cant be Blank');
            }
            else{
                if($('#contact_mobile').val().length!=10)
				{
					$('#signup_form_contact_mobile_error').html('Invalid number');
				}else{
					$('#signup_form_contact_mobile_error').html('');
				}
            }
			
			
			
			if( ($('#website').val()=='' && $('#facebook').val()=='' && $('#twitter').val()=='' && $('#linkedin').val()=='' )){
                $('#signup_form_website_error').html('Provide minimum one link');
            }
            else{
                $('#signup_form_website_error').html('');
            }
            /*if( validateEmail($('#email').val())){
                $('#signup_form_email_error').html('');
            }
            else{
                $('#signup_form_email_error').html('Email Not Valid');
            }*/
            if( $('#new_pswd').val() == ''){
                $('#signup_form_new_pswd_error').html('Field Cant be Blank');
            }
            else{
				if($('#new_pswd').val().length < 6 ){
					$('#signup_form_new_pswd_error').html('minimum lenght of 6');
				}
				   if($('#new_pswd').val() != $('#confirm_pswd').val()){
					
				     $('#signup_form_new_pswd_error').html('Password should be same');
				    }
			       else
					$('#signup_form_new_pswd_error').html('');
				
            }
			
			
            return false;
        }
    </script>
	<script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
            $('#login_button').click(function () {
                $.ajax({
                    type: 'POST',
                    url: 'config/verify_login.php',
                    data: 'email=' + $('#usrname').val() + '&password=' + $('#psw').val() + '&device_ip=' + $('#device_ip').val() + '&device_name=' + $('#device_name').val() + '&device_longitude=' + $('#longitude').val() + '&device_latitude=' + $('#latitude').val(),
                    success: function (html) {
                        if (html == 'login_successful') {
                            //window.alert(html);
                            window.location = 'index.php?page=dashboard';
                        }
                        else if(html=='user_unverified'){
                            document.getElementById('login_error_display_section').style.display = 'block';
                            document.getElementById('login_error_display_section').innerHTML = 'User Not yet Verified<br>Please Wait untill your verification is Complete';
                        }
                        else if (html== 'login_error'){
                            //window.alert(html);
                            document.getElementById('login_error_display_section').style.display = 'block';
                            document.getElementById('login_error_display_section').innerHTML = 'Incorrect Username or Password';
                        }
                        else if (html=='login_session_already_active')
                        {
                            document.getElementById('login_error_display_section').style.display = 'block';
                            document.getElementById('login_error_display_section').innerHTML = 'A user session already active, please try again later';
                        }
                    },
                });
                return false;
            });
            $('#sign_up_btn').click(function(){
                if(validate_form()){
                    $.ajax({
                        type: 'POST',
                        url: 'ajax_files/ajax.php?page=supplyform',
                        data: 'submitted=1&category='+ $('#category').val() + '&name='+ $('#name').val() +'&email='+$('#email').val()+'&mobile='+$('#mobile').val()+'&mobile2='+$('#mobile2').val()+'&village_mohalla='+$('#village_mohalla').val()+'&post='+$('#post').val()+'&block='+$('#block').val()+'&district='+$('#district').val()+'&state='+$('#state').val()+'&contact_name='+$('#contact_name').val()+'&contact_mobile='+$('#contact_mobile')+'&contact_email='+$('#contact_email').val()+'&website='+$('#website').val()+'&facebook='+$('#facebook').val()+'&twitter='+$('#twitter').val()+'&linkedin='+$('#linkedin').val()+'&establishment_date='+$('#establishment_date').val()+'&working_sector='+$('#working_sector').val()+'&discription='+$('#discription').val()+'&password='+$('#new_pswd').val()+'&attachment=',
                        success: function(html){
                            if(html=='Signup successful'){
                                $('#register_form_modal').modal('toggle');
                                $('#sign_up_success_modal').modal('toggle');
                                $('#sign_up_success_modal span:last').html('Congrats! Your have Successfully Registered with EezyNaukari.');
                            }
                            else{
                                $('#sign_up_success_modal span:last').html(html);
                            }
                        },
                        error: function(){
                            $('#sign_up_success_modal span:last').html("Registration Error<br>Try Again Later Or Please feel free to <a href='#contact'>contact us</a>");
                        }
                    });
                }
            });
            $('#category').change(function(){
                if($(this).val()=='Individual'){
                    $('#contact_name').attr('disabled', true);
                    $('#contact_email').attr('disabled', true);
                    $('#contact_mobile').attr('disabled', true);
                    $('#establishment_date').attr("placeholder", "Date of Birth");
                }
                else{
                    $('#contact_name').attr('disabled', false);
                    $('#contact_email').attr('disabled', false);
                    $('#contact_mobile').attr('disabled', false);
                    $('#establishment_date').attr("placeholder", "Establishment Date");
                }
            });
            $('#working_sector').change(function(){
                if($(this).val()=="other"){
                    $(this).replaceWith("<input type='text' class='form-control' id='working_sector' name='working_sector' required placeholder='Other Cause' title='Enter Other Cause of your working'>");
                }
            });
        });
	</script>
</body>
</html>
