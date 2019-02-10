<!DOCTYPE html>
<html lang="en">
<head>
		<script type="text/javascript">
			function check()
			{
			   var cat=document.getElementById('cat').value;
				if(cat == "")
					{
						alert("please fill category");
						document.formname.cat.focus();
					}
			 else if(document.getElementById('sub').value=="")
					{
						alert("please fill sub_Category"); 
						document.formname.sub.focus();  
					}
			   else if(document.getElementById('des').value=="")
					{
						alert("please fill notes/solutions"); 
						document.formname.des.focus();  
					}
				else if(document.getElementById('up').value=="")
					{
						alert("please upload your file"); 
						document.formname.up.focus();  
					}
				else if(document.getElementById('pr').value=="")
					{
						alert("please select sharing type");
						document.formname.sharing.focus();   
					}
				else{
					
					document.getElementById('formname').submit()
				}
				
			}
			 
			function exitFullscreen(id) {
			  if(document.exitFullscreen) {
				document.exitFullscreen();
			  } else if(document.mozCancelFullScreen) {
				document.mozCancelFullScreen();
			  } else if(document.webkitExitFullscreen) {
				document.webkitExitFullscreen();
			  }
			}
			</script>
	<title>Contact V4</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<a href="/eclipse/register/login/user/">HOME</a>


	<div class="container-contact100">
		<div class="wrap-contact100">
			
				<form class="form-horizontal" id="formname" name="formname" method="post" action="../upload.php"  enctype="multipart/form-data">
				<span class="contact100-form-title">
					Create Notes
				</span>
				

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Category</span>
					<div>
						<select class="selection-2" name="cat" id="cat">
							<option value="">---select---</option>
							<option value="">---select---</option>
							<option value="common">Common</option>
							 <option value="c">C</option>
							 <option value="c++">C++</option>
							 <option value="java">JAVA</option>
							 <option value="python">Python</option>
							 <option value="php">PHP</option>
							 <option value="others">Others</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">Sub Catogory</span>
					<div>
						<select class="selection-2" name="sub" id="sub">
								<option value="">---select---</option>
								<option value="program structure">Program Structure</option>
								<option value="variable declaration">Variable Declaration</option>
								<option value="looping structures">Looping structures</option>
								<option value="control structures">Control structures</option>
								<option value="syntax">Syntax</option>
								<option value="common">Common</option>
								<option value="others">Others</option>
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
						<label class="control-label" for="selectError3"><h3>Topic:</h3></label>
                               
								 
						&nbsp;&nbsp;&nbsp;&nbsp;
						 <textarea name="topic" placeholder="Type here" style="border:solid 1px orange;" ></textarea>
				</div>
				<div class="wrap-input100 input100-select">
						<label class="control-label" for="selectError3"><h3>Links_Refered:</h3></label>
                               
								 
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                 <textarea name="link" rows="1" placeholder="Type here" style="border:solid 1px orange;" ></textarea>
				</div>

				<div class="wrap-input100 input100-select">
						<label class="control-label" ><h3>Notes/Solutions:</h3></label>
							  <div class="controls">
							    <label>
							    <textarea name="des" id="des" placeholder="Type here" style="border:solid 1px orange;"  rows="5"></textarea>
							    </label>
							  </div>
				</div>

				<div class="wrap-input100 input100-select">
						<label class="control-label" for="fileInput"><h3>Upload file</h3></label>
							  
								  <input name="up" id="up" type="file" />
				</div>

				<div class="wrap-input100 input100-select">
						<label class="control-label" for="selectError3"><h3>Privacy:</h3></label>
                               
								
                                  <select name="pr" id="pr" style="height: 30px; width: 200px; left: 250; top: 250;" onChange="javascript: dropdownlist(this.options[this.selectedIndex].value);">
                                   <option value="">---select---</option>
                                    <option value="public">Public</option>
                                    <option value="private">Private</option>
                                   
                                   </select>
                           
				</div>


				<div class="control-group warning">
						<p>
						  <input name="b1" type="button" onclick="check()"  value="Register" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px"/>
						  <input name="b2" type="reset" value="Reset" style="height: 40px; width: 150px; left: 250; top: 250; background-color: #33FFFF; color:#FF0000;font-size:24px" / ></p>
						  
						  </div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
